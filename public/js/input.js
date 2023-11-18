window.onload = function() {
    var today =  new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0" + (today.getMonth() + 1)).slice(-2);
    var dd = ("0" + today.getDate()).slice(-2);
    document.getElementById("input_form_movedate").value = yyyy + "-" + mm + "-" + dd;
}

document.getElementById('current_table_insert_btn').innerHTML="<form action='' method='post'><input type='submit' name='insertdb' value='INSERT' id='insertdb'></form>"

const InputCashClear =()=> {
    var input_form = document.getElementsByClassName('input_form');
    for (let index = 0; index < input_form.length; index++) {
        input_form[index].value="";

    }
}

const Show =(content,button,text)=>  {
    const ctn=document.getElementById(content);
    const btn=document.getElementById(button);
    if(btn.innerText==text) {
        btn.innerText=btn.value;
        ctn.style.display="table";
    }  else {
        btn.value=btn.innerText;
        btn.innerText=text;
        ctn.style.display="none";
    }
}

const Small =(content,button,text)=>  {
    //const ctn=document.getElementById(content);
    const btn=document.getElementById(button);
    if(btn.innerText==text) {
        btn.innerText=btn.value;
        document.getElementsByClassName('main-top')[0].style.height="50%";
    }  else {
        btn.value=btn.innerText;
        btn.innerText=text;
        document.getElementsByClassName('main-top')[0].style.height="200px";
    }
}
