function send(){
      var cont = {"hello" : 'hello'};
    $.ajax({
        url: "http://78.85.71.32:8082/vis/dd.json",
        crossDomain: true,
        dataType: "jsonp",
        jsonpCallback: 'mycallback',
        success: function (response) { //Если все нормально
            alert(response.wer);

        },
        error: function (response) { //Если ошибка
            alert("No");
        },
        jsonp: 'jsonp'
    });
    
}