function validate(){
    var x=document.getElementById("n1").value.trim();
    var thr=document.getElementById("rgg").value.trim();
    var y=document.getElementById("ps").value.trim();
    var z=document.getElementById("num").value.trim();
    var v=document.getElementById("cty").value.trim();
    var r=document.getElementById("em").value.trim();
    var regex=/^([a-z 0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})$/;
    var d=document.getElementById("dt").value.trim();
    var e=document.getElementById("rbtn1");
    var i=document.getElementById("rbtn2");
    var o=document.getElementById("rbtn3");
    var th=document.getElementById("esw");
    var yh=document.getElementById("tsw");
    var yt=document.getElementById("cmm").value.trim();
    if(x=="")
    {
        window.alert("name blank");
        document.getElementById("n1").style.border="2px solid red";
        return false;
    }
    else if(thr==""||thr.length>7)
    {
        window.alert("regno invalid");
        document.getElementById("rgg").style.border="2px solid red";
        return false;
    }
    else if(y==""||y.length<6)
    {
        window.alert("invalid password");
        document.getElementById("ps").style.border="2px solid red";
        return false;
    }
    else if(z==""||z.length>10)
    {
        window.alert("number invalid");
        document.getElementById("num").style.border="2px solid red";
        return false;
    }
    else if(z.length<10)
    {
        window.alert("number invalid");
        document.getElementById("num").style.border="2px solid red";
        return false;
    }
    else if(r==""||regex.test(r)==false)
    {
        window.alert("invalid email");
        document.getElementById("em").style.border="2px solid red";
        return false;

    }
    else if(d=="")
    {
        window.alert("enter dob");
        document.getElementById("dt").style.border="2px solid red";
        return false;
    }
    else if(th.checked==false&&yh.checked==false)
    {
        window.alert("please select gender");
        return false
    }
    else if(v=="default")
    {
        window.alert("please select a city");
        document.getElementById("cty").style.border="2px solid red";
        return false;
    }
    else if(e.checked==false&&i.checked==false&&o.checked==false)
    {
        window.alert("vote");
        document.getElementById("message").innerHTML="**select one";
        return false;
    }
    else if(yt=="")
    {
        window.alert("please comment");
        document.getElementById("cmm").style.border="2px solid red";
        return false;
    }

    else{
        return true;
    }
}