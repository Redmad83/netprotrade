@extends('layouts.admin');



@section('content')

<h1>Create Users</h1>

<div class="row">

    @if($errors->any())
        <div class="alert alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>

                @endforeach
            </ul>

        </div>

    @endif

</div>

<div class="row">

     {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}


           <div class="form-group">
                  {!! Form::label('name', 'Name:') !!}
                  {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                 {!! Form::label('email', 'Email:') !!}
                 {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            {{--<div class="form-group">--}}
                {{--{!! Form::label('role_id', 'Roles') !!}--}}
                {{--{!! Form::select('role_id', array('administrator'=>'Administrator', 'author'=>'Author', 'subscriber'=>'Subscriber'),'subscriber', ['class'=>'form-control']) !!}--}}
            {{--</div>--}}
            <div class="form-group">
                {!! Form::label('role_id', 'Roles') !!}
                {!! Form::select('role_id',[''=>'Choose Options'] + $roles,null, ['class'=>'form-control'])!!}
            </div>


             <div class="form-group">
                 {!! Form::label('is_active', 'Status:') !!}
                 {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control'])!!}
              </div>


             <div class="form-group">
                 {!! Form::label('photo_id', 'Photo:') !!}
                 {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
              </div>



             <div class="form-group">
                 {!! Form::label('password', 'Password:') !!}
                 {!! Form::password('password', ['class'=>'form-control'])!!}
              </div>


              <div class="form-group">
                 {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
              </div>

    {!! Form::close() !!}


</div>

@stop