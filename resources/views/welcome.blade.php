@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        <h5>Bienvenue sur LaraGram</h5>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img src="{{ asset('svg/welcome.svg') }}" alt="network-logo" class="welcome-logo">
                        <p>Visitez la liste des profiles utilisateurs en cliquant ci-dessous</p>
                        <a href="{{ route('profiles.index') }}" class="btn btn-primary">Liste des utilisateurs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
