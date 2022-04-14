@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Add new class</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('schoolClass.store')}}">
                            <label for="school_class_grade">Grade:</label>
                            <input type="text" id="school_class_grade" name="school_class_grade" value="{{old('school_class_grade')}}">
                            <label for="school_class_letter">Letter:</label>
                            <input type="text" id="school_class_letter" name="school_class_letter" value="{{old('school_class_letter')}}">
                            @csrf
                            <button type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

