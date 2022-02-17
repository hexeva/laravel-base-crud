@extends('layouts.app');

@section('title_page')
SINGLE COMIC
@endsection

@section('main_content')

<div class="container">
    <div class="single_comic">
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title red">{{$comic->title}}</h5>
              <p class="card-text hidden">{{$comic->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$comic->price}}</li>
              <li class="list-group-item">{{$comic->title}}</li>
              <li class="list-group-item">{{$comic->series}}</li>
              <li class="list-group-item">{{$comic->sale_date}}</li>
              <li class="list-group-item">{{$comic->type}}</li>
            </ul>
            <div class="card-body">
              <div class="show_btn">
                <a href="{{route('comics.index')}}" class="card-link btn btn-info">Homepage</a>
                <a href="{{route('comics.edit',['comic'=>$comic->id])}}" class="card-link btn btn-info">Update</a>
              </div>
              <div class="delete">
                <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Cancella</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
    
@endsection