<html>
    <title>My Website </title>
      <head>
          
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Kritima">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{url('/style.css')}}" />
 
</head> 
<body>
    <div class="container">
  
     <nav>
         <h1>Edit Students</h1>
          <ul>
            <li><a href="{{route('student')}}">Home</a></li>
            <li><a href="{{route('student/index')}}">View Students</a></li>
           
        </ul>
    </nav>

    <div class="box1">
        <div class="box1-content">
            
        <form action="{{route('student.update',$student->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$student->name}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="phone" value="{{$student->phone}}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="email" value="{{$student->email}}">
        </div>
        
        <div class="form-group">
            <label for="message">Address:</label>
            <input type="text" name="address" id="address" placeholder="address" value="{{$student->address}}">
            
        </div>
       
            
        </div>
<button  class=styled-button type="submit">Update</button>

</form>

    </div>
     <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
    </div>
</body>
</html>