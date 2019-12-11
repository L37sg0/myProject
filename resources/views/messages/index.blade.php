@extends('index')

@section('content')
    @component('partials.hero')
        Messages App{{-- {{ $page->title }} --}}
    @endcomponent

    <p>Messages Content{{-- {{ $page->content }} --}}</p>

    @include('partials.nav')
    @include('messages.crud_nav')
    @include('messages.crud_table')
    @include('messages.crud_pages_nav')
@endsection