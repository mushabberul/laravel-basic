@extends('master')

@section('title','Services Page')
@section('content')
    @for ($index=0; $index<count($services); $index++)
        <p> {{ $services[$index]}} </p>
    @endfor


@endsection
