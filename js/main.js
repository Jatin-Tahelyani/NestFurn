$(document).ready(function () {
    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Name should only contain letters.");

    $('#register-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 50,
                lettersonly: true
            },
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 8,
                maxlength: 20,
                pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#%&])[a-zA-Z0-9!@#$%&]{8,20}$/
            },
            re_pass: {
                required: true,
                equalTo: "#pass"
            }
        },
        messages: {
            name: {
                required: "Name is required.",
                minlength: "Name should be at least 3 characters long.",
                maxlength: "Name should not exceed 50 characters.",
                lettersonly: "Name should only contain letters."
            },
            email: {
                required: "Email is required.",
                email: "Please enter a valid email address."
            },
            pass: {
                required: "Password is required.",
                minlength: "Password should be at least 8 characters long.",
                maxlength: "Password should not exceed 20 characters.",
                pattern: "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character (!@#$%&)."
            },
            re_pass: {
                required: "Repeat password is required.",
                equalTo: "Passwords do not match."
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            error.insertAfter(element);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const minusBtn = document.querySelector(".minus");
    const plusBtn = document.querySelector(".plus");
    const quantityInput = document.querySelector(".quantity");

    minusBtn.addEventListener("click", function () {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });

    plusBtn.addEventListener("click", function () {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });
});

function toggleFilter() {
    var filterOptions = document.getElementById('filterOptions');
    if (filterOptions.style.display === "none") {
        filterOptions.style.display = "block";
    } else {
        filterOptions.style.display = "none";
    }
}