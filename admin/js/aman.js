//Valdidation for password
function BtnDisable(){
    document.getElementById("idBtnClose").style.display="none";
}
function BtnShow(){
    var op=document.getElementById("idPassword").type;
    if(op=="password"){
        document.getElementById("idPassword").type="text";
        document.getElementById("idBtnClose").style.display="block";
        document.getElementById("idBtnOpen").style.display="none";
    }
    if(op=="text"){
        document.getElementById("idPassword").type="password";
        document.getElementById("idBtnClose").style.display="none";
        document.getElementById("idBtnOpen").style.display="block";
    }
    var cp = document.getElementById("idCPassword").type;
    if (cp == "password") {
        document.getElementById("idCPassword").type = "text";
        document.getElementById("idBtnClose").style.display = "block";
        document.getElementById("idBtnOpen").style.display = "none";
    }
    if (cp == "text") {
        document.getElementById("idCPassword").type = "password";
        document.getElementById("idBtnClose").style.display = "none";
        document.getElementById("idBtnOpen").style.display = "block";
    }
}
function PassValid(){
    var pass=document.getElementById("idPassword").value;
    len=pass.length;
    if(len=="" || len==null)
    {
        document.getElementById("ShowMsgPassword").innerHTML="Please Enter Password";
        document.getElementById("ShowMsgPassword").style.color="blue";
    }
    else if(len<=4)
    {
        document.getElementById("ShowMsgPassword").innerHTML="Password Too Short";
        document.getElementById("ShowMsgPassword").style.color="red";
    }
    else if(len>=5 && len<=8)
    {
        document.getElementById("ShowMsgPassword").innerHTML="Password Too Medium";
        document.getElementById("ShowMsgPassword").style.color="orange";
    }
    else
    {
        document.getElementById("ShowMsgPassword").innerHTML="Strong Password";
        document.getElementById("ShowMsgPassword").style.color="green";
    }
}

//Valdidation for email
function EmailValid(){
    var text=document.getElementById("IdMail").value;
    var regx=/^([a-z 0-9\.-]+)@([a-z 0-9-/]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
    if(regx.test(text)){
        document.getElementById("ShowEmailMsg").innerText="Email is Valid";
        document.getElementById("ShowEmailMsg").style.color = "yellowgreen";
    }
    else{
        document.getElementById("ShowEmailMsg").innerText = "Email is Invalid";
        document.getElementById("ShowEmailMsg").style.color="red";
    }
}

//Mobile Number Validation
function mobValid(){
    var mob=document.getElementById("IdMobile").value;
    if((mob[0]==9||mob[0]==8||mob[0]==6)&& mob.length==10)
    {
        document.getElementById("ShowMobileMsg").innerText="Valid Number";
        document.getElementById("ShowMobileMsg").style.color = "yellowgreen";
    }
    else
    {
        document.getElementById("ShowMobileMsg").innerText="Invalid Number";
        document.getElementById("ShowMobileMsg").style.color="red";
    }
}

// to make only digits to enter use this in input-> onkeypress="return checkNum(event)"
function checkNum(a){
    var txt=a.which || a.keycode;
    if(txt>=48 && txt<=57)
        return true;
    else
        return false;
}

// to make only alphabets to enter use this in input-> onkeypress="return checkChar(event)"
function checkChar(b){
    var txt=b.which || b.keycode;
    if((txt>=65 && txt<=90) || (txt>=97 && txt<=122) || txt==32)
        return true;
    else
        return false;
}

// to make only valid input-> onkeypress="return checkValid(event)"
function checkValid(a) {
    var txt = a.which || a.keycode;
    if ((txt >= 48 && txt <= 57) || (txt >= 97 && txt <= 122) || (txt >= 65 && txt <= 90) || txt == 44 || txt == 45 || txt == 41 || txt == 42 || txt == 32 || txt == 46)
        return true;
    else
        return false;
}

// to make only valid input-> onkeypress="return checkEValid(event)"
function checkEValid(a) {
    var txt = a.which || a.keycode;
    if ((txt >= 48 && txt <= 57) || (txt >= 97 && txt <= 122) || (txt >= 65 && txt <= 90) || txt == 44 || txt == 45 || txt == 41 || txt == 42 || txt == 32 || txt == 46 || txt == 64)
        return true;
    else
        return false;
}