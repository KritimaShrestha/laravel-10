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
  
     <nav>asdfghjkl
         <h1>My Website</h1>
          <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('aboutus')}}">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="{{route('contactus')}}">Contact Us</a></li>
        </ul>
    </nav>

    <div class="box1">
        <div class="box1-content">
            
        <form action="" method="get">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" placeholder="phone">
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <input type="radio" name="gender" id="male"><label for="male">Male</label>
            <input type="radio" name="gender" id="female"><label for="female">Female</label>
        </div>
        <div class="form-group">
            <label>Hobby:</label>
            <input type="checkbox" name="hobby" id="coding"><label for="coding">Coding</label>
            <input type="checkbox" name="hobby" id="designing"><label for="designing">Designing</label>
            <input type="checkbox" name="hobby" id="graphics"><label for="graphics">Graphics</label>
        </div>
            
        </div>
        <button type="submit" value="Submit">Submit</button>
    </div>
     <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
    </div>
</body>
</html>