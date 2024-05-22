<html>
    <title>My Website </title>
      <head>
          
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Kritima">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css" />
 
</head> 
<body>
    <div class="container">
  
     <nav>
         <h1>My Website</h1>
          <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('aboutus')}}">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="{{route('contactus')}}">Contact Us</a></li>
        </ul>
    </nav>

    <div class="box">
        <div class="box-content">
           List of contacts
           
            
        </div>
       <a href="{{route('contactus/create')}}">Add Contact
    </div>
     <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
    </div>
</body>
</html>