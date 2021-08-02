var frase=$(".paragrafo").text();
var cs = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, velit distinctio. Ipsa quidem ad enim, nostrum facere odio, quis illo delectus sunt corrupti aliquid dolore libero perspiciatis commodi, officia totam"

$("#areatexto").on("input", function(){

    
    var digitado = $("#areatexto").val();

    var comparavel = cs.substr(0, digitado.length);
    console.log(digitado);
    // console.log(frase);
    console.log(comparavel);

    var ok = 0;
    var fail = 0;

    if (digitado == comparavel){
        $("#areatexto").removeAttr('cod', 'cod-verde');

        $("#areatexto").attr('cod', 'cor-verde');
        $("#areatexto").removeAttr('cods', 'cor-vermelha');
        
    }else {
        $("#areatexto").attr('cods', 'cor-vermelha');
        $("#areatexto").removeAttr('cod', 'cod-verde');
    }

    

    var caract = $(this).val();
    $("#caract-digit").text(caract.length);
    $("#resul-palavra").text(caract.split(/\S+/).length-1);
    
});

$(".resul").hide(); //Esconde os resultados de palavras e caracteres;
$("#refresh").hide(); // Esconde o botão de refresh da pagina;


var oneminu = $("#list-60-list");
oneminu.on("click", function(){
    $("#segundos").append('<p><span id="tempo-digit" class="text-center"> 60 </span> Segundos</p>');
    $("#list-60-list").unbind("click");
    $("#list-90-list").unbind("click");
    $("#list-10-list").unbind("click");
    $("#tempo-digit").val(60);
    // console.log($(".tempo-digit").text());

    var time = 1000;
    var tempoRestante = $("#tempo-digit").val();
    // console.log(tempoRestante);    
    $("#areatexto").one('focus', function(){
    
        var x = setInterval(function(){
          
            tempoRestante--;
            console.log(tempoRestante);
            $("#tempo-digit").text(tempoRestante);
            if (tempoRestante < 1){
                $("#areatexto").attr("disabled", true);
                clearInterval(x);
                $(".resul").show();
                $("#refresh").show();
                
                $("#refresh").on("click", function(){
                    location.reload();
    
                })
            }
            
    
        }, time);
    
    });



})



var noventasegu = $("#list-90-list");
noventasegu.on("click", function(){
    $("#segundos").append('<p><span id="tempo-digit" > 90 </span> Segundos</p>');
    $("#list-90-list").unbind("click");
    $("#list-60-list").unbind("click");
    $("#list-10-list").unbind("click");
    $("#tempo-digit").val(90);
    // console.log($(".tempo-digit").text());

    var time = 1000;
    var tempoRestante = $("#tempo-digit").val();
    // console.log(tempoRestante);    
    $("#areatexto").one('focus', function(){
    
        var x = setInterval(function(){
          
            tempoRestante--;
            console.log(tempoRestante);
            $("#tempo-digit").text(tempoRestante);
            if (tempoRestante < 1){
                $("#areatexto").attr("disabled", true);
                clearInterval(x);
                $(".resul").show();
                $("#refresh").show();
                
                $("#refresh").on("click", function(){
                    location.reload();
    
                })
            }
            
    
        }, time);
    });
    
});



var dezseg = $("#list-10-list");
dezseg.on("click", function(){
    $("#segundos").append('<p><span id="tempo-digit" > 10 </span> Segundos</p>');
    $("#list-90-list").unbind("click");
    $("#list-60-list").unbind("click");
    $("#list-10-list").unbind("click");
    $("#tempo-digit").val(10);
    // console.log($(".tempo-digit").text());

    var time = 1000;
    var tempoRestante = $("#tempo-digit").val();
    // console.log(tempoRestante);    
    $("#areatexto").one('focus', function(){
    
        var x = setInterval(function(){
          
            tempoRestante--;
            console.log(tempoRestante);
            $("#tempo-digit").text(tempoRestante);
            if (tempoRestante < 1){
                $("#areatexto").attr("disabled", true);
                clearInterval(x);
                $(".resul").show();
                $("#refresh").show();
                
                $("#refresh").on("click", function(){
                    location.reload();
    
                })
            }
            
    
        }, time);
    });
    
});

