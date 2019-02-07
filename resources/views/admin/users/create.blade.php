@extends('layouts.admin')

@section('content')
    <h1>Create</h1>
    
    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'file' => true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name : ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email : ') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role : ') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'Status : ') !!}
            {!! Form::select('is_active', [1 => 'Active', 2 => 'Not Active'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'File : ') !!}
            {!! Form::file('file', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password : ') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('includes.form_error')
   
    
@endsection