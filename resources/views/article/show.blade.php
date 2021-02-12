@extends('layout')

@section('title')
    {{$article->title}}
@endsection

@section('content')
<div class='container'>
    <h1 class = 'text-center'>{{$article->title}}</h1>
    <div class="card mb-3 w-100">
        <div class="row no-gutters">
            <div class="card-body">
                <small class="card-title text-muted">{{$article->created_at->toDateString()}} {{$article->created_at->format('H:i:s')}} |
                    <a class = 'text-muted' href="/articles/{{$article->id}}/edit">Edit</a>  | <a class = 'text-muted' href="/articles/{{$article->id}}/delete">Delete</a>  
                </small>
                <hr>
                <p class="card-text article-content">{{$article->content}}</p>  
            </div>
        </div>
    </div>
</div>
    
@endsection