@extends('layouts.layout')

@section('content')
    <div class="container">
        <div><h1 class='title is-2'>Crée un post</h1></div>

        <div class="mt-3">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" name="name" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea class="textarea" name="content" placeholder="Text input"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit" class="button is-primary">Crée</button>
                </div>
            </form>
        </div>
    </div>

@endsection
