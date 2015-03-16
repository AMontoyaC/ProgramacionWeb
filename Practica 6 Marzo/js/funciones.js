$(document).ready(function(){
    $('#vtprestamo').hide('fast');
    $('#mmonto').hide('fast');
    $('#pagomensual').hide('fast');    
    $('#lbl1').hide('fast');    
    $('#lbl2').hide('fast');
    $('#lbl3').hide('fast');
    $('#botonLimpiar').hide('fast');

    $('#img1').click(function(){
        $(this).hide('slow');
    });

    $('#boton').click(function(){
        $('#vtprestamo').show('fast');
        $('#mmonto').show('fast');
        $('#pagomensual').show('fast');    
        $('#lbl1').show('fast');    
        $('#lbl2').show('fast');
        $('#lbl3').show('fast');
         $('#botonLimpiar').show('fast');
    });

    $('#boton').click(calcula);

    $('#botonLimpiar').click(function(){
        $('#vtprestamo').hide('fast');
        $('#mmonto').hide('fast');
        $('#pagomensual').hide('fast');    
        $('#lbl1').hide('fast');    
        $('#lbl2').hide('fast');
        $('#lbl3').hide('fast');
        $('#botonLimpiar').hide('fast');
        document.prestamos.reset();
    });

});

function calcula(){
    var monto = document.prestamos.monto.value;
    var nummeses =  document.prestamos.nummeses.value;
    var intporMes=0;
    var intereses=0;

    if(nummeses>=1 && nummeses<=3){
        intereses=(parseFloat(1)*parseFloat(monto)/parseFloat(100));
        intporMes=intereses*nummeses;
    }

    if(nummeses>=4 && nummeses<=7){
        intereses=(parseFloat(2)*parseFloat(monto)/parseFloat(100));
        intporMes=intereses*nummeses;
    }

    if(nummeses>=8){
        intereses=(parseFloat(3)*parseFloat(monto)/parseFloat(100));
        intporMes=intereses*nummeses;
    }


    var resvtprestamo=(parseFloat(monto)+parseFloat(intporMes));
    document.prestamos.vtprestamo.value=resvtprestamo;


    document.prestamos.mmonto.value=monto;    

    var respagomensual=(parseFloat(resvtprestamo)/parseFloat(nummeses));
    document.prestamos.pagomensual.value=respagomensual;
}

 