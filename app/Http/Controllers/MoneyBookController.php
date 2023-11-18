<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Bank;
use App\Models\Payment;
use App\Models\PaymentCurrent;
use App\Http\Requests\InputCashRequest;
use DateTime;

class MoneyBookController extends Controller
{
    public function inputcash(Request $request)
    {
        //tableデータの取得
        $payments = Payment::all();
        $banks = Bank::all();
        $paymentcurrents = DB::table('payment_currents')
            ->join('banks', 'payment_currents.bank_id', '=', 'banks.id')
            ->join('payments', 'payment_currents.payment_id', '=', 'payments.id')
            ->select('payment_currents.*', 'banks.bank', 'payments.payment')
            ->get();

        $paymentshortcuts = DB::table('payment_shortcuts')
            ->join('banks', 'payment_shortcuts.bank_id', '=', 'banks.id')
            ->join('payments', 'payment_shortcuts.payment_id', '=', 'payments.id')
            ->select('payment_shortcuts.*', 'banks.bank', 'payments.payment')
            ->get();

        //formの生成データ
        $input_forms = [
            $this->createInputForm()['category_id'],
            $this->createInputForm()['category'],
            $this->createInputForm()['price'],
            $this->createInputForm()['comment'],
        ];

        $payid_max=Payment::count();

        //送信データ
        $resultdata = [
            'payments' => $payments,
            'banks' => $banks,
            'inputforms' => $input_forms,
            'paymentcurrents' => $paymentcurrents,
            'paymentshortcuts' => $paymentshortcuts,
            'payid_max' => $payid_max,
        ];

        return view('MoneyBook.input_cash', $resultdata);
    }

    public function createInputForm()
    {
        $payment_id_max=Payment::count();
        $input_forms = [
            'category_id' => [
                'label' => 'カテゴリーID',
                'type' => 'number',
                'id' => 'input_form_payment_id',
                'name' => 'payment_id',
                'validation'  => 'max=' .$payment_id_max .' min=1 required',
            ],
            'category' => [
                'label' => 'カテゴリー',
                'type' => 'text',
                'id' => 'input_form_payment',
                'name' => 'payment',
                'validation'  => '',
            ],
            'price' => [
                'label' => '金額',
                'type' => 'number',
                'id' => 'input_form_price',
                'name' => 'price',
                'validation'  => 'required',
            ],
            'comment' => [
                'label' => '備考',
                'type' => 'text',
                'id' => 'input_form_comment',
                'name' => 'comment',
                'validation'  => '',
            ],
        ];
        return $input_forms;
    }

    public function postInputCashInputForm(InputCashRequest $request) {
        $movedate = $request->input('movedate');
        $price = $request->input('price');
        $payment_id = $request->input('payment_id')+10000;
        $bank_id = $request->input('bank_id');
        $comment = $request->input('comment');

        PaymentCurrent::Create([
            'movedate'=>$movedate,
            'price'=>$price,
            'payment_id'=>$payment_id,
            'bank_id'=>$bank_id,
            'comment'=>$comment,
        ]);
        return redirect()->route('inputcash');
    }

    public function postInputCashInputList(Request $request) {
        $movedate = $request->input('movedate');
        $price = $request->input('price');
        $payment_id = $request->input('payment_id');
        $bank_id = $request->input('bank_id');
        $comment = $request->input('comment');

        for ($i=0; $i < count($movedate); $i++) {
            PaymentCurrent::Create([
                'movedate'=>$movedate[$i],
                'price'=>$price[$i],
                'payment_id'=>$payment_id[$i],
                'bank_id'=>$bank_id[$i],
                'comment'=>$comment[$i],
            ]);
        }
        return redirect()->route('inputcash');
    }

    public function postInputCashUpdtTable(InputCashRequest $request) {
        $id = $request->input('id');
        $movedate = $request->input('movedate');
        $price = $request->input('price');
        $payment_id = $request->input('payment_id');
        $bank_id = $request->input('bank_id');
        $comment = $request->input('comment');

        PaymentCurrent::Where('id',$id)->Update([
            'movedate'=>$movedate,
            'price'=>$price,
            'payment_id'=>$payment_id,
            'bank_id'=>$bank_id,
            'comment'=>$comment,
        ]);
        return redirect()->route('inputcash');
    }

    public function postInputCashDltTable(Request $request) {
        $id = $request->input('id');

        PaymentCurrent::Where('id',$id)->delete();
        return redirect()->route('inputcash');
    }
}
