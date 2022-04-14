@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Classes list</h4>
                    </div>
                    
                    <div class="card-body">
                        <ul>
                            @foreach ($schoolClasses as $schoolClass)
                                <li class="designer-index-list"> 
                                    <div class="designer-index-info">
                                        
                                        <p><b> Grade: </b>{{$schoolClass->grade}}{{$schoolClass->letter}}</p>
                                        
                                    </div>
                                    <div class="designer-index-btn">
                                        <a class="btn btn-outline-primary" href="{{route('schoolClass.edit', $schoolClass)}}"> Edit </a> 
                                        <form method="POST" action="{{route('schoolClass.destroy', $schoolClass)}}">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        {{-- {{$schoolClasses->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






