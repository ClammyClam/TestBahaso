@extends('layout')

@section('title')
    Delete Article
@endsection
@section('content')
<div class = "container">

    <h1>Confirm Delete Article</h1>
    <form method = "POST" action="/articles/{{$article->id}}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" readonly class="form-control-plaintext" 
            name = "title" id = "title" value = "{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Content</label>
            <textarea readonly class="form-control" name = 'content' id="content">{{$article->content}}</textarea>
        </div>
        <p>Are you sure you want to delete this article? </p>
        <button type="submit" class="btn btn-primary">Yes</button> 
        <a class="btn btn-primary" href="/articles/{{$article->id}}" role="button">Cancel</a>
    </form> 
</div>
@endsection