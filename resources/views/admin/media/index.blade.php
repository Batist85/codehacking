@extends('layouts.admin')

@section('content')

    <h1>Media</h1>

    @if($photos)

        <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Created Date</th>
               </tr>
            </thead>
            <tbody>

                @foreach($photos as $photo)

                   <tr>
                     <td>{{$photo->id}}</td>
                     <td><img src="{{$photo->file ? $photo->file : "no media available"}}" alt="" height="50"></td>
                     <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : "no created date"}}</td>
                     <td>
                         {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminMediaController@destroy', $photo->id]]) !!}

                                     <div class="form-group">
                                         {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-lg']) !!}
                                     </div>

                         {!! Form::close() !!}
                     </td>
                   </tr>

                @endforeach

             </tbody>
        </table>

    @endif

@stop