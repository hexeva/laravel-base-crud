@extends('layouts.app');

@section('title_page')
EDIT PAGE
@endsection

@section('main_content')

<div class="container">

            {{-- MESSAGE ERROR --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            {{-- END MESSAGE ERROR --}}
    
    
    <form action="{{route('comics.update',['comic'=>$comic->id])}}"  method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value={{old('title') ? old('title') : $comic->title}} >
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Images</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value={{old('thumb') ? old('thumb') : $comic->thumb}} >
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value={{old('price') ? old('price') : $comic->price}} >
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value={{old('series') ? old('series') : $comic->series}} >
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value={{old('sale_date') ? old('sale_date') : $comic->sale_date}} >
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Category:</label>
            <input type="text" class="form-control" id="type" name="type" value={{old('type') ? old('type') : $comic->type}} >
          </div>

        <textarea class="form-control" name="description" id="" cols="30" rows="10">{{old('description') ? old('description') : $comic->description}}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection