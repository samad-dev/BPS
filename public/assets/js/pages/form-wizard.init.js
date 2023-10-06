var currentTab = 0;

function showTab(e) {
    var t = document.getElementsByClassName("wizard-tab");
    t[e].style.display = "block",
        document.getElementById("prevBtn").style.display = 0 == e ? "none" : "inline",
        e == t.length - 1 ? document.getElementById("nextBtn").innerHTML = "Submit" : document.getElementById("nextBtn").innerHTML = "Next",
        e == t.length - 1 ?  $("#nextBtn").attr("onclick", "submit()") : $("#nextBtn").attr("onclick", "nextPrev(1)"),
        fixStepIndicator(e)
}

function nextPrev(e) {
    var t = document.getElementsByClassName("wizard-tab");
    t[currentTab].style.display = "none",
        (currentTab += e) >= t.length && (t[currentTab -= e].style.display = "block"),
        showTab(currentTab)
}

function fixStepIndicator(e) {
    for (var t = document.getElementsByClassName("list-item"),
        n = 0; n < t.length; n++) t[n].className = t[n].className.replace(" active", "");
    t[e].className += " active"
}
showTab(currentTab), flatpickr("#datepicker-basic");


function validateStep(step) {
    var isValid = true;

    // Validation logic for Step 1
    if (step === 1) {
        var name = $("#name").val();
        if (name === '') {
            isValid = false;
            alert("Name is required.");
        }
    }

    // Validation logic for Step 2
    else if (step === 2) {
        var email = $("#email").val();
        if (email === '') {
            isValid = false;
            alert("Email is required.");
        } else if (!isValidEmail(email)) {
            isValid = false;
            alert("Invalid email address.");
        }
    }

    // Validation logic for Step 3
    else if (step === 3) {
        var message = $("#message").val();
        if (message === '') {
            isValid = false;
            alert("Message is required.");
        }
    }

    return isValid;
}