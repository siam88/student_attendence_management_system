@extends('layout.default')

@section('content')
    <div class="row">

        <h1>Course Details</h1>
        <div class="col-sm-10" style="font-size:16px;margin-left:10%">


            <table class="table table-bordered">
                <thead>
                    <th>Course Name</th>
                    <th>Course Section</th>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->section }}</td>
                        {{-- <td><a href="{{route('course.edit',['id'=>$course->id])}}"><button type="button" class="btn btn-primary" >Edit</button></a></td> --}}
                       

                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
