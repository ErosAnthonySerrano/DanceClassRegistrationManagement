@extends('design')

@section('content')
</br>
<div class="row" align="center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style='color:green'>ADD NEW DANCER</h2>
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
</ul>
</div>
@endif

    <div class="row" align="center">
        <form action="{{ route('dclass.store') }}" method="POST">
            @csrf
                <div class="col-sm-4" align="left" style='color:white; border:white; border-style:groove; border-width:8px'>

                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                        <strong style='color:green'>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
</div>

                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                        <strong style='color:green'>Age</strong>
                        <input class="form-control" name="age" placeholder="Age"></textarea>
                        </br>
</div>
                    <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                        <strong for="typeofdance" style='color:orange'>Type of Dance</strong>
</br>
                        <select name="typeofdance" id="typeofdance">
                            <option value="Hip-Hop">Hip-Hop</option>
                            <option value="Urban Dance">Urban Dance</option>
                            <option value="Contemporary">Contemporary</option>
                            <option value="Ballroom">Ballroom</option>
                            <option value="Ballet">Ballet</option>
                        </select></textarea>
                        </br></br>
</div>
                    <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                        <strong for="levelofdance" style='color:orange'>Level of Dance</strong>
</br>
                        <select name="levelofdance" id="levelofdance">
                            <option value="Advance">Advance</option>
                            <option value="Average">Average</option>
                            <option value="Beginner">Beginner</option>
                        </select></textarea>
                        </br></br>
</div>
                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;'>
                        <strong style='color:green'>Contact Number</strong>
                        <input class="form-control" name="contactnumber" placeholder="Contact Number"></textarea>
                        </br>
</div>

    <div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px'>
        <button type="submit" class="btn btn-primary" style='background-color:green; color:white'>Submit</button>
</div>
<div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px'>
        <a href="#" onclick="history.back(1);" style='background-color:green; color:white'>Back</a>
        </div>
</form>
</div>

@endsection