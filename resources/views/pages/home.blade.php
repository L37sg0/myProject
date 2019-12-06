@extends('index')

@section('content')
    @component('partials.hero')
        Home Page
    @endcomponent
    <p>This is the Home Page</p>
    @include('partials.nav')
@endsection