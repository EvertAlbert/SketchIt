@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="userBar">
        <p class="info">joining lobby: <span id="lobbyNumber">lobbyNumber</span></p>
    </div>
    <main class="game">
        <ul id="playerList">
            <li>no player</li>
            <li>no player</li>
            <li>no player</li>
            <li>no player</li>
        </ul>
    </main>

@endsection