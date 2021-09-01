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
       <a class="btn btn-success" href="{{ route('dclass.create')}}">New Dancer</a>
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
        <th>Contact Number</th>
        <th>Option</th>
    </tr>

    @foreach ($danceclass as $dclass)
    <tr>
        <td>{{ $dclass->id }}</td>
        <td>{{ $dclass->name }}</td>
        <td>{{ $dclass->age }}</td>
        <td>{{ $dclass->typeofdance }}</td>
        <td>{{ $dclass->levelofdance }}</td>
        <td>{{ $dclass->contactnumber }}</td>
        <td>
            <form method="POST" action=" {{ route('dclass.destroy', $dclass->id) }}">
                <a class="btn btn-primary" href="{{ route('dclass.edit', $dclass->id) }}">Update</a>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete">
</form>
</td>
    </tr>
    @endforeach
    </table>

    @endsection
