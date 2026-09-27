@extends('layouts.app')

@section('title', 'Metal Store')

@section('content')

    @include('partials.hero')
    @include('partials.categories')
    @include('partials.featured-products')

@endsection

