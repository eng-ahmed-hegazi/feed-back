@extends('layouts.app')
@section('content')

    <div class="container">
        @include('admin.includes.errors')
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Multiple Chooses Question
            </div>
            <div class="panel-body">
                <form action="{{route('mc_question.store')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                    <div class="form-group">
                        <label for="Question">Please Enter The Question</label>
                        <input type="text" name="question" value="{{old('question')}}" placeholder="enter the question" class="form-control">
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="Question">Please Enter The Chooses</label><br>
                        A.<input type="text" name="a" value="{{old('a')}}" class="form-control">
                        B.<input type="text" name="b" value="{{old('b')}}" class="form-control">
                        C.<input type="text" name="c" value="{{old('c')}}" class="form-control">
                        D.<input type="text" name="d" value="{{old('d')}}" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-5">
                        <label for="Question">Please Enter The Answer</label>
                        <input type="text" name="answer" value="{{old('answer')}}" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Add Question" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
