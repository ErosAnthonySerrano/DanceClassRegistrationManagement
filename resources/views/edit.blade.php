@extends('design')

@section('content')
</br>
<div class="row" align="center">
    <div class="col-lg-12 margin-th">
        <div class="pull-left">
            <h2 style='color:yellow; font-weight:bold'>UPDATE DANCER INFO</h2>
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
            <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px; border:yellow; border-style:groove; border-width:5px'>
                <strong style='color:yellow'>Name</strong>
                <input type="text" name="name" class="form-control" value="{{ $danceclass->name }}" placeholder="Name" style='font-weight:bold'>
        </div>

        <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;  border:yellow; border-style:groove; border-width:5px'>
            <strong style='color:yellow'>Age</strong>
            <input class="form-control" name="age" value="{{ $danceclass->age }}" placeholder="Age" style='font-weight:bold'>

        </div>
        <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;  border:yellow; border-style:groove; border-width:5px'>
        <strong for="typeofdance" style='color:orange'>Type of Dance</strong></br>
                        <select name="typeofdance" id="typeofdance" style=" border:yellow; border-style:groove; border-width:5px; font-weight:bold">
                            <option selected hidden>{{ $danceclass->typeofdance }}</option>
                            <option value="Hip-Hop">Hip-Hop</option>
                            <option value="Urban Dance">Urban Dance</option>
                            <option value="Contemporary">Contemporary</option>
                            <option value="Ballroom">Ballroom</option>
                            <option value="Ballet">Ballet</option>
                        </select>
                       
        </div>
        <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px; border:yellow; border-style:groove; border-width:5px'>
        <strong for="levelofdance" style='color:orange'>Level of Dance</strong></br>
                        <select name="levelofdance" id="levelofdance" style=" border:yellow; border-style:groove; border-width:5px; font-weight:bold">
                        <option selected hidden>{{ $danceclass->levelofdance }}</option>
                            <option value="Advance">Advance</option>
                            <option value="Average">Average</option>
                            <option value="Beginner">Beginner</option>
                        </select>
                       
        </div>
        <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px; border:yellow; border-style:groove; border-width:5px'>
            <strong style='color:yellow'>Contact Number</strong>
            <input class="form-control" name="contactnumber" value="{{ $danceclass->contactnumber }}" placeholder="ContactNumber" style='font-weight:bold'>
            
        </div></br>
        <div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px;  border:yellow; border-style:groove; border-width:5px'>
            <button type="submit" class="btn btn-primary" style='background-color:yellow; color:black'><b>Update</b></button>
          
            
        </div>
        <div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px;  border:yellow; border-style:groove; border-width:5px'>
        <a href="#" onclick="history.back(1);" style='background-color:yellow; color:black; font-weight:bold'>Back</a>
        </div>
       
</div>
</form>
</div>

@endsection
