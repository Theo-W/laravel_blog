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
                    <div class="card" style="border-bottom: #a1a4aa 1px solid">
                        <div class="card-content">
                            <h1>{{ $post->user->name }}</h1>
                            <a href="{{route('posts.show', ['id' => $post->id ])}}">{{ $post->name }}</a>
                        </div>

                        <div class="card-footer">
                            @if($post->user->id === Auth::id())
                                <a href="{{route('posts.edit', ['id' => $post->id ])}}"
                                   class="has-text-link mr-2">Modfier</a>
                                <a href="{{route('posts.delete', ['id' => $post->id ])}}"
                                   class="has-text-danger">Supprimer</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <p class="has-text-centered">Il n'y a pas de posts</p>
            @endif
        </div>
    </div>
@endsection
