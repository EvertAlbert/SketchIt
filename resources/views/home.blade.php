@extends('layouts.app')

@section('join')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="userBar">
        <p class="info">Click the button bellow to join a random game</p>
    </div>
    <main class="game">
        <nav class="joinNav">
            <a href="/game" id="joinButton">Join current game</a>
        </nav>
    </main>


@endsection