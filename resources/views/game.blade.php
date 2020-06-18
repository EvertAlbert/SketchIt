@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="userBar">
        <ul id="userList">
        </ul>
        <p class="infoText">Be the first one to guess the word the drawer is drawing!</p>
    </div>

    <main class="game">
        <article class="canvasField">
            <canvas id="canvas" width="100" height="100"></canvas>
        </article>
        <div class="canvasCover"></div>
            <span class="wordField"></span>
        <ul class="colors">
            <li id="black"></li>
            <li id="yellow"></li>
            <li id="red"></li>
            <li id="blue"></li>
            <li id="green"></li>
            <li><a href="#" id="resetCanvas">&#128465; </a></li>
        </ul>
        <section id="chat">
            <div>
                <h3><b id="app">@{{ message }}</b></h3>
                <ul class="chatMessages">
                </ul>
            </div>
            <form class="messagInputForm">
                <input type="text" placeholder="Guess here" class="inputField messageInput">
                <input type="submit" value="Send" class="messageSubmit pictionaryButton">
            </form>
        </section>
    </main>

    <script src="{{url("https://cdn.jsdelivr.net/npm/vue/dist/vue.js")}}"></script>
    <script src="{{url("/js/script.js")}}"></script>
    <script type="text/javascript">
        let app = new Vue({
            el: "#app",
            data: {
                message: "talking in Gamechat"
            }
        });
    </script>

@endsection
