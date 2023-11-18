<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <script type="text/javascript">
        function CheckDelete() {
            return confirm("削除してもよろしいですか？");
        }
    </script>
</head>

<body>
    @include('layout.header')
    <h1>inputページレイアウト</h1>
</body>
<div class="main">
    <div class="main-top">
        <div id="current_table_btn_area">
            <button class='current_table_btn' id='current_table_btn_small'
                onclick="Small('current_table','current_table_btn_small','最大化　▼')">最小化　▲</button>
            <button class='current_table_btn' id='current_table_btn_blind'
                onclick="Show('current_table','current_table_btn_blind','表示　▼')">非表示　▲</button>
        </div>
        <table class='recordlist' id='current_table'>
            @yield('current_table')
        </table>
    </div>
    <div class="main-bottom">
        <div class="area">
            <input type="radio" name="tab_name" id="tab1" checked>
            <label class="tab_class" for="tab1">入力</label>
            <div class="content_class">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('inputcash.input.formpost') }}" method="post" id="input_form"
                    id=@yield('inputformname')>
                    @csrf
                    <label><span class="inputlabel">日付</span>
                        <input type="date" id="input_form_movedate" class="input_form" name="movedate" required>
                    </label><br>
                    @yield('inputbank')
                    @foreach ($inputforms as $inputform)
                        <label><span class="inputlabel">{{ $inputform['label'] }}</span>
                            <input type="{{ $inputform['type'] }}" id="{{ $inputform['id'] }}"
                                class="input_form" name="{{ $inputform['name'] }}"
                                {{ $inputform['validation'] }}>
                        </label><br>
                    @endforeach
                    <input type="submit" name=@yield('inputformname') value="入力">
                    <button type="button" input_clear" onclick="InputCashClear()">クリア</button>
                </form>

                <table id='markupsheet'>
                    <tr>
                        <td id='m_card0'>
                            <div id='markupcard1' class='markupcard' onclick='InsertFromCard(1)'>
                                <h5>スタバ</h5>
                                <ul>
                                    <li>支払い：PayPay</li>
                                    <li>項目：スタバ</li>
                                    <li>金額：572</li>
                                </ul>
                            </div>
                        </td>
                        <td id='m_card1'>
                            <div id='markupcard2' class='markupcard' onclick='InsertFromCard(3)'>
                                <h5>test</h5>
                                <ul>
                                    <li>日付：2022-03-01</li>
                                    <li>支払い：PayPay</li>
                                    <li>項目：食費</li>
                                    <li>金額：100</li>
                                    <li>メモ：test</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id='m_card2'>
                            <div id='markupcard3' class='markupcard' onclick='InsertFromCard(8)'>
                                <h5>test4</h5>
                                <ul>
                                    <li>支払い：PayPay</li>
                                    <li>項目：外食代</li>
                                </ul>
                            </div>
                        </td>
                        <td id='m_card3'>
                            <div id='markupcard4' class='markupcard' onclick='InsertFromCard(7)'>
                                <h5>test3</h5>
                                <ul>
                                    <li>金額：30000</li>
                                    <li>メモ：test</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id='m_card4'>
                            <div id='markupcard5' class='markupcard' onclick='InsertFromCard(11)'>
                                <h5>スタバ（ほうじ茶店内）</h5>
                                <ul>
                                    <li>支払い：PayPay</li>
                                    <li>項目：スタバ</li>
                                    <li>金額：582</li>
                                    <li>メモ：test</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <input type="radio" name="tab_name" id="tab2">
            <label class="tab_class" for="tab2">リスト入力</label>
            <div class="content_class">
                <button class="list_btn" onclick="ListShortSet()">セット</button>
                <button class="list_btn" onclick="ListShortClear()">固定値クリア</button>
                <button class="list_btn" onclick="ListShortDataClear()">データクリア</button>
                <button class="list_btn" onclick="ListShortAllClear()">全クリア</button>
                <form action="{{ route('inputcash.input.listpost') }}" method="post" id="inputlist">
                    @csrf
                    @yield('inputlist')
                    <input type="submit" form="inputlist" value="入力" name="inputary">
                    <button type="button" id="input_add" onclick="Insert()">追加</button>
                </form>
            </div>
            <input type="radio" name="tab_name" id="tab3">
            <label class="tab_class" for="tab3">ショートカット</label>
            <div class="content_class">
                <table class='recordlist inputshortcut' id='inputshortcut'>
                    @yield('shortcut')
                </table>
            </div>
            <input type="radio" name="tab_name" id="tab4">
            <label class="tab_class" for="tab4">ショートカット設定</label>
            <div class="content_class">
                <table class='recordlist' id='payment_shortcut_set'>
                    <tr>
                        <th>お気に入り</th>
                        <th>名前</th>
                        <th>日付</th>
                        <th>支払い方法</th>
                        <th>項目</th>
                        <th>金額</th>
                        <th>備考</th>
                        <th colspan='2'></th>
                    </tr>
                    <tr id='scset1'>
                        <td>お気に入り1</td>
                        <td>スタバ</td>
                        <td></td>
                        <td id='102'>PayPay</td>
                        <td id='10004'>スタバ</td>
                        <td>572</td>
                        <td></td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(1)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='1'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset2'>
                        <td></td>
                        <td>test5</td>
                        <td></td>
                        <td id='101'>現金</td>
                        <td id='10022'>ママ</td>
                        <td>30000</td>
                        <td></td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(2)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='2'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset3'>
                        <td>お気に入り2</td>
                        <td>test</td>
                        <td>2022-03-01</td>
                        <td id='102'>PayPay</td>
                        <td id='10001'>食費</td>
                        <td>100</td>
                        <td>test</td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(3)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='3'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset4'>
                        <td></td>
                        <td>tes</td>
                        <td>2022-03-04</td>
                        <td id=''></td>
                        <td id='10001'>食費</td>
                        <td></td>
                        <td></td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(4)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='4'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset6'>
                        <td></td>
                        <td>test2</td>
                        <td>2022-02-01</td>
                        <td id=''></td>
                        <td id=''></td>
                        <td>100</td>
                        <td>test</td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(6)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='6'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset7'>
                        <td>お気に入り4</td>
                        <td>test3</td>
                        <td></td>
                        <td id=''></td>
                        <td id=''></td>
                        <td>30000</td>
                        <td>test</td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(7)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='7'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset8'>
                        <td>お気に入り3</td>
                        <td>test4</td>
                        <td></td>
                        <td id='102'>PayPay</td>
                        <td id='10002'>外食代</td>
                        <td></td>
                        <td></td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(8)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='8'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset9'>
                        <td></td>
                        <td>test6</td>
                        <td></td>
                        <td id=''></td>
                        <td id=''></td>
                        <td></td>
                        <td></td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(9)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='9'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                    <tr id='scset11'>
                        <td>お気に入り5</td>
                        <td>スタバ（ほうじ茶店内）</td>
                        <td></td>
                        <td id='102'>PayPay</td>
                        <td id='10004'>スタバ</td>
                        <td>582</td>
                        <td>test</td>
                        <td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(11)'>
                        </td>
                        <td class='upbtn-td'>
                            <form method='post' action=''>
                                <input type='hidden' name='id' id='Daleteid' value='11'>
                                <input type='submit' class='upbtn' name='deletesc' value='削除'
                                    onClick='return CheckDelete()'>
                            </form>
                        </td>
                    </tr>
                </table>
                <button onclick="updateshortcutpay()">追加</button>
                <button id="markbtn" onclick="MarkSetPay()">お気に入り設定</button>
                <div id="markset"></div>
                <table class='recordlist' id='markup_payment'>
                    <tr>
                        <th></th>
                        <th>名前</th>
                        <th></th>
                    </tr>
                    <tr id='1'>
                        <td>お気に入り1</td>
                        <td id='1'>スタバ</td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=1><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                    <tr id='2'>
                        <td>お気に入り2</td>
                        <td id='3'>test</td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=2><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                    <tr id='3'>
                        <td>お気に入り3</td>
                        <td id='8'>test4</td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=3><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                    <tr id='4'>
                        <td>お気に入り4</td>
                        <td id='7'>test3</td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=4><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                    <tr id='5'>
                        <td>お気に入り5</td>
                        <td id='11'>スタバ（ほうじ茶店内）</td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=5><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                    <tr id='6'>
                        <td>お気に入り6</td>
                        <td id=''></td>
                        <td>
                            <form action='' method='post'><input type='hidden' name='id' value=6><input type='submit'
                                    name='markupdlt' value='お気に入り解除'></form>
                        </td>
                    </tr>
                </table>
            </div>
            <!--<input type="radio" name="tab_name" id="tab5" >
            <label class="tab_class" for="tab5">その他</label>
            <div class="content_class">
                <p>タブ5</p>
            </div>-->
        </div>
    </div>
