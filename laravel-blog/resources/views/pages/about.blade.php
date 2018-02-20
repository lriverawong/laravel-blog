@extends('layouts.app')

@section('content')
    {{-- Another way of outputting variable from controller. --}}
    <h1><?php echo $title; ?></h1>
    <p>This is the about page.</p>
@endsection