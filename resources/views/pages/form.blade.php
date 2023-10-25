@extends('layouts.default')

@section('content')
<h2>Student Registration Form</h2>
<form action="{{url('/')}}/table" method="post">
@csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="roll">Roll Number:</label>
    <input type="number" id="roll_no" name="roll_no" ><br><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male" >
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" >
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="Others" >
    <label for="other">Others</label><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" ><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" ><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone_no" name="phone_no" ><br><br>

    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="usa">USA</option>
        <option value="canada">Canada</option>
        <option value="uk">UK</option>
        <option value="australia">Australia</option>
        <option value="Others">Others</option>
    </select><br><br>

    <label>Choose Subjects:</label>
    <input type="checkbox" id="math" name="subject[]" value="math">
    <label for="math">Math</label>
    <input type="checkbox" id="science" name="subject[]" value="science">
    <label for="science">Science</label>
    <input type="checkbox" id="history" name="subject[]" value="history">
    <label for="history">History</label><br><br>

    <label for="comments">Comments:</label><br>
    <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>

    <input type="submit" value="Submit">
</form>
@endsection
