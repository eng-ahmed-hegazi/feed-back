@extends('front')
    @section('content')
        <form action="{{route('feedback.store')}}" method="post">
            {{csrf_field()}}
            {{method_field('POST')}}
            @foreach($tfquestion as $q)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong class="text-muted">Question {{$q->id}}</strong>
                    </div>
                    <div class="panel-body">
                        <span class="page-header text-dark">
                            <strong style="font-family: Cairo;font-size: 18px">
                                - {{$q->question}} ?
                            </strong>
                        </span><br>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$q->id}}" value="1">True</label><br>
                        </div>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$q->id}}" value="0">False</label><br>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach($mcquestion as $question)
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <strong class="text-muted">Question {{$question->id}}</strong>
                    </div>
                    <div class="panel-body">
                        <span class="page-header text-dark">
                            <strong style="font-family: Cairo;font-size: 18px">
                                - {{$question->question}} ?
                            </strong>
                        </span><br>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$question->id}}" value="{{$question->a}}">{{$question->a}}</label><br>
                        </div>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$question->id}}" value="{{$question->b}}">{{$question->b}}</label><br>
                        </div>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$question->id}}" value="{{$question->c}}">{{$question->c}}</label><br>
                        </div>
                        <div class="radio">
                            <label style="font-family: Cairo;"><input type="radio" name="{{$question->id}}" value="{{$question->d}}">{{$question->d}}</label><br>
                        </div>
                </div>
                </div>
            @endforeach
            <div class="form-group">
                <label for="comment">Enter Your Comment</label>
                <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="enter your comment"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Survey" class="btn btn-success">
            </div>
        </form>
    @endsection