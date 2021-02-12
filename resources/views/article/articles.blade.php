@extends('layout')

@section('title')
    List of Articles
@endsection
@section('content')
<div class= "container">
    <!--Displays an alert upon redirect after a successful deletion  -->
    @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
    @endif

    <h1 class='text-center'>List Of Articles</h1>
    <div class = "row">
    @foreach ($articles as $article)
    <div class="card w-100">
       
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><a href="articles/{{$article->id}}" class = "text-dark">{{$article->title}}</a></h5>
            <p class="card-text"><small class="text-muted"> <a href="articles/{{$article->id}}/edit">Edit</a>  | <a href="articles/{{$article->id}}/delete">Delete</a></small></p>
            <p class="card-text short-desc">{{$article->content}} </p>
        </div>
    </div>  
    @endforeach
    
    </div>
    <div class="page-button">
    {{$articles->links()}}
    </div>
</div>
@endsection