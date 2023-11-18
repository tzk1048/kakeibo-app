
<!DOCTYPE html>
<html>
    <head>
        <meta  charset="utf-8" />
        <title>支出リスト</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
            function CheckDelete(){
                return confirm("削除してもよろしいですか？");
            }
        </script>
    </head>
    <body>
        <nav>
            <div id="nav_title"><h1>MoneyBook</h1></div>
            <div id="nav_menu">
                <ul class="nav_ul1">
                    <li class="nav_li1"><label class="nav_tab">入力</label>
                        <ul class="nav_ul2">
                            <li><a href='input_cash.php'>支払い</a></li>
                            <li>移動</li>
                            <li><a href='input_credit.php'>クレジット</li>
                            <li><a href='input_oshichokin.php'>推し貯金</a></li>
                        </ul>
                    </li>
                    <li class="nav_li1"><label class="nav_tab">閲覧</label>
                        <ul class="nav_ul2">
                            <li><a href='viewer_expenditure.php'>支払い</a></li>
                            <li>移動</li>
                            <li>クレジット</li>
                            <li><a href='viewer_oshichokin.php'>推し貯金</a></li>
                        </ul>
                        <ul class="nav_ul2">
                            <li><a href='statement.php'>残高</a></li>
                            <li><a href='month_aggregate.php'>月集計</a></li>
                        </ul>
                    </li>
                    <li class="nav_li1"><label class="nav_tab">設定</label>
                        <ul class="nav_ul2">
                            <li><a href='list_setting.php'>リスト設定</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>        
        <h1>{{ $message }}</h1>
        
        <div class="main">
            <div class="main-top">
                <div id="current_table_btn_area">
<button class='current_table_btn' id='current_table_btn_small' onclick="Small('current_table','current_table_btn_small','最大化　▼')">最小化　▲</button>
<button class='current_table_btn' id='current_table_btn_blind' onclick="Show('current_table','current_table_btn_blind','表示　▼')">非表示　▲</button>
</div>
<table class='recordlist' id='current_table'><tr><th>日付</th><th>支払い方法</th><th>カテゴリー</th><th>金額</th><th>備考</th><th id='current_table_insert_btn' colspan='2'></th></tr>
<tr id='40'><td>2022-03-01</td><td id='102'>PayPay</td><td id='10002'>外食代</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(40)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='40'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='41'><td>2022-03-01</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(41)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='41'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='42'><td>2022-03-01</td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>572</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(42)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='42'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='43'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(43)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='43'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='44'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(44)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='44'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='45'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(45)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='45'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='46'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(46)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='46'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='47'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(47)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='47'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='48'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(48)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='48'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='49'><td>2022-03-07</td><td id='105'>WAON</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(49)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='49'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='50'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(50)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='50'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='51'><td>2022-03-07</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(51)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='51'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='52'><td>2022-03-01</td><td id='101'>現金</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(52)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='52'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='53'><td>2022-03-01</td><td id='101'>現金</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(53)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='53'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='54'><td>2022-03-11</td><td id='101'>現金</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(54)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='54'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='55'><td>2022-03-17</td><td id='101'>現金</td><td id='10006'>アクセサリー</td><td>10000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(55)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='55'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='56'><td>2022-03-19</td><td id='101'>現金</td><td id='10001'>食費</td><td>3000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(56)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='56'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='57'><td>2022-03-19</td><td id='101'>現金</td><td id='10001'>食費</td><td>3000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(57)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='57'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='58'><td>2022-03-19</td><td id='101'>現金</td><td id='10001'>食費</td><td>3000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(58)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='58'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='64'><td>2022-03-17</td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>582</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(64)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='64'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='65'><td>2022-03-17</td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>582</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(65)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='65'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='67'><td>2022-04-03</td><td id='101'>現金</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='UPDATE' onClick='update_ex(67)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='67'>
<input type='submit' class='upbtn' name='delete' value='DELETE' onClick='return CheckDelete()'>
</form>
</td></tr>
</table>
            </div>
            <div class="main-bottom">
                <div class="area">
                    <input type="radio" name="tab_name" id="tab1" checked>
                    <label class="tab_class" for="tab1">入力</label>
                    <div class="content_class">
                        <form action="" method="post" class="input_cash">
                            <label><span class="inputlabel">日付</span><input type="date" id="inputcash_date" class="input_form" name="date"></label><br>
                            <label>支払い方法<select name='FromBID' id='selecttag_pay'>
<option value=101>現金</option>
<option value=102>PayPay</option>
<option value=103>SUGOCA</option>
<option value=104>SUGOCA2</option>
<option value=105>WAON</option>
<option value=106>福銀(デビット）</option>
<option value=107>西銀</option>
<option value=108>貯金予備軍</option>
<option value=109>ゆうちょ</option>
<option value=110>ひびき</option>
<option value=111>目的預金</option>
<option value=112>取り置き</option>
<option value=114>aaa</option>
</select></label><br>
                            <label><span class="inputlabel">カテゴリーID</span><input type="number" id="inputcash_ConID" class="input_form" name="ConID" min="1" max="32"></label><br>
                            <label><span class="inputlabel">カテゴリー</span><input type="text" id="inputcash_ConName" class="input_form"></label><br>
                            <label><span class="inputlabel">金額</span><input type="number" id="inputcash_price" class="input_form" name="price"></label><br>
                            <label><span class="inputlabel">備考</span><input type="text" id="inputcash_comment" class="input_form" name="comment"></label><br>
                            <input type="submit" name="input_cash" value="入力">
                            <button id="input_clear" onclick="InputCashClear()">クリア</button>
                        </form>
                        <table id='markupsheet'><tr><td id='m_card0'><div id='markupcard1' class='markupcard' onclick='InsertFromCard(1)'><h5>スタバ</h5><ul><li>支払い：PayPay</li><li>項目：スタバ</li><li>金額：572</li></ul></div></td><td id='m_card1'><div id='markupcard2' class='markupcard' onclick='InsertFromCard(3)'><h5>test</h5><ul><li>日付：2022-03-01</li><li>支払い：PayPay</li><li>項目：食費</li><li>金額：100</li><li>メモ：test</li></ul></div></td></tr><tr><td id='m_card2'><div id='markupcard3' class='markupcard' onclick='InsertFromCard(8)'><h5>test4</h5><ul><li>支払い：PayPay</li><li>項目：外食代</li></ul></div></td><td id='m_card3'><div id='markupcard4' class='markupcard' onclick='InsertFromCard(7)'><h5>test3</h5><ul><li>金額：30000</li><li>メモ：test</li></ul></div></td></tr><tr><td id='m_card4'><div id='markupcard5' class='markupcard' onclick='InsertFromCard(11)'><h5>スタバ（ほうじ茶店内）</h5><ul><li>支払い：PayPay</li><li>項目：スタバ</li><li>金額：582</li><li>メモ：test</li></ul></div></td></tr></table>                    </div>
                    <input type="radio" name="tab_name" id="tab2" >
                    <label class="tab_class" for="tab2">リスト入力</label>
                    <div class="content_class">
                        <button class="list_btn" onclick="ListShortSet()">セット</button>
                        <button class="list_btn" onclick="ListShortClear()">固定値クリア</button>
                        <button class="list_btn" onclick="ListShortDataClear()">データクリア</button>
                        <button class="list_btn" onclick="ListShortAllClear()">全クリア</button>
                        <form action="" method="post" id="input">
                            <table id="inputary">
                                <tr id="listshort"><td><input type="date" id="listshort_date"></td><td><select id="listshort_bank"></select></td><td><input type="number" min="1" max="32" id="listshort_payid" onchange="SelectPayTag()"><select id="listshort_pay" onchange="InsertPayId()"></select></td><td><input type="number" id="listshort_price"></td><td><input type="text" id="listshort_com"></td></tr>
                                <tr><th>日付</th><th>支払い方法</th><th>カテゴリー</th><th>金額</th><th>備考</th></tr>
                                <tr><td><input type="date" form="input" name="date[0]" class="shortcutdate"></td><td><select form="input" name="FromBID[0]" class="shortcuttagpay"></select></td><td><input type="number" min="1" max="32" form="input" class="shortcutcon" onchange="ShortcutShop_num(0)"><select name="ConID[0]" class="shortcuttagshop" onchange="ShortcutShop_tag(0)"></select></td><td><input type="number" form="input" name="price[0]" class="shortcutprice"></td><td><input type="text" form="input" name="comment[0]" class="shortcutcom"></td></tr>
                                <tr><td><input type="date" form="input" name="date[1]" class="shortcutdate"></td><td><select form="input" name="FromBID[1]" class="shortcuttagpay"></select></td><td><input type="number" min="1" max="32" form="input" class="shortcutcon" onchange="ShortcutShop_num(1)"><select name="ConID[1]" class="shortcuttagshop" onchange="ShortcutShop_tag(1)"></select></td><td><input type="number" form="input" name="price[1]" class="shortcutprice"></td><td><input type="text" form="input" name="comment[1]" class="shortcutcom"></td></tr>
                                <tr><td><input type="date" form="input" name="date[2]" class="shortcutdate"></td><td><select form="input" name="FromBID[2]" class="shortcuttagpay"></select></td><td><input type="number" min="1" max="32" form="input" class="shortcutcon" onchange="ShortcutShop_num(2)"><select name="ConID[2]" class="shortcuttagshop" onchange="ShortcutShop_tag(2)"></select></td><td><input type="number" form="input" name="price[2]" class="shortcutprice"></td><td><input type="text" form="input" name="comment[2]" class="shortcutcom"></td></tr>
                            </table>
                            <input type="submit" form="input" value="挿入" name="inputary">
                        </form>
                        <button onclick="Insert()">追加</button>
                    </div>
                    <input type="radio" name="tab_name" id="tab3" >
                    <label class="tab_class" for="tab3">ショートカット</label>
                    <div class="content_class">
                        <table class='recordlist' id='payment_shortcut'><tr><th>名前</th><th>日付</th><th>支払い方法</th><th>項目</th><th>金額</th><th>備考</th><th colspan='2'></th></tr>
<tr id='sc1'><form action='' method='post' id='scform'><td>スタバ</td><td></td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>572</td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(1)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(1)'>
</td></form></tr>
<tr id='sc2'><form action='' method='post' id='scform'><td>test5</td><td></td><td id='101'>現金</td><td id='10022'>ママ</td><td>30000</td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(2)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(2)'>
</td></form></tr>
<tr id='sc3'><form action='' method='post' id='scform'><td>test</td><td>2022-03-01</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(3)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(3)'>
</td></form></tr>
<tr id='sc4'><form action='' method='post' id='scform'><td>tes</td><td>2022-03-04</td><td id=''></td><td id='10001'>食費</td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(4)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(4)'>
</td></form></tr>
<tr id='sc6'><form action='' method='post' id='scform'><td>test2</td><td>2022-02-01</td><td id=''></td><td id=''></td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(6)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(6)'>
</td></form></tr>
<tr id='sc7'><form action='' method='post' id='scform'><td>test3</td><td></td><td id=''></td><td id=''></td><td>30000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(7)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(7)'>
</td></form></tr>
<tr id='sc8'><form action='' method='post' id='scform'><td>test4</td><td></td><td id='102'>PayPay</td><td id='10002'>外食代</td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(8)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(8)'>
</td></form></tr>
<tr id='sc9'><form action='' method='post' id='scform'><td>test6</td><td></td><td id=''></td><td id=''></td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(9)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(9)'>
</td></form></tr>
<tr id='sc11'><form action='' method='post' id='scform'><td>スタバ（ほうじ茶店内）</td><td></td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>582</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='追加' onClick='InsertRecordPay(11)'></td><td class='upbtn-td'>
<input type='button' class='upbtn' value='複数追加' onClick='InsertRecordPay_list(11)'>
</td></form></tr>
</table>
                    </div>
                    <input type="radio" name="tab_name" id="tab4" >
                    <label class="tab_class" for="tab4">ショートカット設定</label>
                    <div class="content_class">
                        <table class='recordlist' id='payment_shortcut_set'><tr><th>お気に入り</th><th>名前</th><th>日付</th><th>支払い方法</th><th>項目</th><th>金額</th><th>備考</th><th colspan='2'></th></tr>
<tr id='scset1'><td>お気に入り1</td><td>スタバ</td><td></td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>572</td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(1)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='1'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset2'><td></td><td>test5</td><td></td><td id='101'>現金</td><td id='10022'>ママ</td><td>30000</td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(2)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='2'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset3'><td>お気に入り2</td><td>test</td><td>2022-03-01</td><td id='102'>PayPay</td><td id='10001'>食費</td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(3)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='3'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset4'><td></td><td>tes</td><td>2022-03-04</td><td id=''></td><td id='10001'>食費</td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(4)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='4'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset6'><td></td><td>test2</td><td>2022-02-01</td><td id=''></td><td id=''></td><td>100</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(6)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='6'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset7'><td>お気に入り4</td><td>test3</td><td></td><td id=''></td><td id=''></td><td>30000</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(7)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='7'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset8'><td>お気に入り3</td><td>test4</td><td></td><td id='102'>PayPay</td><td id='10002'>外食代</td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(8)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='8'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset9'><td></td><td>test6</td><td></td><td id=''></td><td id=''></td><td></td><td></td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(9)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='9'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
<tr id='scset11'><td>お気に入り5</td><td>スタバ（ほうじ茶店内）</td><td></td><td id='102'>PayPay</td><td id='10004'>スタバ</td><td>582</td><td>test</td><td class='upbtn-td'><input type='button' class='upbtn' value='更新' onClick='updatesc_pay(11)'></td><td class='upbtn-td'>
<form method='post' action=''>
<input type='hidden' name='id' id='Daleteid' value='11'>
<input type='submit' class='upbtn' name='deletesc' value='削除' onClick='return CheckDelete()'>
</form>
</td></tr>
</table>
                        <button onclick="updateshortcutpay()">追加</button>
                        <button id="markbtn" onclick="MarkSetPay()">お気に入り設定</button>
                        <div id="markset"></div>
                        <table class='recordlist' id='markup_payment'><tr><th></th><th>名前</th><th></th></tr>
<tr id='1'><td>お気に入り1</td><td id='1'>スタバ</td><td><form action='' method='post'><input type='hidden' name='id' value=1><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
<tr id='2'><td>お気に入り2</td><td id='3'>test</td><td><form action='' method='post'><input type='hidden' name='id' value=2><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
<tr id='3'><td>お気に入り3</td><td id='8'>test4</td><td><form action='' method='post'><input type='hidden' name='id' value=3><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
<tr id='4'><td>お気に入り4</td><td id='7'>test3</td><td><form action='' method='post'><input type='hidden' name='id' value=4><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
<tr id='5'><td>お気に入り5</td><td id='11'>スタバ（ほうじ茶店内）</td><td><form action='' method='post'><input type='hidden' name='id' value=5><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
<tr id='6'><td>お気に入り6</td><td id=''></td><td><form action='' method='post'><input type='hidden' name='id' value=6><input type='submit' name='markupdlt' value='お気に入り解除'></form></td></tr>
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
        <div class="right">
            <h3 id='current_preview_h'>プレビューデータ</h3><button id='current_preview_btn' onclick="Show('current_preview','current_preview_btn','▼')">▲</button><div class='current_preview' id='current_preview'><p>総レコード数：28</p><p>合計金額：37336</p><h4>支払い別</h4><p>【現金】</p><p>レコード数：9 合計金額：19500</p><p>【PayPay】</p><p>レコード数：13 合計金額：2736</p><p>【WAON】</p><p>レコード数：1 合計金額：100</p></div>            <button id='payment_list_btn' onclick="Show('payment_list','payment_list_btn','▼')">▲</button>
<table class='recordlist' id='payment_list'><tr><th>ID</th><th>カテゴリー</th></tr>
<tr onclick='selectShop_Contents(10001)'><td>1</td><td>食費</td></tr>
<tr onclick='selectShop_Contents(10002)'><td>2</td><td>外食代</td></tr>
<tr onclick='selectShop_Contents(10003)'><td>3</td><td>交遊費</td></tr>
<tr onclick='selectShop_Contents(10004)'><td>4</td><td>スタバ</td></tr>
<tr onclick='selectShop_Contents(10005)'><td>5</td><td>服・靴</td></tr>
<tr onclick='selectShop_Contents(10006)'><td>6</td><td>アクセサリー</td></tr>
<tr onclick='selectShop_Contents(10007)'><td>7</td><td>化粧・スキンケア</td></tr>
<tr onclick='selectShop_Contents(10008)'><td>8</td><td>電子書籍</td></tr>
<tr onclick='selectShop_Contents(10009)'><td>9</td><td>本</td></tr>
<tr onclick='selectShop_Contents(10010)'><td>10</td><td>楽譜</td></tr>
<tr onclick='selectShop_Contents(10011)'><td>11</td><td>サブスク</td></tr>
<tr onclick='selectShop_Contents(10012)'><td>12</td><td>携帯代</td></tr>
<tr onclick='selectShop_Contents(10013)'><td>13</td><td>SixTONES</td></tr>
<tr onclick='selectShop_Contents(10014)'><td>14</td><td>SixTONES外</td></tr>
<tr onclick='selectShop_Contents(10015)'><td>15</td><td>機械類</td></tr>
<tr onclick='selectShop_Contents(10016)'><td>16</td><td>交通費</td></tr>
<tr onclick='selectShop_Contents(10017)'><td>17</td><td>その他（必要経費）</td></tr>
<tr onclick='selectShop_Contents(10018)'><td>18</td><td>ガチでその他</td></tr>
<tr onclick='selectShop_Contents(10019)'><td>19</td><td>使途不明金</td></tr>
<tr onclick='selectShop_Contents(10020)'><td>20</td><td>勉強</td></tr>
<tr onclick='selectShop_Contents(10021)'><td>21</td><td>工作</td></tr>
<tr onclick='selectShop_Contents(10022)'><td>22</td><td>ママ</td></tr>
<tr onclick='selectShop_Contents(10023)'><td>23</td><td>立替</td></tr>
<tr onclick='selectShop_Contents(10024)'><td>24</td><td>クレヨンしんちゃん</td></tr>
<tr onclick='selectShop_Contents(10025)'><td>25</td><td>文具</td></tr>
<tr onclick='selectShop_Contents(10026)'><td>26</td><td>医療費</td></tr>
<tr onclick='selectShop_Contents(10027)'><td>27</td><td>収納・家具</td></tr>
<tr onclick='selectShop_Contents(10028)'><td>28</td><td>仕事</td></tr>
<tr onclick='selectShop_Contents(10032)'><td>32</td><td>test</td></tr>
</table>
        </div>
        <div id='updttagpay' style="display: none;"><select form='updt' name='FromBID' id='updtbankpay'>
<option value=101>現金</option>
<option value=102>PayPay</option>
<option value=103>SUGOCA</option>
<option value=104>SUGOCA2</option>
<option value=105>WAON</option>
<option value=106>福銀(デビット）</option>
<option value=107>西銀</option>
<option value=108>貯金予備軍</option>
<option value=109>ゆうちょ</option>
<option value=110>ひびき</option>
<option value=111>目的預金</option>
<option value=112>取り置き</option>
<option value=114>aaa</option>
</select></div>
        <div id='updttagshopcon' style="display: none;"><select form='updt' name='ConID' id='updtshopcon'>
<option value=10001>食費</option>
<option value=10002>外食代</option>
<option value=10003>交遊費</option>
<option value=10004>スタバ</option>
<option value=10005>服・靴</option>
<option value=10006>アクセサリー</option>
<option value=10007>化粧・スキンケア</option>
<option value=10008>電子書籍</option>
<option value=10009>本</option>
<option value=10010>楽譜</option>
<option value=10011>サブスク</option>
<option value=10012>携帯代</option>
<option value=10013>SixTONES</option>
<option value=10014>SixTONES外</option>
<option value=10015>機械類</option>
<option value=10016>交通費</option>
<option value=10017>その他（必要経費）</option>
<option value=10018>ガチでその他</option>
<option value=10019>使途不明金</option>
<option value=10020>勉強</option>
<option value=10021>工作</option>
<option value=10022>ママ</option>
<option value=10023>立替</option>
<option value=10024>クレヨンしんちゃん</option>
<option value=10025>文具</option>
<option value=10026>医療費</option>
<option value=10027>収納・家具</option>
<option value=10028>仕事</option>
<option value=10032>test</option>
</select></div>
        <div id='shorttagpay' style="display: none;"><option value=0>---</option>
<option value=101>現金</option>
<option value=102>PayPay</option>
<option value=103>SUGOCA</option>
<option value=104>SUGOCA2</option>
<option value=105>WAON</option>
<option value=106>福銀(デビット）</option>
<option value=107>西銀</option>
<option value=108>貯金予備軍</option>
<option value=109>ゆうちょ</option>
<option value=110>ひびき</option>
<option value=111>目的預金</option>
<option value=112>取り置き</option>
<option value=114>aaa</option>
</div>
        <div id='shorttagshop' style="display: none;"><option value=0>---</option>
<option value=10001>食費</option>
<option value=10002>外食代</option>
<option value=10003>交遊費</option>
<option value=10004>スタバ</option>
<option value=10005>服・靴</option>
<option value=10006>アクセサリー</option>
<option value=10007>化粧・スキンケア</option>
<option value=10008>電子書籍</option>
<option value=10009>本</option>
<option value=10010>楽譜</option>
<option value=10011>サブスク</option>
<option value=10012>携帯代</option>
<option value=10013>SixTONES</option>
<option value=10014>SixTONES外</option>
<option value=10015>機械類</option>
<option value=10016>交通費</option>
<option value=10017>その他（必要経費）</option>
<option value=10018>ガチでその他</option>
<option value=10019>使途不明金</option>
<option value=10020>勉強</option>
<option value=10021>工作</option>
<option value=10022>ママ</option>
<option value=10023>立替</option>
<option value=10024>クレヨンしんちゃん</option>
<option value=10025>文具</option>
<option value=10026>医療費</option>
<option value=10027>収納・家具</option>
<option value=10028>仕事</option>
<option value=10032>test</option>
</div>
        <div id='payid_max' style="display: none;">32</div>
        <script language="JavaScript" type="text/javascript" src="input.js"></script>
        <script language="JavaScript" type="text/javascript" src="update.js"></script>
        <script language="JavaScript" type="text/javascript" src="shortcut_cash.js"></script>
    </body>
</html>