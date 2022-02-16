@extends('layouts.app')
@section('title_page')
    COMIC-INDEX
@endsection


@section('main_content')
    <div class="container">
        <div class="comic_list">
            <div class="row row-cols-lg-5 g-2 g-lg-3 ">
                @foreach ($comics as $comic)

                {{-- single card --}}
                <div class="card mx-3" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title red">{{$comic->title}}</h5>
                      <p class="card-text hidden">{{$comic->description}}</p>
                      <a href="{{route('comics.show', ['comic'=>$comic->id])}}" class="btn btn-primary">Scopri</a>
                    </div>
                </div>
                {{-- end card --}}
                    
                @endforeach
                
            </div>
        </div>
    </div>
@endsection