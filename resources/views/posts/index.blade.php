@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="is-flex is-flex-direction-row is-justify-content-space-between is-align-items-center ">
            <h1 class="title is-2 mr-2">Coucou le blog</h1>
            <a class="button is-primary" href="{{route('posts.create')}}">Crée un post</a>
        </div>

        <div>
            @if($posts->count() > 0 )
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ $post->name }}</h2>
                        </div>
                        <div class="card_content">
                            <p>{{ $post->content }}</p>
                        </div>
                        <div class="car-footer">
                            <a href="{{route('posts.show', ['id' => $post->id ])}}" class="button is-primary">Voir le
                                post</a>
                            <a href="{{route('posts.edit', ['id' => $post->id ])}}" class="button is-link">Modfier</a>
                            <a href="{{route('posts.delete', ['id' => $post->id ])}}"
                               class="button is-danger">Supprimer</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="has-text-centered">Il n'y a pas de posts</p>
            @endif
        </div>
    </div>
@endsection
