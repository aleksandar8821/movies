@extends('layouts.master')

@section('title')
Create new movie

@endsection

@section('content')
<h2 class="blog-post-title">Create new movie</h2>

    <form method="POST" action="{{ route('store-movie') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>
           
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
            
        </div>

        <div class="form-group">
            <label for="published">Publish?</label>
            <input type="checkbox" class="form-control" id="published" name="published1" value="1"/>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection