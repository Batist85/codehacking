@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>

    @include('includes.form_error')

        {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title : ') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category : ') !!}
                {!! Form::select('category_id', array(1=>"Cats", 2=>"Kittens", 3=>"Food", 4=>"Random"), null, ['class'=>'form-control']) !!}
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
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
@stop

