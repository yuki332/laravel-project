@extends('layouts.master')
@section('contents')
    <section class="hero is-fullheight is-dark">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item" href="{{route('home')}}">Home</a>
                        </div>
                        <div class="navbar-end">
                            @auth
                                @if(route::has('app.index'))
                                    <a class="navbar-item" href="{{ route('app.index') }}">Vue.js</a>
                                @endif
                                <a class="navbar-item" href="{{route('login.logout')}}">logout</a>
                            @endauth
                            @guest
                                <a class="navbar-item" href="{{route('register.create')}}">Register</a>
                                <a class="navbar-item" href="{{route('login.show')}}">Login</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                @auth
                    <h1 class="title">Hello {{ Auth::user()->first_name }}</h1>
                @endauth
                @guest
                    <h1 class="title">Hello App</h1>
                @endguest
                <h3 class="subtitle">Learning Site</h3>
                <div class="columns is-centered">
                    <div class="column is-half">
                        <div class="columns">
                            <div class="column">
                                <p class="title is-4">Laravel</p>
                                <p class="subtitle is-6">PHP</p>
                            </div>
                            <div class="column">
                                <p class="title is-4">Vue.js</p>
                                <p class="subtitle is-6">JS</p>
                            </div>
                            <div class="column">
                                <p class="title is-4">Bulma</p>
                                <p class="subtitle is-6">CSS</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columns is-centered">
                    <div class="column is-half">
                        <div class="content is-large">
                            <p>My main forcus right now is API Resource</p>
                        </div>
                        <div class="content is-medium">
                            <p>The purpose of this creating this site is for learning Laravel, Vue.js, and Bulma. As a Full Stuck Developer, learning can't be stopped.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
