<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MCQuestion;

class MCQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = MCQuestion::paginate(9);
        return view('admin.mcquesion.index',[
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
        return view('admin.mcquesion.create');
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
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'answer'=>'required'
        ]);

        MCQuestion::create([
            'question'  => $request->input('question'),
            'a'  => $request->input('a'),
            'b'  => $request->input('b'),
            'c'  => $request->input('c'),
            'd'  => $request->input('d'),
            'answer'  => $request->input('answer'),
        ]);

        return redirect()->route('mc_question.index');
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
        $question = MCQuestion::find($id);
        return view('admin.mcquesion.edit',compact('question'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'question'=>'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'answer'=>'required'
        ]);
        $question = MCQuestion::find($id);
        $question->question = $request->input('question');
        $question->a = $request->input('a');
        $question->b = $request->input('b');
        $question->c = $request->input('c');
        $question->d = $request->input('d');
        $question->answer = $request->input('answer');
        $question->save();

        return redirect()->route('mc_question.index');
    }


    public function destroy($id)
    {
        $question = MCQuestion::find($id);
        $question->destroy($id);
        return redirect()->route('mc_question.index');
    }
}
