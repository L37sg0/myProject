@extends('index')

@section('content')
    @component('partials.hero')
        Crud App{{-- {{ $page->title }} --}}
    @endcomponent

    <p>Crud Content{{-- {{ $page->content }} --}}</p>

    @include('partials.nav')
    @include('partials.crud_nav')
    @include('partials.crud_table')
    @include('partials.crud_pages_nav')
@endsection