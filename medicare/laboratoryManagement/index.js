function validate() {

    var equipment = document.forms["myform"]["equipment"].value;
    if (equipment == "") {
        alert("please enter valid equipment name!!");
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
        return false;
    }

    var cost = document.forms["myform"]["cost"].value;
    if (cost == "") {
        alert("Please enter the valid cost!!");
        return false;
    }

    var estimated_lifespan = document.forms["myform"]["estimated_lifespan"].value;
    if (estimated_lifespan == "") {
        alert("Please enter the estimated_lifespan!!");
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
        return false;
    }

    var cost = document.forms["myform"]["cost"].value;
    if (cost == "") {
        alert("Please enter the valid cost!!");
        return false;
    }

    var estimated_lifespan = document.forms["myform"]["estimated_lifespan"].value;
    if (estimated_lifespan == "") {
        alert("Please enter the estimated_lifespan!!");
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

function pdfmsg() {

    alert("Pdf downloading!!!");
}


function validatemedical() {

    var test_type = document.forms["myform"]["test_type"].value;
    if (test_type == "") {
        alert("please select valid test_type!!");
        return false;
    }

    var lab_room = document.forms["myform"]["lab_room"].value;
    if (lab_room == "") {
        alert("Please enter the valid lab_room number!!");
        return false;
    }


    var lab_incharge = document.forms["myform"]["lab_incharge"].value;
    if (lab_incharge == "") {
        alert("Please select the valid lab_incharge!!");
        return false;
    }

    var nurse = document.forms["myform"]["nurse"].value;
    if (nurse == "") {
        alert("Please select the valid nurse name!!");
        return false;
    }

    var test_doneby = document.forms["myform"]["test_doneby"].value;
    if (test_doneby == "") {
        alert("Please select the test_doneby doctor name !!");
        return false;
    }

    var test_date = document.forms["myform"]["test_date"].value;
    if (test_date == "") {
        alert("Please select the test done date !!");
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


