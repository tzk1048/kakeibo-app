@extends('layout.input')

@section('title', 'MoneyBook_入力[支払い]')

@section('current_table')
    <tr>
        <th>日付</th>
        <th>支払い方法</th>
        <th>カテゴリー</th>
        <th>金額</th>
        <th>備考</th>
        <th id='current_table_insert_btn' colspan='2'></th>
    </tr>
    @foreach ($paymentcurrents as $paymentcurrent)
        <tr id="{{ $paymentcurrent->id }}">
            <td>{{ $paymentcurrent->movedate }}</td>
            <td id="{{ $paymentcurrent->bank_id }}">{{ $paymentcurrent->bank }}</td>
            <td id="{{ $paymentcurrent->payment_id }}">{{ $paymentcurrent->payment }}</td>
            <td>{{ $paymentcurrent->price }}</td>
            <td>{{ $paymentcurrent->comment }}</td>
            <td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE'
                    onClick='update_pay({{ $paymentcurrent->id }})'></td>
            <td class='upbtn-td'>
                <form method='post' action='{{ route('inputcash.dlt.tablepost') }}'>
                    @csrf
                    <input type='hidden' name='id' id='Daleteid' value='{{ $paymentcurrent->id }}'>
                    <input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
                </form>
            </td>
        </tr>
    @endforeach
    <form method='post' action="{{ route('inputcash.updt.tablepost') }}" id='updt'>@csrf</form>
@endsection

@section('inputformname', 'cash')

@section('inputbank')

    <label><span class="inputlabel">支払い方法</span>
        <select name='bank_id' id='selecttag_pay'>
            @foreach ($banks as $bank)
                <option value={{ $bank['id'] }}>{{ $bank['bank'] }}</option>
            @endforeach
        </select></label><br>

@endsection

@section('inputlist')
    <table id="inputary" class="inputshortcut">
        <tr id="inputary_title">
            <td colspan="5">Fixed Value</td>
        </tr>
        <tr id="listshort">
            <td><input type="date" id="listshort_date"></td>
            <td><select id="listshort_bank"></select></td>
            <td>ID:<input type="number" min="1" max="32" id="listshort_payid" onchange="SelectPayTag()"><select
                    id="listshort_pay" onchange="InsertPayId()"></select>
            </td>
            <td><input type="number" id="listshort_price"></td>
            <td><input type="text" id="listshort_com"></td>
            <td class="dltbtn-td"></td>
        </tr>
        <tr>
            <th>日付</th>
            <th>支払い方法</th>
            <th>カテゴリー</th>
            <th>金額</th>
            <th>備考</th>
            <th class="dltbtn-td"></th>
        </tr>
        <tr id="inputary_title">
            <td colspan="5">Insert Value</td>
        </tr>
        @for ($i = 0; $i < 3; $i++)
            <tr>
            <td><input type="date" form="inputlist" name="movedate[{{$i}}]" class="shortcutdate" required></td>
            <td><select form="inputlist" name="bank_id[{{$i}}]" class="shortcuttagpay"></select></td>
            <td>ID:<input type="number" min="1" max="32" form="inputlist" class="shortcutcon"
                    onchange="ShortcutShop_num({{$i}})"><select form="inputlist" name="payment_id[{{$i}}]" class="shortcuttagshop"
                    onchange="ShortcutShop_tag({{$i}})"></select></td>
            <td><input type="number" form="inputlist" name="price[{{$i}}]" class="shortcutprice" required></td>
            <td><input type="text" form="inputlist" name="comment[{{$i}}]" class="shortcutcom"></td>
            <td class="dltbtn-td"><button type="button" class="list_dltbtn" onclick="DeleteList({{$i}})">×</button></td>
            </tr>
        @endfor
    </table>
@endsection

    @section('shortcut')

        <tr>
            <th>名前</th>
            <th>日付</th>
            <th>支払い方法</th>
            <th>項目</th>
            <th>金額</th>
            <th>備考</th>
            <th colspan='2'></th>
        </tr>
        @foreach ($paymentshortcuts as $paymentshortcut)
            <tr id='sc{{ $paymentshortcut->id }}'>
                <form action='{{ route('inputcash.input.formpost') }}' method='post' id='scform'>
                    @csrf
                    <td>{{ $paymentshortcut->name }}</td>
                    <td>{{ $paymentshortcut->movedate }}</td>
                    <td id={{ $paymentshortcut->bank_id }}>{{ $paymentshortcut->bank }}</td>
                    <td id={{ $paymentshortcut->payment_id }}>{{ $paymentshortcut->payment }}</td>
                    <td>{{ $paymentshortcut->price }}</td>
                    <td></td>
                    <td class='upbtn-td'><input type='button' class='upbtn' value='追加'
                            onClick='InsertRecordPay({{ $paymentshortcut->id }})'>
                    </td>
                    <td class='upbtn-td'>
                        <input type='button' class='upbtn' value='複数追加'
                            onClick='InsertRecordPay_list({{ $paymentshortcut->id }})'>
                    </td>
                </form>
            </tr>
        @endforeach

    @endsection
