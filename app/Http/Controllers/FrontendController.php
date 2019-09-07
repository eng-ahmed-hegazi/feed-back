<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MCQuestion;
use App\TFQuestion;
use App\Rate;
use Auth;

class FrontendController extends Controller
{
    public function create(){
        $MCQuestion = MCQuestion::all();
        $TFQuestion = TFQuestion::all();

        return view('welcome',[
            'mcquestion' => $MCQuestion,
            'tfquestion' => $TFQuestion
        ]);
    }

    public function store(Request $request){

        $MCQuestion = MCQuestion::all();

        $rats = array();

        foreach ($MCQuestion as $mcq):
            if($request->input($mcq->id) == $mcq->answer){
                // push in array 1
                array_push($rats,1);
            }else{
                // push in array 0
                array_push($rats,0);
            }
        endforeach;

        $TFQuestion = TFQuestion::all();
        foreach ($TFQuestion as $tf):
            if($request->input($tf->id) == $tf->answer) {
                // push in array 1
                array_push($rats,1);
            }else{
                // push in array 0
                array_push($rats,0);
            }

        endforeach;
        $true = 0;
        foreach ($rats as $tf=>$value):
            if($value==1){
                $true++;
            }
        endforeach;

        $percentage = $true/sizeof($rats);
        $rate = Rate::where('user_id',Auth::id())->first();

        if($rate){
            $rate->delete();
        }

        Rate::create([
            'user_id' =>Auth::id(),
            'percentage' => $percentage*100
        ]);

        return redirect()->route('feedback.result');

    }

    public function result(){
        $rate = Rate::where('user_id',Auth::id())->first();

        return view('result',[
            'rates' => $rate
        ]);
    }

    public function show(){
        $rate = Rate::all();
        $array = array();
        foreach ($rate as $r):
            array_push($array,$r->percentage);
        endforeach;
		if(sizeof($array)!=0)
        $total = array_sum($array)/sizeof($array);
		else
		$total=0;
        return view('home',[
            'rates' =>$rate,
            'total' => $total
        ]);
    }
}
