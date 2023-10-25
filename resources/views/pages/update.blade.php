<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.default')
    @section('content') <!-- Define a content section -->
    <h2>Update Student</h2>
    <form action="{{url('student/update')}}/{{ $student->id}}" method="post">

        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$student->name}}"><br><br>
        
            <label for="roll">Roll Number:</label>
            <input type="number" id="roll_no" name="roll_no" value="{{$student->roll_no}}"><br><br>
        
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" {{$student->gender == "Male" ? "checked" : " "}}>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" {{$student->gender == "Female" ? "checked" : " "}}>
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Others" {{$student->gender == "Others" ? "checked" : " "}}>
    <label for="other">Others</label><br><br>
        
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="{{$student->dob}}"><br><br>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{$student->email}}"><br><br>
        
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone_no" name="phone_no" value="{{$student->phone_no}}"><br><br>
        
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="usa" {{$student->country == "USA" ? "selected" : " "}}>USA</option>
                <option value="canada" {{$student->country == "Canada" ? "selected" : " "}}>Canada</option>
                <option value="uk" {{$student->country == "UK" ? "selected" : " "}}>UK</option>
                <option value="australia" {{$student->country == "Australia" ? "selected" : " "}}>Australia</option>
                <option value="Others" {{$student->country == "Others" ? "selected" : " "}}>Others</option>
            </select><br><br>
        
            <label>Choose Subjects:</label>
            <input type="checkbox" id="math" name="subject[]" value="math" {{ in_array('math', $student->subject) ? 'checked' : '' }}>
            <label for="math">Math</label>
            <input type="checkbox" id="science" name="subject[]" value="science" {{ in_array('science', $student->subject) ? 'checked' : '' }}>
            <label for="science">Science</label>
            <input type="checkbox" id="history" name="subject[]" value="history" {{ in_array('history', $student->subject) ? 'checked' : '' }}>
            <label for="history">History</label><br><br>
        
            <label for="comments">Comments:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50" >{{$student->comment}}</textarea><br><br>
        
            <input type="submit" value="Submit">
        </form>
    <?php
 
    ?>
@endsection
</body>
</html>