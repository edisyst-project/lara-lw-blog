@extends('layouts.api')

@section('jumbotron')
    <div id="intro" class="p-5 text-center bg-light">
        <h1 class="mb-3 h2">Benvenuto </h1>
    </div>
@endsection

@section('content')
    @livewire('blog.index')
@endsection
