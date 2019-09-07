@extends('layouts.app')
@section('content')
    <div class="container">
        @include('admin.includes.errors')
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Multiple Chooses Question
            </div>
            <div class="panel-body">
                <form action="{{route('mc_question.update',$question->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="Question">Edit The Question</label>
                        <input type="text" name="question" value="{{$question->question}}" placeholder="enter the question" class="form-control">
                    </div>

                    <div class="form-group col-lg-5">
                        <label for="Chooses">Edit The Chooses</label><br>
                        A.<input type="text" name="a" value="{{$question->a}}" class="form-control">
                        B.<input type="text" name="b" value="{{$question->b}}" class="form-control">
                        C.<input type="text" name="c" value="{{$question->c}}" class="form-control">
                        D.<input type="text" name="d" value="{{$question->d}}" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-5">
                        <label for="answer">Edit The Answer</label>
                        <input type="text" name="answer" value="{{$question->answer}}" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Edit Question"  class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
