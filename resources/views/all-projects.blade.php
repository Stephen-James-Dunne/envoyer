@extends('layouts.app')

@section('title', 'Projects List - Devhaus Envoyer Viewer')

@section('content')
    <a href="{{ url('/') }}" class="back-button">← Back to Dashboard</a>
    <h1 class="page-header">Envoyer Projects Overview</h1>
    <ul class="projects-list">
        @foreach ($projects as $project)
            <li class="project-item">
                <a href="{{ route('deployments', $project['id']) }}">
                    {{ $project['name'] ?? 'Unnamed Project' }}
                    <span class="view-text">Click to view deployments</span>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
