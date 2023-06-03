$(document).ready(function () {
    // register
    $("#register").on('click', function (e) {
        e.preventDefault();

        const username = $("#username").val();
        const email = $("#email").val();
        const password = $("#password").val();

        if (!username || !email || !password) {
            alert('Please fill the field');
        } else {
            $.ajax({
                url: 'php/register.php',
                type: "POST",
                data: {
                    username: username,
                    email: email,
                    password: password
                },
                success: (data) => { 
                    if (data == 1) {
                        alert("user register successfully")
                        $("#username").val('');
                        $("#email").val('');
                        $("#password").val('');
                        window.location.href='/';
                    } else if (data == 2) {
                        alert("email already exists")
                        $("#password").val('');
                    } else {
                        $("#password").val('');
                        alert("Server problem")
                    }
                }
            })
        }
    })

    // login
    $("#login").on('click', function (e) {
        e.preventDefault();

        const username = $("#username").val();
        const password = $("#password").val();

        if (!username || !password) {
            alert('Please fill the field');
        } else {
            $.ajax({
                url: 'php/login.php',
                type: "POST",
                data: {
                    username: username,
                    password: password
                },
                success: (data) => { 
                    if (data == 1) {
                        alert("user login successfully")
                        $("#username").val('');
                        $("#password").val('');
                        window.location.href='/home.php';
                    } else {
                        $("#password").val('');
                        alert("invalid username and password")
                    }
                }
            })
        }
    })
})