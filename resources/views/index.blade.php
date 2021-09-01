@extends('layout')

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
        <th>Option</th>
    </tr>

    @foreach ($danceclass as $dclass)
    <tr>
        <td>{{ $dclass->id }}</td>
        <td>{{ $dclass->name }}</td>
        <td>{{ $dclass->age }}</td>
        <td>{{ $dclass->typeofdance }}</td>
        <td>{{ $dclass->levelofdance }}</td>
        
    </tr>
    @endforeach
    </table>

    @endsection
