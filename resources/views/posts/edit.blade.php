@extends('layouts.layout')

@section('content')
<div class="container">
    <div>
        <h1 class='title is-2'>Modifier le post {{ $post->id }} </h1>
    </div>

    <div class="mt-3">
        <form method="POST" action="{{ route('posts.storeEdit', ['id' =>  $post->id ]) }}">
            @csrf
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" name="name" type="text" value="{{ $post->name }}">
                </div>
            </div>
            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <textarea class="textarea" name="content" type="text">{{ $post->content }}</textarea>
                </div>
            </div>
            <div>
                <button type="submit" class="button is-primary">Modifier</button>
            </div>
        </form>
    </div>
</div>

@endsection
