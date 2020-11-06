// авторизация
$('.login-btn').click(function(e) {
    e.preventDefault();
    
    $(`input`).removeClass('is-invalid'); 

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if(data.status){
                document.location.href = '/profile.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('is-invalid');
                    });
                }
                 $('.msg').removeClass('d-none').text(data.message);
            }
        }

    });
});

// регистрация
$('.register-btn').click(function(e) {
    e.preventDefault();
    
    $(`input`).removeClass('is-invalid'); 

    let full_name = $('input[name="full_name"]').val(),
        login = $('input[name="login"]').val(),
        email = $('input[name="email"]').val(),
        password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            full_name: full_name,
            login: login,
            email: email,
            password: password,
            password_confirm: password_confirm
        },
        success (data) {

            if(data.status){
                document.location.href = '/index.php';
            } else {
                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('is-invalid');
                    });
                }
                 $('.msg').removeClass('d-none').text(data.message);
            }
        }

    });
});