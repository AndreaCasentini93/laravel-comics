@extends('layouts.main')

@section('title', "Comics")

@section('main-content')

    <section>
        @include('partials.jumbotron')
        @include('partials.cards')
        @include('partials.blue-menu')
    </section>

@endsection