/**
 * Created by yzs on 2016/11/13.
 */
function validateForm() {
    var alertMessage = "";
    var valid = true;

    var age = document.forms["quiz"]["Personal_Age"].value;
    var pattern = new RegExp("^([0-9]{1,3})$");
    if (age == "" || age == null) {
        alertMessage += "Age required\n";
        valid = false;
    }
    else if (pattern.test(age) == false) {
        alertMessage += "Invalid letters or too large\n";
        valid = false;
    }
    else if (age < 0) {
        alertMessage += "Age should be positive\n";
        valid = false;
    }
    return valid;
}