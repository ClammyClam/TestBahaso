@extends('layout')

@section('title')
    Edit Article
@endsection
@section('content')
<div class = "container">
    <!--Displays an alert upon updating an article that allows user to go back to the article or article list  -->
    @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }} click <a href="/articles/{{$article->id}}">here</a> to go to the article <br>
                or click <a href="/articles">here</a> to go back to the article list.
            </div>
    @endif

    <h1>Update Article</h1>
    <form method = "POST" action="/articles/{{$article->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"
            name = "title" id = "title" value = "{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Content</label>
            <textarea class="form-control" name = 'content' id="content" rows="10">{{$article->content}}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button> 
        <a class="btn btn-primary" href="/articles/{{$article->id}}" role="button">Cancel</a>
    </form> 
</div>
@endsection