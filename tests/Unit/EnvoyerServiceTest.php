<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\EnvoyerService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class EnvoyerServiceTest extends TestCase
{

    // php artisan test --filter test_projects_can_be_viewed
    public function test_projects_can_be_viewed(): void
    {
        $envoyerService = new EnvoyerService();
        $projects = $envoyerService->getProjects();

        Log::info('API Response Projects', ['data' => $projects]);

        // assertions for mock data
        if ($envoyerService->mockingData()) {
            $this->assertIsArray($projects);
            $this->assertNotEmpty($projects);
            return;
        }

        // assertions for actual API data; no projects exist in the Envoyer account yet
        $this->assertIsArray($projects);
        $this->assertEmpty($projects);
    }
}
