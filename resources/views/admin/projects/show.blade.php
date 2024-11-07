@extends('layouts.app')

@section('content')
	<h1 class="text-center p-3">
		{{ $project->name }}
    </h1>
    <div class="container-lg">
        <div class="project-property">
            <b>Authors</b>: {{ $project->authors }}
        </div>
        <div class="project-property">
            <b>Arguments</b>
            <p>{{ $project->arguments }}</p>
        </div>
        <div class="project-property">
            <b>Linguaggi di programmazione</b>: {{ $project->programming_languages }}
        </div>
        <div class="project-property">
            <b>Data d'inizio</b>: {{ $project->start_date }} <b class="ms-3">Data di fine</b>: {{ $project->end_date }}
        </div>
    </div>
@endsection
