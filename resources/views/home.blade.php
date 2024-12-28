@extends('layouts.app', ['page_title' => $title])

@section('app-content')

    @include('partials.' . $entity)

@endsection