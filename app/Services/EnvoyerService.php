<?php

//A) list all projects
//B) list all deployments for a project
//C) deploy a project
//D) get a deployment

// First you should build the thing using only mock data and the we’ll add API keys when finished to allow you to complete it.

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class EnvoyerService
{
    protected $client;
    protected $api_key;
    protected $mocks;

    public function __construct()
    {
        // For testing mock data, set this to true
        $this->mocks = true;

        $this->api_key = env('ENVOYER_API_KEY');

        $this->client = new Client([
            'base_uri' => 'https://envoyer.io/api/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->api_key,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    public function getProjects()
    {
        // Mock data for testing; if mocks is not null, this is returned
        if ($this->mocks) {
            $mockData = require base_path('tests/Fixtures/Envoyer/responses.php');
            return $mockData['projects'] ?? [];
        }

        // Actual API call for non-mock environment
        $response = $this->client->get('projects');
        $data = json_decode($response->getBody()->getContents(), true); // return the projects as an associative array

        // a simpler way to stucture this method is to return the projects directly on the line above,
        // but I've added this logging below to show the response from the API

        Log::info('Envoyer API Response for Listing All Projects', [
            'status' => $response->getStatusCode(),
            'data' => $data
        ]);

        // Check if response has expected structure
        if (!isset($data['projects']) && is_array($data)) {
            // If response from API is succesful but doesn't have the expected structure
            $data = ['projects' => $data];
        }

        return $data['projects'] ?? [];
    }

    public function listDeployments($projectId)
    {
        // Mock data for testing, if mocks is not null, this is returned
        if ($this->mocks) {
            $mockData = require base_path('tests/Fixtures/Envoyer/responses.php');
            return $mockData['deployments'][$projectId]['deployments'] ?? [];
        }

        // Actual API call for non-mock environment
        $response = $this->client->get("projects/{$projectId}/deployments"); // API call to list all deployments for a project
        $data = json_decode($response->getBody()->getContents(), true);

        Log::info('Envoyer API Response for Listing All Deployments', [
            'status' => $response->getStatusCode(),
            'project_id' => $projectId,
            'data' => $data
        ]);

        // to do: add logging for the response from the API
        // test API responses in unit tests once this is done

        // Check if response has expected structure
        if (!isset($data['deployments']) && is_array($data)) {
            // If response from API is successful but doesn't have the expected structure
            $data = ['deployments' => $data];
        }

        return $data['deployments'] ?? [];
    }

    public function deployProject($projectId, $from = 'branch', $branch = 'main')
    {
        // Mock data for testing, if mocks is not null, this is returned
        if ($this->mocks) {
            $responsesPath = base_path('tests/Fixtures/Envoyer/responses.php');
            $mockData = require $responsesPath;

            $nextId = end($mockData['deployments'][$projectId]['deployments'])['id'] + 1;

            $newDeployment = [
                'id' => $nextId,
                'project_id' => $projectId,
                'user_id' => $projectId,
                'commit_branch' => $branch,
                'commit_hash' => substr(bin2hex(random_bytes(4)), 0, 8),
                'commit_author' => 'Current User',
                'commit_avatar' => 'https://avatars1.githubusercontent.com/u/123456?v=4',
                'commit_message' => "Deploy from {$from} - {$branch}",
                'status' => 'running',
                'created_at' => now()->toIso8601String(),
                'updated_at' => now()->toIso8601String()
            ];

            if (!isset($mockData['deployments'][$projectId])) {
                $mockData['deployments'][$projectId] = ['deployments' => []];
            }

            $mockData['deployments'][$projectId]['deployments'][] = $newDeployment;

            // Export as PHP array with proper formatting
            $export = var_export($mockData, true);
            // Clean up Carbon instances if any remain
            $export = preg_replace('/Carbon::__set_state\(([^)]+)\)/', 'null', $export);

            file_put_contents(
                $responsesPath,
                "<?php\n\nreturn " . $export . ";\n"
            );

            return $newDeployment;
        }

        // Actual API call for non-mock environment
        $response = $this->client->post("projects/{$projectId}/deployments", [
            'json' => [
                'from' => $from,
                'branch' => $branch
            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
