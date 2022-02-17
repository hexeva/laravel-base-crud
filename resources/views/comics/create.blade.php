@extends('layouts.app');

@section('title_page')
    CREATE-PAGE
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
        <div class="create_form">
            <form action="{{ route('comics.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                  <label for="title" class="form-label">title</label>
                  <input type="text" class="form-control" id="title" name="title" value={{old('title')}} >
                </div>


                <div class="mb-3">
                    <label for="thumb" class="form-label">images</label>
                    <input type="text" class="form-control" id="title" name="thumb" value={{old('thumb')}} >
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text" class="form-control" id="price" name="price" value={{old('price')}} >
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" class="form-control" id="series" name="series" value={{old('series')}} >
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value={{old('sale_date')}} >
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">type</label>
                    <input type="text" class="form-control" id="type" name="type" value={{old('type')}} >
                </div>

                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10" >{{old('description')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection