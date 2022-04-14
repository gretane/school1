@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit class info</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('schoolClass.update', $schoolClass)}}">
                            <label for="school_class_grade">Grade:</label>
                            <input type="text" name="school_class_grade" id="school_class_grade" value="{{old('school_class_grade', $schoolClass->grade)}}">
                            <label for="school_class_letter">Letter:</label>
                            <input type="text" name="school_class_letter" id="school_class_letter" value="{{old('school_class_letter', $schoolClass->letter)}}">
                            @csrf
                            <button type="submit">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection