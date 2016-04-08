$(document).ready(function() {
    document.getElementById("ifr").style.height=window.innerHeight+"px";
    function load() {
        $("#hid").hide();
        $("#ifr").fadeIn("slow");
    }
    setTimeout(load, 3000);
    var url = 'http://78.85.71.32:8082/vis/#Start';
    var encode = encodeURIComponent(url);
   // alert(encode);

    //$("#ifr2").attr('src', encode);
    $.ajax({
        url:     "app/components/getHtml.php", //Адрес подгружаемой страницы
        type:     "POST", //Тип запроса
        dataType: "html", //Тип данных

        success: function(response) { //Если все нормально
            document.getElementById('tt').innerHTML = response ;

        },
        error: function(response) { //Если ошибка
            document.getElementById('tt').innerHTML = "Ошибка при отправке формы";
        }
    });
});