@extends('design')

@section('content')
</br>
<div class="row" align="center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style='color:green; font-weight:bold'>ADD NEW DANCER</h2>
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

                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;border:green; border-style:groove; border-width:5px'>
                        <strong style='color:green'>Name</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" style='font-weight:bold'>
</div>

                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px; border:green; border-style:groove; border-width:5px'>
                        <strong style='color:green'>Age</strong>
                        <input class="form-control" name="age" placeholder="Age" style='font-weight:bold'></textarea>
                       
</div>
                    <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px; border:green; border-style:groove; border-width:5px'>
   <strong for="typeofdance" style='color:orange; border:white'>Type of Dance</strong>
</br>
                        <select name="typeofdance" id="typeofdance" style="border:green; border-style:groove; border-width:5px; font-weight:bold">
                            <option value="Hip-Hop">Hip-Hop</option>
                            <option value="Urban Dance">Urban Dance</option>
                            <option value="Contemporary">Contemporary</option>
                            <option value="Ballroom">Ballroom</option>
                            <option value="Ballet">Ballet</option>
                        </select></textarea>
                        
</div>
                    <div class="left" align="center" style='margin-top:10px; margin-left:10px; margin-right:10px;border:green; border-style:groove; border-width:5px'>
                        <strong for="levelofdance" style='color:orange'>Level of Dance</strong>
</br>
                        <select name="levelofdance" id="levelofdance" style="border:green; border-style:groove; border-width:5px; font-weight:bold">
                            <option value="Advance">Advance</option>
                            <option value="Average">Average</option>
                            <option value="Beginner">Beginner</option>
                        </select></textarea>
                        
</div>
                    <div class="left" style='margin-top:10px; margin-left:10px; margin-right:10px;border:green; border-style:groove; border-width:5px'>
                        <strong style='color:green'>Contact Number</strong>
                        <input class="form-control" name="contactnumber" placeholder="Contact Number" style='font-weight:bold'></textarea>
                       
</div>
</br>
    <div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px; border:green; border-style:groove; border-width:5px'>

        <button type="submit" class="btn btn-primary" style='background-color:green; color:white; font-weight:bold'>Submit</button>
</div>
<div class="left" align="center" style='margin-bottom:10px; margin-left:10px; margin-right:10px; border:green; border-style:groove; border-width:5px'>
        <a href="#" onclick="history.back(1);" style='background-color:green; color:white; font-weight:bold'>Back</a>
        </div>
</form>
</div>

@endsection