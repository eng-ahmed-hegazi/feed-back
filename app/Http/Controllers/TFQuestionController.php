<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TFQuestion;

class TFQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = TFQuestion::paginate(9);
        return view('admin.tfquestion.index',[
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tfquestion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'question'=>'required',
            'answer'=>'required'
        ]);

        TFQuestion::create([
            'question'  => $request->input('question'),
            'answer'  => $request->input('answer'),
        ]);

        return redirect()->route('tf_question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = TFQuestion::find($id);
        return view('admin.tfquestion.edit',compact('question'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'question'=>'required',
            'answer'=>'required'
        ]);
        $question = TFQuestion::find($id);
        $question->question = $request->input('question');
        $question->answer = $request->input('answer');
        $question->save();

        return redirect()->route('tf_question.index');
    }


    public function destroy($id)
    {
        $question = TFQuestion::find($id);
        $question->destroy($id);
        return redirect()->route('tf_question.index');
    }
}
