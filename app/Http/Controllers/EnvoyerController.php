<?php

// controller needed for handling the request from the user
// the controller will call the service to get the projects, then
// return the projects to the view

namespace App\Http\Controllers;

use App\Services\EnvoyerService;

class EnvoyerController extends Controller
{
    protected $envoyerService;

    public function __construct(EnvoyerService $envoyerService) // dependency injection
    {
        $this->envoyerService = $envoyerService;
    }

    public function getProjects()
    {
        $projects =  $this->envoyerService->getProjects(); // call the service to get the projects
        $routeName = request()->route()->getName(); // get the route name


        switch($routeName) {
            case 'deploy-a-project':
                return view('deploy-a-project', compact('projects'));
                break;
            case 'all-projects':
                return view('all-projects', compact('projects'));
                break;
        }
    }


    public function listDeployments($projectId)
    {
        $project = collect($this->envoyerService->getProjects())
            ->firstWhere('id', $projectId); // get the project by id

        $deployments = $this->envoyerService->listDeployments($projectId); // get the deployments for that id

        return view('projects.deployments', [
            'project' => $project,
            'deployments' => $deployments
        ]);
    }

    public function deployProject($projectId, $from = 'branch', $branch = 'main')
    {
        $mockDeployment = $this->envoyerService->deployProject($projectId, $from, $branch); // call the service to deploy the project

        session()->flash('message', 'Deployment started successfully!'); // flash message to show the user

        return redirect()->route('all-projects'); // redirect the user to the all-projects route
    }

    public function getDeployment($projectId, $deploymentId)
    {
        $project = collect($this->envoyerService->getProjects())
            ->firstWhere('id', $projectId); // get the project by id

        $deployment = $this->envoyerService->getDeployment($projectId, $deploymentId); // get the deployment by id

        return view('projects.deployment', [
            'project' => $project,
            'deployment' => $deployment
        ]);
    }
}
