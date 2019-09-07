@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
               View Questions
            </div>
            <div class="panel-body">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>Questions</th>
                        <th>Chooses</th>
                        <th>Answer</th>
                        <th class="text-center">EDIT</th>
                        <th class="text-center">DELETE</th>
                    </tr>
                    @foreach($questions as $question)
                        <tr class="text-center">
                            <td class="text-left">{{$question->question}}</td>
                            <td class="text-left">
                                {{$question->a}} ,
                                {{$question->b}} ,
                                {{$question->c}} ,
                                {{$question->d}}
                            </td>
                            <td>
                                {{$question->answer}}
                            </td>
                            <td><a href="{{route('mc_question.edit',$question->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                            <td>
                                <form action="{{route('mc_question.destroy',$question->id)}}" class="form"
                                      method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection