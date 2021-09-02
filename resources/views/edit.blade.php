@extends('design')

@section('content')
</br>
<div class="row" align="center">
    <div class="col-lg-12 margin-th">
        <div class="pull-left">
            <h2 style='color:yellow'>UPDATE DANCER INFO</h2>
</div>
<div class="pull-right">
</div>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</div>
</div>
@endif

<div class="row" align="center">
    <form action="{{ route('dclass.update', $danceclass->id) }}" method="POST">
        @csrf 
        <div class="col-sm-4" align="left" style='color:white; border:white; border-style:groove; border-width:8px'>
            <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                <strong style='color:yellow'>Name</strong>
                <input type="text" name="name" class="form-control" value="{{ $danceclass->name }}" placeholder="Name">
        </div>

        <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
            <strong style='color:yellow'>Age</strong>
            <input class="form-control" name="age" value="{{ $danceclass->age }}" placeholder="Age">
</br>
        </div>
        <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
        <strong for="typeofdance" style='color:orange'>Type of Dance</strong></br>
                        <select name="typeofdance" id="typeofdance">
                            <option value="Hip-Hop">Hip-Hop</option>
                            <option value="Urban Dance">Urban Dance</option>
                            <option value="Contemporary">Contemporary</option>
                            <option value="Ballroom">Ballroom</option>
                            <option value="Ballet">Ballet</option>
                        </select>
                        </br></br>
        </div>
        <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
        <strong for="levelofdance" style='color:orange'>Level of Dance</strong></br>
                        <select name="levelofdance" id="levelofdance">
                            <option value="Advance">Advance</option>
                            <option value="Average">Average</option>
                            <option value="Beginner">Beginner</option>
                        </select>
                        </br></br>
        </div>
        <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
            <strong style='color:yellow'>Contact Number</strong>
            <input class="form-control" name="contactnumber" value="{{ $danceclass->contactnumber }}" placeholder="ContactNumber">
            </br>
        </div>
        <div class="left" align="right" style='margin-bottom:10px; margin-left:10px; margin-right:10px'>
            <button type="submit" class="btn btn-primary" style='background-color:yellow; color:black'>Update</button>
        </div>
</div>
</form>
</div>

@endsection
