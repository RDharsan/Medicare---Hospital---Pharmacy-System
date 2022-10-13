/*var equipment = document.forms["myform"]["equipment"].value;
if (equipment == "") {
    alert("please enter valid equipment name!!");
    document.getElementById("errorEq").innerHTML="<span style='color: red;'>"+"*Please enter valid equipment name!!</span>"
    return false;
} else {
    var ename = /^[a-zA-Z]*$/;
    if (!ename.test(equipment)) {
        alert('Equipment name cannot be a number!!!');
        return false;
    }
}
*/



    function validate(){
    var phone = document.forms["myform"]["phone"].value;
    if(isNaN(phone)){
        document.getElementById("error").innerHTML="<span  style='color: red;'><b>"+"Only digits allowed for Phone number!!!</b></span>"
        return false;
    }

    else if(phone.length>10){
        document.getElementById("error").innerHTML="<span style='color: red;'><b>"+"Maximum limit is 10 digits!!!</b></span>"
        return false;
    }

    else if(phone.length<10){
        document.getElementById("error").innerHTML="<span style='color: red;'><b>"+"Maximum limit is 10 digits!!!</b></span>"
        return false;
    }

    else if(phone.charAt(0)==9){
        document.getElementById("error").innerHTML="<span style='color: red;'><b>"+"Starting number 9 not allowed!!!</b></span>"
        return false;
    }



    var email = document.forms["myform"]["email"].value;
    
    var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var x=re.test(email);
    if(x){
        
    }
    else{
        document.getElementById("errormail").innerHTML="<span style='color: red;'><b>"+"Mail id is not in correct format!!!</b></span>"
        return false;
    }


    var name = document.forms["myform"]["name"].value;
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var dname = regName.test(name);
    if(dname){
       
    }else{
        document.getElementById("errorname").innerHTML="<span style='color: red;'><b>"+"Doctor name cannot contain number!!!</b></span>"
        return false;
    }
    
}

function validateApp(){
    var patient_name = document.forms["myform"]["patient_name"].value;
    var reName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var pname = reName.test(patient_name);
    if(pname){
       
    }else{
        document.getElementById("errorpname").innerHTML="<span style='color: red;'><b>"+"Patient name cannot contain number!!!</b></span>"
        return false;
    }
}


function myFunction() {
var r = confirm("Are you sure you want to delete?");
if (r == false) {
   return false;
} 

}


