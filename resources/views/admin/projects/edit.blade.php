@extends('layouts.app')

@section('content')
  <h1 class="ms-1">Edit {{ $editing_project->name }}</h1>

  <div class="container-md">
    <form action="{{ route('admin.projects.update', $editing_project->id ) }}" method="POST" class="col-md-8 mx-auto row gy-3">
      @csrf
      @method('PUT')

      <div class="col-lg-6">
        <label for="input-name" class="form-label">Nome del progetto</label>
        <input type="text" class="form-control" id="input-name" name="name" value="{{ $editing_project->name }}">
      </div>
      <div class="col-lg-6">
        <label for="input-authors" class="form-label">Autori</label>
        <input type="text" class="form-control" id="input-authors" name="authors" value="{{ $editing_project->authors }}">
      </div>
      <div class="col-12">
        <label for="input-arguments" class="form-label">Argomenti</label>
        <textarea type="text" class="form-control" id="input-arguments" name="arguments" rows="4">{{ $editing_project->arguments }}</textarea>
      </div>
      <div class="col-12">
        <label for="input-programming_languages" class="form-label">Linguaggi di programmazione</label>
        <input type="text" class="form-control" id="input-programming_languages" name="programming_languages" value="{{ $editing_project->programming_languages }}">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <label for="input-start-date" class="form-label">Data d'inizio</label>
        <input type="date" class="form-control" id="input-start-date" name="start_date" value="{{ $editing_project->start_date }}">
      </div>
      <div class="col-6 col-sm-4 col-md-4">
        <label for="input-end-date" class="form-label">Data di fine</label>
        <input type="date" class="form-control" id="input-end-date" placeholder="" name="end_date" value="{{ $editing_project->end_date }}">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">Modifica</button>
        <button type="reset" class="btn btn-warning">Cancella campi</button>
      </div>
    </form>
  </div>

	{{-- <h1 class="text-center p-3">
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
						<b>Data d'inizio</b>: {{ $project->start_date }}, <b>data di fine</b>: {{ $project->end_date }}
				</div>
		</div> --}}
@endsection
