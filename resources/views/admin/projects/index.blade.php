@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="my-3">
                        Progetti
                    </h1>

                    @foreach ($projects as $project)
                        <h2>Titolo progetto: {{ $project->name }}</h2>
                        <br>
                    @endforeach

                    <br>
                    La dashboard è una pagina privata (protetta dal middleware)
                </div>
            </div>
        </div>
    </div>
@endsection