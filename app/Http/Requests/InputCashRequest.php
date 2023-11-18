<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Bank;
use App\Models\Payment;

class InputCashRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $payid_max=Payment::max('id')-10000;
        $bankid_max=Bank::max('id')+100;
        return [
            'movedate'=>'required|date',
            'price'=>'required|integer',
            'payment_id'=>'integer|integer|min:1|max:'.$payid_max,
            'bank_id'=>'required|integer|min:1|max:'.$bankid_max,
        ];
    }
}
