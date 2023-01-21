@extends('layouts.app')
@section('title-page', 'Show')
@section('main-content')
   <h1 class="mt-3">{{$comic->title}}</h1>
   <p>{{$comic->description}}</p>
@endsection
