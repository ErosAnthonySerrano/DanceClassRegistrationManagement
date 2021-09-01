@extends('design')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Dance Student</h2>
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

    <div class="row">
        <form action="{{ route('dclass.store') }}" method="POST">
            @csrf
                <div class="col-sm-4">

                    <div class="left">
                        <strong>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
</div>

                    <div class="left">
                        <strong>Age</strong>
                        <input class="form-control" name="age" placeholder="Age"></textarea>
                        </br>
</div>
                    <div class="left">
                        <strong for="typeofdance">Type of Dance</strong>
                        <select name="typeofdance" id="typeofdance">
                            <option value="Hip-Hop">Hip-Hop</option>
                            <option value="Urban Dance">Urban Dance</option>
                            <option value="Popping">Popping</option>
                        </select></textarea>
                        </br></br>
</div>
                    <div class="left">
                        <strong for="levelofdance">Level of Dance</strong>
                        <select name="levelofdance" id="levelofdance">
                            <option value="Advance">Advance</option>
                            <option value="Average">Average</option>
                            <option value="Beginner">Beginner</option>
                        </select></textarea>
                        </br></br>
</div>
                    <div class="left">
                        <strong>Contact Number</strong>
                        <input class="form-control" name="contactnumber" placeholder="ContactNumber"></textarea>
                        </br>
</div>

    <div class="left">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

@endsection