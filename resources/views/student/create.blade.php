@extends('layouts.master')
  @section('content')
     <nav>
         <h1>Add Students</h1>
          <ul>
            <li><a href="{{route('student')}}">Home</a></li>
            <li><a href="{{route('student/index')}}">View Students</a></li>
           
        </ul>
    </nav>

    <div class="box1">
        <div class="box1-content">
            
        <form action="{{route('student/store')}}" method="post">
            @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="phone">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="email">
        </div>
        
        <div class="form-group">
            <label for="message">Address:</label>
            <input type="text" name="address" id="address" placeholder="address">
            
        </div>
       
            
        </div>
        <button class=styled-button type="submit" value="Submit">Submit</button>
    </div>
     
    </div>
@endsection