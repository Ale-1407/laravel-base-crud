@extends('layouts.app')
@section('title-page', 'Welcome')
@section('main-content')
   <h1 class="my-3">Create Page Comic</h1>
   <form action="{{route('comics.store')}}" method="POST">
     @csrf
       <div class="mb-3">
        <label class="form-label" for="">Title</label>
        <input class="form-control" type="text" name="title">
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Description</label>
        <textarea name="description" class="form-control" id=""></textarea>
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Thumb</label>
        <input class="form-control" type="text" name="thumb">
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Price</label>
        <input class="form-control" type="number" name="price" step="0.01">
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Series</label>
        <input class="form-control" type="text" name="series">
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Sales date</label>
        <input class="form-control" type="date" name="sale_date">
       </div>
       <div class="mb-3">
        <label class="form-label" for="">Type</label>
        <input class="form-control" type="text" name="type">
       </div>
       <button type="submit" class="btn btn-primary mb-3">Crea Dato</button>
   </form>
@endsection
