const validation = new justValidate("#staff_signup");

validation
    .addField("#name", [
        {
            rule: "required"
        }
    ]);

    validation
        .addField("#email", [
            {
                rule: "required"
            },
            {
                rule: "email", 
            },
            {
                validator: (value) => () => {
                    return fetch("validateEmail.php?email=" + 
                    encodeURIComponent(value))
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(json){
                                return json.available;
                            });
                },
                errorMessage: "Email is already taken"
            }
        ])
        .addField("#password", [
            {
                rule: "required"
            },
            {
                rule: "password",
            }
        ])

        .addField("#password_confirmation", [
            {
                validation: (value, fields) => {
                    return value === fields["#password"].elem.value;
                },
                errorMessage: "Password confirmation does not match"
            }
        ])

        .onSuccess((Event) => {
            document.getElementById("staff_signup").submit();
        });

/*-----------------------Student Signup Validation-----------------------*/

        const studentValidation = new justValidate("#student_signup");

studentValidation
    .addField("#name", [
        {
            rule: "required"
        }
    ])
        .addField("#email", [
            {
                rule: "required"
            },
            {
                rule: "email", 
            },
            {
                validator: (value) => () => {
                    return fetch("studentValidateEmail.php?email=" + 
                    encodeURIComponent(value))
                            .then(function(response) {
                                return response.json();
                            })
                            .then(function(json){
                                return json.available;
                            });
                },
                errorMessage: "Email is already taken"
            }
        ])
        .addField("#password", [
            {
                rule: "required"
            },
            {
                rule: "password",
            }
        ])

        .addField("#password_confirmation", [
            {
                validation: (value, fields) => {
                    return value === fields["#password"].elem.value;
                },
                errorMessage: "Password confirmation does not match"
            }
        ])

        .onSuccess((Event) => {
            document.getElementById("student_signup").submit();
        });