function validate() {

    var equipment = document.forms["myform"]["equipment"].value;
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

    var model = document.forms["myform"]["model"].value;
    if (model == "") {
        alert("Please enter the valid model name!!");
        document.getElementById("errorModel").innerHTML="<span style='color: red;'>"+"*Please enter valid model name!!</span>"
        return false;
    }
    else {
        var modelname = /^[a-zA-Z]*$/;
        if (!modelname.test(model)) {
            alert('Invalid Model name given!!!');
            return false;
        }
    }

    var insurance_date = document.forms["myform"]["insurance_date"].value;
    if (insurance_date == "") {
        alert("Please select the valid insurance_date!!");
        document.getElementById("errorIns").innerHTML="<span style='color: red;'>"+"*Please enter valid insurance date!!</span>"
        return false;
    }

    var cost = document.forms["myform"]["cost"].value;
    if (cost == "") {
        alert("Please enter the valid cost!!");
        document.getElementById("errorCost").innerHTML="<span style='color: red;'>"+"*Please enter valid cost!!</span>"

        return false;
    }

    var estimated_lifespan = document.forms["myform"]["estimated_lifespan"].value;
    if (estimated_lifespan == "") {
        alert("Please enter the estimated_lifespan!!");
        document.getElementById("errorlife").innerHTML="<span style='color: red;'>"+"*Please enter valid lifespan!!</span>"
        return false;
    }

    var submit = document.forms["myform"]["submit"].value;
    if (submit == "") {
        alert("Details added sucessfully!!")

    }




}

function updatevalidate() {

    var equipment = document.forms["myform"]["equipment"].value;
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

    var model = document.forms["myform"]["model"].value;
    if (model == "") {
        alert("Please enter the valid model name!!");
        document.getElementById("errorModel").innerHTML="<span style='color: red;'>"+"*Please enter valid model name!!</span>"

        return false;
    }
    else {
        var modelname = /^[a-zA-Z]*$/;
        if (!modelname.test(model)) {
            alert('Invalid Model name given!!!');
            return false;
        }
    }

    var insurance_date = document.forms["myform"]["insurance_date"].value;
    if (insurance_date == "") {
        alert("Please select the valid insurance_date!!");
        document.getElementById("errorIns").innerHTML="<span style='color: red;'>"+"*Please enter valid insurance date!!</span>"

        return false;
    }

    var cost = document.forms["myform"]["cost"].value;
    if (cost == "") {
        alert("Please enter the valid cost!!");
        document.getElementById("errorCost").innerHTML="<span style='color: red;'>"+"*Please enter valid cost!!</span>"

        return false;
    }

    var estimated_lifespan = document.forms["myform"]["estimated_lifespan"].value;
    if (estimated_lifespan == "") {
        alert("Please enter the estimated_lifespan!!");
        document.getElementById("errorlife").innerHTML="<span style='color: red;'>"+"*Please enter valid lifespan!!</span>"
        return false;
    }

    var submit = document.forms["myform"]["submit"].value;
    if (submit == "") {
        alert("Details Updated sucessfully!!")

    }




}



function msgdlt() {

    alert("Details Deleted sucessfully!!");
}

function msgupt() {

    alert("Details Updated sucessfully!!");
}



function validatemedical() {

    var test_type = document.forms["myform"]["test_type"].value;
    if (test_type == "") {
        alert("please select valid test_type!!");
        document.getElementById("errorType").innerHTML="<span style='color: red;'>"+"*Please enter valid Test type name!!</span>"

        return false;
    }

    var lab_room = document.forms["myform"]["lab_room"].value;
    if (lab_room == "") {
        alert("Please enter the valid lab_room number!!");
        document.getElementById("errorLab").innerHTML="<span style='color: red;'>"+"*Please enter valid Lab room number!!</span>"

        return false;
    }


    var lab_incharge = document.forms["myform"]["lab_incharge"].value;
    if (lab_incharge == "") {
        alert("Please select the valid lab_incharge!!");
        document.getElementById("errorIn").innerHTML="<span style='color: red;'>"+"*Please enter valid doctor incharge name!!</span>"

        return false;
    }

    var nurse = document.forms["myform"]["nurse"].value;
    if (nurse == "") {
        alert("Please select the valid nurse name!!");
        document.getElementById("errorNurse").innerHTML="<span style='color: red;'>"+"*Please enter valid nurse name!!</span>"

        return false;
    }

    var test_doneby = document.forms["myform"]["test_doneby"].value;
    if (test_doneby == "") {
        alert("Please select the test_doneby doctor name !!");
        document.getElementById("errorDoneBy").innerHTML="<span style='color: red;'>"+"*Please enter valid doctor name!!</span>"

        return false;
    }

    var test_date = document.forms["myform"]["test_date"].value;
    if (test_date == "") {
        alert("Please select the test done date !!");
        document.getElementById("errorDate").innerHTML="<span style='color: red;'>"+"*Please enter valid date!!</span>"

        return false;
    }

    var submit = document.forms["myform"]["submit"].value;
    if (submit == "") {
        alert("Details added sucessfully!!")

    }


    if (select == "") {
        alert("Please select a selection");
        return false;


    }
}

function datepick(){
    var date = new Date();
    var tdate = date.getDate();
    var month=date.getMonth() + 1 ;
    if(tdate<10){
        tdate = "0" + tdate;
    }

    if(month<10){
        month = "0" + month;
    }

    var year = date.getUTCFullYear()-1;
    var minDate= year + "-" + month + "-" + tdate;
    document.getElementById("demo").setAttribute('min', minDate);
}

document.querySelector('.datepicker').datepicker({
    inline: true
  });