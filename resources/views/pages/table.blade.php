@extends('layouts.default')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
 
    <h2>Student Information</h2>
    
        <table id="myTable">
            <thead>
                <tr >
                    <th>Name</th>
                    <th>Roll Number</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Subjects</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone_no }}</td>
                        <td>{{ $student->country }}</td>
                        <td>{{ $student->subject }}</td>
                        <td>{{ $student->comment }}</td>
                        <td>
                            <a href="{{url('student/edit')}}/{{ $student->id}}"><button >Edit</button></a>
                           <a href="{{url('student/delete')}}/{{ $student->id}}"><button >Delete</button></a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>

@endsection
