@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-sm-4" style="font-size:16px;margin-left:10%;">
            <form method="POST" >
                <h1 style="margin-bottom:10%">Enroll Courses </h1>
                @csrf
                <div>
                    <input type="text" class="form-control" placeholder="student id" 
                        name="student id" required="" style="font-size:16px;margin-bottom:10%" />
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Course id" 
                        name="Course id" required="" style="font-size:16px;margin-bottom:10%"/>
                </div>
                <div>
                    <input type="submit" class="btn btn-default submit" value="Enroll" style="font-size:16px;margin-bottom:10%"/>

                </div>


            </form>
        </div>
    </div>
@endsection
