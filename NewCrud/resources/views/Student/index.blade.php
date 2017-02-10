@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Student.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Sports</th>
            <th>Color</th>
            <th>Physics</th>
            <th>Chemistry</th>
            <th>Maths</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($students as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->Email }}</td>
        <td>{{ $item->Gender }}</td>
        <td>{{ $item->Department }}</td>
        <td>{{ $item->Sports }}</td>
        <td>{{ $item->Color }}</td>
        <td>{{ $item->Physics }}</td>
        <td>{{ $item->Chemistry }}</td>
        <td>{{ $item->Maths }}</td>
        <td>
       
            <a class="btn btn-info" href="{{ route('Student.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('Student.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['Student.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>

    {!! $students->render() !!}

@endsection