@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Student.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'Student.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('Name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('Email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {!! Form::select('Department', ['','ComputerScience' => 'ComputerScience', 'Mechanical' => 'Mechanical', 'Civil' => 'Civil', 'Electronics' => 'Electronics', 'Electrical' => 'Electrical', 'Metallurgy' => 'Metallurgy', 'Chemical' => 'Chemical']) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {!! Form::radio('Gender', 'Male') !!}Male 
                {!! Form::radio('Gender', 'Female') !!}Female
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sports:</strong>
                {!! Form::checkbox('Sports', 'Cricket'), 'Sports' == 'Cricket' !!}Cricket
                {!! Form::checkbox('Sports', 'Football'), 'Sports' == 'Football' !!}Football
                {!! Form::checkbox('Sports', 'Basketball'), 'Sports' == 'Basketball' !!}Basketball
                {!! Form::checkbox('Sports', 'Throwball'), 'Sports' == 'Throwball' !!}Throwball
                {!! Form::checkbox('Sports', 'Hockey'), 'Sports' == 'Hockey' !!}Hockey
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Color:</strong>
                 {!! Form::text('Color', null, array('placeholder' => 'Color','class' => 'form-control')) !!}
            </div>
        </div>

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Physics:</strong>
                {!! Form::number('Physics', null, array('placeholder' => 'Physics','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chemistry:</strong>
                {!! Form::number('Chemistry', null, array('placeholder' => 'Chemistry','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maths:</strong>
                {!! Form::number('Maths', null, array('placeholder' => 'Maths','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection