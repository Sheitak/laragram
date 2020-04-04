@extends('layouts.app')

@section('content')
    <div class="container">
        <h4 class="text-center">Liste des Utilisateurs</h4>
        <div class="row justify-content-center">
            @foreach ($users as $user)
                <div class="col-md-8">
                    <div class="card mt-5">
                        <div class="card-header d-flex">
                            <div class="col-10 font-weight-bold">{{ $user->username }}</div>
                            <a href="{{ route('profiles.show', ['user' => $user->username]) }}" class="btn btn-sm btn-info">Voir le Profile</a>
                        </div>

                        <div class="card-body">
                            <div class="d-flex row">
                                <div class="col-3">
                                    <img src="{{ $user->profile->getImage() }}" class="avatar rounded-circle w-100">
                                </div>
                                <div class="col-9 text-justify mt-auto mb-auto">
                                    <div class="font-weight-bold mb-3">{{ $user->profile->title }}</div>
                                    <div class="mb-3">{{ $user->profile->description }}</div>
                                    <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 pt-4">
            <div class="row d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
