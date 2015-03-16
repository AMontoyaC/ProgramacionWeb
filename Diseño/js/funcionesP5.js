//function hola(){kdhcsd}
$(document).ready(function(){
  
   $('h1').hide('slow');
   $('h1').show('fast');
   $('h1').click(function(){
    });

    $('#ms').hide('fast');
    $('#vt').hide('fast');
    $('#pmen').hide('fast');
    $('#lbms').hide('fast');
    $('#lbvt').hide('fast');
    $('#lbpmen').hide('fast');
    



   $('#calcula').click(function(){
      $('#ms').show('fast');
      $('#vt').show('fast');
      $('#pmen').show('fast');
      $('#lbms').show('fast');
      $('#lbvt').show('fast');
      $('#lbpmen').show('fast');
   });


   $('#calcula').click(calcula);

});

   function calcula(operacion){
            var monto = document.prestamo.monto.value;
            var nomeses= document.getElementById("nomeses").value;

            var intereses;
            var interesTotal;
            var valTotal;

            if(nomeses==1 || nomeses==2 || nomeses==3){
            intereses=monto *0.01;
            interesTotal=intereses*nomeses;
            valTotal=(parseInt(monto)+parseFloat(interesTotal));                    
            }

             if(nomeses==4 || nomeses==5 || nomeses==6 || nomeses==7){
            intereses=monto *0.02;
            interesTotal=intereses*nomeses;
            valTotal=(parseInt(monto)+parseFloat(interesTotal)); 
            }
            if(nomeses>=8){
            intereses=monto *0.03;
            interesTotal=intereses*nomeses;
            valTotal=(parseInt(monto)+parseFloat(interesTotal)); 
            }
            var pagomen=valTotal/nomeses;
            document.prestamo.ms.value=monto;
            document.prestamo.vt.value=valTotal;
            document.prestamo.pmen.value=pagomen;           
            }

 //indica que el documento esta listo para manipularse lo que esta dentro de las llaves es lo que se va a ejecutar
//cuando el documento este listo
//hide oculata todas las etiquetas h1


    