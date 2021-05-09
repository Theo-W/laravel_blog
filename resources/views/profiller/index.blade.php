@extends('layouts.layout')

@section('content')

    <h1 class="title is-2">hello {{ $users->name }}</h1>

    <div>
        <h2 class="title is-2">Mes Message</h2>
        <div>
            @if($users->message->count() > 0)
                @foreach($users->message as $message)
                    <div class="card">
                        <div class="card-content">
                            <p class="mt-2">{{ $message->post->name }}</p>
                            <p class="mt-2">{{ $message->message }}</p>
                            <p class="mt-2">crée le: {{ $message->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="has-text-centered">Vous n'avez pas de commentaire</p>
            @endif
        </div>
    </div>

@endsection
