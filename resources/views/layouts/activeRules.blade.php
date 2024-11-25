@extends('dashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            @foreach ($classrooms as $classroom)
                @include('layouts.card')
            @endforeach
        </div>
    </div>
