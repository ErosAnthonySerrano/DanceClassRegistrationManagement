@extends('design')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dance Class Registration Management</h2>
            </div>
        </div>
    </div>
<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('student.create')}}">New Student</a>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Type of Dance</th>
        <th>Level of Dance</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($dcstudents as $dcstudent)
    <tr>
        <td>{{ $dcstudent->id }}</td>
        <td>{{ $dcstudent->name }}</td>
        <td>{{ $dcstudent->age }}</td>
        <td>{{ $dcstudent->typeofdance }}</td>
        <td>{{ $dcstudent->levelofdance }}</td>
        <td>
            <form method="POST" action=" {{ route('dcstudent.destroy',$dcstudent->id) }}">
                <a class="btn btn-primary" href="{{ route('dcstudent.edit',$dcstudent->id) }}">Edit</a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
