@extends('layouts.app')

@section('content')
	<h1 class="text-center p-3">
		Projects
    </h1>
    <div class="container-lg">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Autori</th>
                <th scope="col">Argomenti</th>
                <th scope="col">Linguaggi di programmazione</th>
                <th scope="col">Data d'inizio</th>
                <th scope="col">Data di fine</th>
            </tr>
        </head>
        <tbody>
        @forelse ($projects as $id => $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->authors }}</td>
                <td>{{ $project->arguments }}</td>
                <td>{{ $project->programming_languages }}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>
                {{-- buttons table data --}}
                <td class="buttons-col">
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary btn-sm">Mostra</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-success btn-sm">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" custom-data-name="{{ $project->name }}" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Cancella</button>
                    </form>
                </td>
                {{-- Project nullable fields --}}
                {{-- @if ($train->on_time)
                <td>&bull;</td>
                @else
                <td></td>
                @endif --}}
            </tr>
        @empty
            <p>No projects found</p>
        @endforelse
        </tbody>
    </table>
    </div>
@endsection

