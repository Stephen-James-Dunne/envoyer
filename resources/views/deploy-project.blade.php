@extends('layouts.app')

@section('title', 'Deploy Project - Devhaus Envoyer Viewer')

@section('content')
    <div class="container">
        <a href="{{ url('/all-projects') }}" class="back-button">← Back to Projects</a>
        <h1>Deploy Project</h1>
        <form action="{{ route('deploy-project') }}" method="POST">
            @csrf
            <label for="project_id">Project</label>
            <select name="project_id" id="project_id">
                @foreach ($projects as $project)
                    <option value="{{ $project['id'] }}">{{ $project['name'] }}</option>
                @endforeach
            </select>
            <button type="submit">Deploy</button>
        </form>
    </div>
