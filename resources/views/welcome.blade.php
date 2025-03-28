@extends('layouts.app')

@section('header')
    <h1>Devhaus Envoyer Viewer</h1>
@endsection

@section('content')
    <div class="setup-info">
        <strong>Requirements for use:</strong>
        <ul>
            <li>Active <a href="https://envoyer.io/dashboard" target="_blank" rel="noopener">Envoyer</a> account with existing projects</li>
            <li>PHP 8.1+ and Laravel environment properly configured</li>
            <li>Add your own API key from Envoyer to this project's <code>.env</code> file as <code>ENVOYER_API_KEY</code></li>
            <li>API key with sufficient permissions - navigate to Account → API on Envoyer's website for this</li>
            <li>For the purposes of this project, only <code>deployments:create</code> needs to be on when generating an API key</li>
            <li>According to <a href="https://envoyer.io/api-documentation#introduction" target="blank" rel="noopener">Envoyer's API Documentation</a>, all <code>GET</code> endpoints are freely accesible with any API key</li>
        </ul>
    </div>

    <div class="nav-grid">
        <a href="{{ url('/all-projects') }}" class="nav-item">
            <div class="nav-title">Projects List</div>
            <div class="nav-description">View a list of all projects</div>
        </a>

        <a href="{{ url('/deploy-a-project') }}" class="nav-item">
            <div class="nav-title">Deploy</div>
            <div class="nav-description">Deploy a specific project</div>
        </a>

        <a href="#" class="nav-item">
            <div class="nav-title">Retrieve Deployment</div>
            <div class="nav-description">View a specific deployment</div>
        </a>
    </div>
@endsection
