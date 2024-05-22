@extends('layouts.master')

     <nav>
         <h1>List of Students</h1>
         
          <ul>
            <li><a href="{{route('student')}}">Home</a></li>
            <li><a href="{{route('student/index')}}">View Students</a></li>
           
        </ul>
    </nav>
   <table cellspacing='5' border='1' align='center' text-align='center'>
    <tr>
           <td>S.N</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Address</td>
        <td colspan=2>Action</td>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->address}}</td>
        
       <td>   <button class=styled-button>  <a href="{{route('student.edit',$student->id)}}" >Edit</a></button></td>
       <td>   <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                @csrf
                @method('Delete')
                <button class=styled-button width=70px type="submit">Delete</button>
            </form>
        </td>
    </tr>
        @endforeach
    
   </table>

</body>
</html>