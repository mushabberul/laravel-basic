@extends('master')

@section('title','About Page')
@section('content')
    <h1>{{ $page_name}}</h1>
    @if ($product_count <= 10)
        <p> Product is reduing.. Please refill </p>
    @endif

    @switch($color)
        @case('red')
            Red color is available.
            @break
        @case('blue')
            Blue color is available.
            @break
        @case('yellow')
            Yellow color is available.
            @break
            @default
            Not available any color.

    @endswitch

    {{-- @empty($products)
        No found product.
    @endempty --}}




    @include('partials.looping');


@endsection
