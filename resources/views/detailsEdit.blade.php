@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-sm-4" style="font-size:16px;margin-left:10%;">
            <form method="POST" action="{{ route('student.update', $student->id) }}">
                <h1 style="margin-bottom:10%">Student Details Update </h1>
                @csrf
                <div>
                    <input type="text" class="form-control" placeholder="Username" value="{{ $student->username }}"
                        name="username" required="" style="font-size:16px;margin-bottom:10%" />
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Password" value="{{ $student->password }}"
                        name="password" required="" style="font-size:16px;margin-bottom:10%"/>
                </div>
                <div>
                    <input type="submit" class="btn btn-default submit" value="Update" style="font-size:16px;margin-bottom:10%"/>

                </div>


            </form>
        </div>
    </div>
@endsection
