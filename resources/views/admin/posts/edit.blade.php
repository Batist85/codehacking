@extends('layouts.admin')

@section('content')

    <h1>Edit Post by <span style="color: royalblue;">{{$post->user->name}}</span></h1>

        <div class="col-sm-3">
            <img src="{{$post->photo ? $post->photo->file : '/image/placeholder.png'}}" alt="" class="img-responsive img-rounded">
        </div>

    <div class="col-sm-9">

    @include('includes.form_error')

        {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title : ') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category : ') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo : ') !!}
                {!! Form::file('photo_id') !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Content : ') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>

@stop

