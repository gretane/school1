@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Add new student</h4>
                    </div>
                    <div class="card-body">
                        @if($schoolClasses->count() != 0) 
                        <form method="POST" action="{{route('student.store')}}">
                            <label for="student_name">Name:</label>
                            <input type="text" id="student_name" name="student_name" value="{{old('student_name')}}">
                            <label for="student_surname">Surname:</label>
                            <input type="text" id="student_surname" name="student_surname" value="{{old('student_surname')}}">
                            @csrf
                            <label for="school_class_id">Select grade:</label>
                            <select name="school_class_id" id="school_class_id">
                            @foreach ($schoolClasses as $schoolClass)
                                <option value="{{$schoolClass->id}}" @if (old('school_class_id') == $schoolClass->id) selected @endif>
                                    {{$schoolClass->grade}}{{$schoolClass->letter}} 
                                </option>
                            @endforeach
                            </select>
                            <button type="submit">Add</button>
                        </form>
                        @else 
                        <h5 style="color: red;"> Please add at least one class first.</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

