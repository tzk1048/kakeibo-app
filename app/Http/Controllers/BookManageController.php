<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookItem;
use DateTime;

class BookManageController extends Controller
{
    public function index(Request $request) {
        $message = $this->message();
        /*$resultdata = [
            'common_header'=>[
                'message'=>'',
                'message2'=>'',
            ],
            'books'=>'',
        ];
        $resultdata['common_header']['message']=$message*/
        //compact('test_1') ['message' => $message , 'message2' => $message2]
        //$book=BookItem::find(1);
        //$books=BookItem::Where('author','testauthor')->get();
        $books=BookItem::all();
        $message2 = "ようこそ";
        $resultdata = [
            'common_header'=>[
                'message'=>$message,
                'message2'=>$message2,
            ],
            'books'=>$books,
        ];
        return view('BookMng.index',$resultdata);
        //return view('BookMng.index',compact('message','message2','books'));
    }

    public function post(Request $request) {
        $tiitle = $request->input('title');
        $author = $request->input('author');
        $isbn = $request->input('isbn');
        $datepurchased = $request->input('datepurchased');
        $price = $request->input('price');
        BookItem::Create([
            'title'=>$tiitle,
            'author'=>$author,
            'isbn'=>$isbn,
            'datepurchased'=>(new DateTime($datepurchased))->format('Y-m-d'),
            'price'=>$price,
        ]);
        return redirect()->route('bookmanage.index');
    }

    public function message() {
        return "こんにちは";
    }
}
