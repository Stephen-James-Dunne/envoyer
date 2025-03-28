@extends('layouts.app')

@section('title', 'Deployment Viewer - Devhaus Envoyer Viewer')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <a href="{{ route('deployments', ['projectId' => $project['id']]) }}" class="back-button">
            ← Back to Deployments
        </a>

        <h1>{{ $project['name'] }} Deployment</h1>
        <span class="help-text">Deployment details below</span>

        <ul class="projects-list">
            <li class="project-item deployment-item">
                <div class="deployment-info">
                    <div>{{ $deployment['commit_message'] ?? 'No commit message' }}</div>
                    <small>
                        {{ $deployment['commit_author'] ?? 'Unknown author' }} •
                        {{ isset($deployment['created_at']) ? $deployment['created_at'] : 'No date' }}
                    </small>
                </div>
                <span class="deployment-status status-{{ $deployment['status'] ?? 'unknown' }}">
                    {{ ucfirst($deployment['status'] ?? 'unknown') }}
                </span>
            </li>
        </ul>

        <div class="deployment-info">
            <div class="detail-group">
                <h2>Project Info</h2>
                <p>Project ID: {{ $project['id'] }}</p>
                <p>Project Name: {{ $project['name'] }}</p>
            </div>

            <div class="detail-group">
                <h2>Deployment Details</h2>
                <p>Status: {{ ucfirst($deployment['status'] ?? 'unknown') }}</p>
                <p>Author: {{ $deployment['commit_author'] ?? 'Unknown' }}</p>
                <p>Created: {{ isset($deployment['created_at']) ? $deployment['created_at'] : 'No date' }}</p>
            </div>
        </div>
    </div>
</body>

</html>
