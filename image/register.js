function validate(){
      
    let incolor=incolor=document.getElementById("uname");
    let incolor2=document.getElementById("password1");
    let incolor3=document.getElementById("password2");

    let udata=document.getElementById("uname").value;
    var p1data=document.getElementById("password1").value;
    var p2data=document.getElementById("password2").value;
    let a="";
    let b="";
    let c="";
    let d="";
    
    let error1=document.getElementById("unerror");
    let error2=document.getElementById("pw1error");
    let error3=document.getElementById("pw2error");
    let error4=document.getElementById("confirmerror");
    let ud=new RegExp(/\b\w+\b/);
    let p1d=new RegExp(/\b\w{6,}\b/);
    let p2d=new RegExp(/\b\w{6,}\b/);
    
   

    if(udata.search(ud)==-1){
        a="please enter valid username";
    }
    if(p1data.search(p1d)==-1)
    {
        b="please enter valid password";
    }
    if(p2data.search(p2d)==-1)
    {
        c="please enter valid password";
    }
    if(p1data!=p2data)
    {
        d="please  enter the same password";
      
    }
   

    if(a!=" "||b!=""||c!=""||d!=""){
    //   incolor.style.border="1px red solid";
        error1.innerHTML=a;
        // incolor2.style.border="1px red solid";
        error2.innerHTML=b;
        // incolor3.style.border="1px red solid";
        error3.innerHTML=c;
        error4.innerHTML=d;
        return false;
    }
    else{
     
        error1.innerHTML="";
        
        error2.innerHTML="";
        error3.innerHTML="";
        error4.innerHTML="";
        return true;

    }
};
