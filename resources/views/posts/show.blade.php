@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1 class="title is-2">{{$post->name}}</h1>
        <p>{{$post->content}}</p>

        <div class="mt-5">
            <h2 class="title is-2">Poster un commentaire</h2>

            <div class="mt-3">
                @if($post->messages->count() > 0)
                    @foreach($post->messages as $message)
                        <div class="card">
                            <p>{{ $message->message }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="has-text-centered">Il n'y a pas de commentaires </p>
                @endif
            </div>

            <div>
                <h3 class="title is-4">Commenter</h3>

                <form method="post" action="{{ route('comment.store') }}">
                    @csrf
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" name="content" placeholder="Textarea"></textarea>
                        </div>
                        <button type="submit" class="button is-primary mt-3">Commenter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
