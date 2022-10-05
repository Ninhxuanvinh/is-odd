<?php

namespace XuanVinh\Isodd\Http\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Mockery\Exception;

class CheckOddController extends Controller
{
    public function index(){
        return view("isodd::index");
    }

    public function checkOdd(Request $request){
        $num = abs($request->number);

        if(is_int($num)){
            redirect()->route('odd.index')->with('error', 'Number is not Integer!');
        }

        if($num % 2 == 1){
//            redirect()->route('odd.index')->with('error', 'Number is Integer!');
            return redirect('check-odd')->with(
                ['num' => $request->number,
                    'message' => ' is odd'
                ]
            );
        }
        return redirect('check-odd')->with(
            ['num' => $request->number,
                'message' => 'is not odd'
                ]
        );

    }
}
