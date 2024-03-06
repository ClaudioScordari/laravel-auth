@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>
                        Progetti
                    </h1>

                    <br>

                    <ul>
                        @foreach ($projects as $project)
                            <li class="mb-3">
                                <h2>
                                    Nome progetto: {{ $project->name }}
                                </h2>

                                {{-- Show --}}
                                <div class="pb-2 border-bottom border-3 border-dark d-inline-block">
                                    <a class="btn btn-primary" href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                        Vedi il progetto
                                    </a>
                                </div>

                                {{-- Edit --}}
                                <div class="pb-2 border-bottom border-3 border-dark d-inline-block">
                                    <a class="btn btn-warning ms-2" href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">
                                        Modifica questo progetto
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <br>

                    La dashboard è una pagina privata (protetta dal middleware)
                </div>
            </div>
        </div>
    </div>
@endsection