@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store', 'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Title : ') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                    </div>

        {!! Form::close() !!}
    </div>
    <div class="col-sm-6">
        @if($categories)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Create Date</th>
                    <th>Updated Last</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : "No created date !"}}</td>
                        <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : "Never Updated ! "}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@stop