</div>
<div class='right'>
    <button id='payment_list_btn' onclick="Show('payment_list','payment_list_btn','▼')">▲</button>
    <table class='recordlist' id='payment_list'>
        <tr>
            <th>ID</th>
            <th>カテゴリー</th>
        </tr>
        @foreach ($payments as $payment)
            <tr onclick='InputToPaymentOfForm({{ $payment->id }})''>
                <td>{{ $payment->id - 10000 }}</td>
                <td>{{ $payment->payment }}</td>
            </tr>
@endforeach
    </table>
</div>
<div id='updttagbank' style="display: none;">
                <select form="updt" name='bank_id' id='selecttag_updtbank'>
                    @foreach ($banks as $bank)
                        <option value={{ $bank['id'] }}>{{ $bank['bank'] }}</option>
                    @endforeach
                </select>
</div>
<div id='updttagpayment' style="display: none;">
    <select form="updt" name='payment_id' id='selecttag_updtpayment'>
        @foreach ($payments as $payment)
            <option value={{ $payment['id'] }}>{{ $payment['payment'] }}</option>
        @endforeach
    </select>
</div>
<div id='shcttagbank' style="display: none;">
    <option value="0">---</option>
    @foreach ($banks as $bank)
        <option value={{ $bank['id'] }}>{{ $bank['bank'] }}</option>
    @endforeach
</div>
<div id='shcttagpayment' style="display: none;">
    <option value="0">---</option>
    @foreach ($payments as $payment)
        <option value={{ $payment['id'] }}>{{ $payment['payment'] }}</option>
    @endforeach
</div>
<div id='payid_max' style="display: none;">{{ $payid_max }}</div>
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/input.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/input_payment.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/update.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('/js/shortcut_payment.js') }}"></script>

</html>
