@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add True / False Chooses Question
            </div>
            <div class="panel-body">
                <form action="{{route('tf_question.store')}}" method="post">
                    {{csrf_field()}}
                    {{method_field('POST')}}
                    <div class="form-group">
                        <label for="Question">Please Enter The Question</label>
                        <input type="text" name="question" value="{{old('question')}}" placeholder="enter the question" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Question">Please Choose The Answer</label>
                        <select name="answer" id="category" class="form-control" style="height: 35px">
                                <option value="1">True</option>
                                <option value="0">False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Add Question"  class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
