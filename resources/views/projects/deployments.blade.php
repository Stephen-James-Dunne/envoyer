@extends('layouts.app')

@section('title', 'Deployment Viewer - Devhaus Envoyer Viewer')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <a href="{{ url('/all-projects') }}" class="back-button">← Back to Projects</a>

        <h1 class="project-name">Deployments for {{ $project['name'] }}</h1>
        <span class="help-text">Click a deployment to view more details</span>

        <ul class="projects-list">
            @forelse ($deployments as $deployment)
                <li class="project-item deployment-item">
                    <a
                        href="{{ route('deployment', ['projectId' => $project['id'], 'deploymentId' => $deployment['id']]) }}">
                        <div class="deployment-info">
                            <div>{{ $deployment['commit_message'] }}</div>
                            <small>{{ $deployment['commit_author'] }} • {{ $deployment['created_at'] }}</small>
                        </div>
                        <span class="deployment-status status-{{ $deployment['status'] }}">
                            {{ ucfirst($deployment['status']) }}
                        </span>
                    </a>
                </li>
            @empty
                <li class="project-item deployment-item">No deployments found for this project</li>
            @endforelse
        </ul>
    </div>
</body>

</html>
