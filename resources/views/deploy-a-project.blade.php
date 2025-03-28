@extends('layouts.app')

@section('title', 'Deploy a Project - Devhaus Envoyer Viewer')

@section('content')
    <a href="{{ url('/') }}" class="back-button">← Back to Dashboard</a>
    <h1>Choose A Project To Deploy</h1>
    <ul class="projects-list">
        @foreach ($projects as $project)
            <li class="project-item">
                <form action="{{ route('deploy-project', $project['id']) }}" method="POST">
                    @csrf
                    <button type="submit" class="deploy-button">
                        {{ $project['name'] ?? 'Unnamed Project' }}
                        <span class="view-text">Click to deploy</span>
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
