@extends('layout')

@section('title')
    Home
@endsection
@section('content')
    <div class='container'>
        <!--Displays an alert upon making a new article -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class=row>
            <!--Form for making a new article-->
            <div class= col-8>
                <h1>Write A New Article</h1>
                <form method = "POST" action="/">
                    @csrf
                   <div class="form-group">
                        <label for="ArticleTitleInput">Article Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                         name = "title" id = "title" placeholder="Article Title">
                    </div>
                    <div class="form-group">
                        <label for="ArticleContentInput">Article Content</label>
                        <textarea class="form-control" name = 'content' id="content" rows="10" placeholder="Article Content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!--Displays 5 of the latest articles at the side-->
            <div class= col>
            <h2 class='text-center'>Latest Articles</h2>
                <div class=row>
                    @foreach ($articles as $article)

                        <div class="card w-100">
                            <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><a href="articles/{{$article->id}}" class = "text-dark">{{$article->title}}</a></h5>
                            <small class = "text-muted">{{$article->created_at->toDateString()}} {{$article->created_at->format('H:i:s')}}</small>
                            </div>
                        </div>  
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection