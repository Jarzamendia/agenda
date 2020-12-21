@extends('layouts.base-layout')
@section('additional-link')
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            <img class="mb-4" src="{{asset('image/diary.svg')}}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Agenda Online</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required
                   autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password " class="form-control" placeholder="Senha"
                   required>
            <button class="btn btn-lg btn-secondary btn-block" type="submit">Acessar</button>
        </form>

        <a href="{{ route('register') }}"> Cadastre-se </a>
    </div>
@endsection

