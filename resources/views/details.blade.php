@extends('layout.default')

@section('content')
    <div class="row">

        <h1>Student Details</h1>
        <div class="col-sm-10" style="font-size:16px;margin-left:10%">


            <table class="table table-bordered">
                <thead>
                    <th>Student Name</th>
                    <th>Student Password</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </thead>
                <tbody>
                    <tr>
                        @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->password }}</td>
                        <td><a href="{{route('student.edit',['id'=>$student->id])}}"><button type="button" class="btn btn-primary" >Edit</button></a></td>
                        <td> <button type="button" class="btn btn-danger">Delete</button></td>

                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
