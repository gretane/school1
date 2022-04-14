@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       <h4>Students</h4>
                        
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($students as $student)
                                <li>
                                    <div>
                                        <p>Student name(s): {{$student->name}}</p>
                                        <p>Student surname(s): {{$student->surname}}</p>
                                        <p>Grade: {{$student->studentClass->grade}}{{$student->studentClass->letter}}</p>
                                        {{-- <a href="{{route('outfit.show',[$outfit])}}" class="btn btn-outline-dark"> Show </a> --}}
                                        <a href="{{route('student.edit',[$student])}}" class="btn btn-outline-primary"> Edit </a>
                                    </div> 
                                    <form method="POST" action="{{route('student.destroy', [$student])}}">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        {{-- {{$students->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection