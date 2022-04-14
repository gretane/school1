@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit tudent info</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('student.update',[$student])}}">
                            <label for="student_name">Name:</label>
                            <input type="text" name="student_name" id="student_name" value="{{old('student_name', $student->name)}}">
                            <label for="student_surname">Surname:</label>
                            <input type="text" name="student_surname" id="student_surname" value="{{old('student_surname', $student->surname)}}">
                            <label for="school_class_id">Select grade:</label>
                            <select name="school_class_id" id="school_class_id">
                                @foreach ($schoolClasses as $schoolClass)
                                    <option value="{{$schoolClass->id}}" @if(old('school_class_id', $student->school_class_id) == $student->school_class_id) selected @endif>
                                        {{$schoolClass->grade}}{{$schoolClass->letter}}
                                    </option>
                                @endforeach
                           </select>
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

