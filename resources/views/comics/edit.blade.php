@extends('layouts.app');

@section('title_page')
EDIT PAGE
@endsection

@section('main_content')

<div class="container">
    <form>
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" >
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Images</label>
            <input type="text" class="form-control" id="thumb" name="thumb" >
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price" >
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" >
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" >
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Cateegory:</label>
            <input type="text" class="form-control" id="type" name="type" >
          </div>

        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    
@endsection