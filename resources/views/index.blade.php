@extends('design')

@section('content')
</br></br>
<div style='border:white; border-style:groove; border-width:8px'>

    <div class="row" style='background-color:red' align="center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style='color:black'>Dance Class Registration Management</h2>
            </div>
        </div>
    </div>
<div class="row" align="center">
    <div class="pull-right" style='background-color:black'>
</br>
       <a class="btn btn-success" href="{{ route('dclass.create')}}">ADD NEW DANCER</a>
</br></br>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif

<table class="table table-striped" style='background-color:black'>
    <tr style='color:black; background-color:white' align="center">
        <th >ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Type of Dance</th>
        <th>Level of Dance</th>
        <th>Contact Number</th>
        <th>Option</th>
    </tr>

    @foreach ($danceclass as $dclass)
    <tr style='color:white' align="center">
        <td>{{ $dclass->id }}</td>
        <td>{{ $dclass->name }}</td>
        <td>{{ $dclass->age }}</td>
        <td>{{ $dclass->typeofdance }}</td>
        <td>{{ $dclass->levelofdance }}</td>
        <td>{{ $dclass->contactnumber }}</td>
        <td>

        <form method="POST" action=" {{ route('dclass.destroy', $dclass->id) }}">
        <a class="btn btn-primary" href="{{ route('dclass.edit', $dclass->id) }}" style='background-color:yellow; color:black'>Update</a>
				{{ csrf_field() }}
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-user" value="Delete" style='color:white; background-color:red'>
</form>
               
</td>

    </tr>
    @endforeach
    </table>
</div>
    @endsection
