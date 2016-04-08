function auth() {
    var login = $("#login").val();
    var pass = $("#pass").val();
    var cont = {"login": login, "pass": pass};
    $.ajax({
        url: "/pi/auth_get_form_data",
        type: "POST",
        dataType: "json",
        data: cont,
        success: function (response) { //Если все нормально

            if (response !== undefined) {
                if (response.auth === true) {
                    //document.location.href = 'http://stiz.xyz/pi/dashboard';
                    var myHref = 'http://78.85.71.32:8082/vis/index.html?login='+login+'&password='+pass;
                    document.location.href = myHref;
                }
                if (response.auth === false) {
                    $("#response").css('color', 'red');
                    $("[type=password]").css('border-color', 'red');
                    $("[type=text]").css('border-color', 'red');
                    $("#response").slideUp("slow");
                    $("#response").html("Неверный логин или пароль!");
                }
                if (response.set_form_data === false) {
                    $("#response").css('color', 'red');
                    $("[type=password]").css('border-color', 'red');
                    $("[type=text]").css('border-color', 'red');
                    $("#response").slideUp("slow");
                    $("#response").html("Не все поля заполнены!");
                }

                data = response;
                console.log(response);
            }

        },
        error: function (response) { //Если ошибка

            data = response;
            console.log(response);
            document.getElementById('response').innerHTML = "Ошибка при отправке формы";
        }
    })
}