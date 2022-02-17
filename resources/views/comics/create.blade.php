@extends('layouts.app');

@section('title_page')
    CREATE-PAGE
@endsection

@section('main_content')
    <div class="container">
        <div class="create_form">
            <form action="{{ route('comics.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                  <label for="title" class="form-label">title</label>
                  <input type="text" class="form-control" id="title" name="title" >
                </div>


                <div class="mb-3">
                    <label for="thumb" class="form-label">images</label>
                    <input type="text" class="form-control" id="title" name="thumb" >
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price" >
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series" >
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" >
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type" >
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection