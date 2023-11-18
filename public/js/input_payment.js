const tbl=document.getElementById("payment_list");

const inputcash_payment_id = document.getElementById("input_form_payment_id");

const InputToPaymentOfForm = (id) => {
    inputcash_payment_id.value = id-10000;
    var rowid = id-10000;
    var index = tbl.rows.length-1;
    if(rowid<=index) {
        rowvalue = tbl.rows[rowid].cells[0].innerText;
        index = tbl.rows[rowid].cells[0].innerText;
    } else {
        rowvalue = tbl.rows[index].cells[0].innerText;
    }
    while (rowid!=rowvalue) {
        index--;
        rowvalue = tbl.rows[index].cells[0].innerText;
    }
    document.getElementById("input_form_payment").value = tbl.rows[index].cells[1].innerText;
}

inputcash_payment_id.addEventListener("change",function(){
    document.getElementById("input_form_payment").value = tbl.rows[inputcash_payment_id.value].cells[1].innerText;
});
