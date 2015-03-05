//funcion principal, para poder seleccionar elementos y manipularlos
//document tiene todo el archivo html de mi página
//ready funcion para decir que el docuemento esta listo
//se puede declarar una funcion y hacer su código
//function(){}
//mandar funcion implicita o anonima como parametro ready(function{}), de preferncia solo un document.ready

$(document).ready(function(){
    //alert("Hola");

    //selecciona todos los elementos h1
    $('h1').hide('slow'); 
    $('h1').show('fast'); 
    $('h1').click(function(){
        $(this).hide('fast');

        //selecciona el que tenga el id Consola
        $('#consola').html($(this).css('fontSize'));

        if($(this).css('fontSize')=='50px'){
            $(this).css('fontSize','32px');
        }
        else{
            $(this).css('fontSize','50px');
        }

        //obtener el valor css(fontSize) el segundo parametro es el valor que se le va a asignar ahora
        //$(this).css('fontSize','50px');

        $(this).show('fast');
    });

    $('#btn1').click(function(){
        $('#img1').attr('src','img/img_14.jpg');
    });

    $('#btn2').click(function(){
        $('#img1').attr('src','img/img_7.jpg');
    });

    $('#btn3').click(function(){
        $('#img1').attr('src','img/img_40.jpg');
        $('#img1').animate({
            opacity:0.25,
            width: "25",
            left: "50",
            height: "30"
        },5000,function(){

        });
    });

});
