@extends('layouts.app');

@section('title_page')
EDIT PAGE
@endsection

@section('main_content')

<div class="container">
    
    
    <form action="{{route('comics.update',['comic'=>$comic->id])}}"  method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value={{$comic->title}} >
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Images</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value={{$comic->thumb}} >
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value={{$comic->price}} >
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value={{$comic->series}} >
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value={{$comic->sale_date}} >
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Category:</label>
            <input type="text" class="form-control" id="type" name="type" value={{$comic->type}} >
          </div>

        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$comic->description}}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection