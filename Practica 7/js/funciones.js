$(document).ready(
    function(){

        $('#r1').hide();
        $('#r2').hide();
        $('#jugarnuevo').hide();

        $('#btnjugar').click(
            function(){
                $('#titulo').hide();
                $('#btnjugar').hide();
                $('#r1').show();
                $('#r2').show();
            }
        );

        var nuevacarta;
        var cartamarcada;
        var cont;
        var conth=0;


        var nuevacartamarcada;
        var nc;
        var c2=1;
        var numc;

        var arr=['f','f','f','f','f','f','f','f'];
        var barr;

        setInterval(
            function(){
                cont=Math.round((Math.random()*7)+1);
                nuevacarta='img/loteria'+cont+'.png';
                $('#cartaMaestra').attr('src',nuevacarta);

            }, 2000
        );

        $('.carta').click(
            function(){
                var c=cont;
                cartamarcada='img/loteria'+c+'m.png';
                $(this).attr('src',cartamarcada);
                $(this).unbind("click");
                conth++;
            
            if(conth==8){
                $('#cartaMaestra').hide();
                $('.carta').hide();
                $('#titulo2').attr('src','img/win.png');
                $('#jugarnuevo').show();

            }

            }
        );

        $('#jugarnuevo').click(function(){
                $('#cartaMaestra').show();
                $('#jugarnuevo').hide()
                $('#titulo2').attr('src','img/titulo2.png');

                while(c2<9){
                    nc=Math.round((Math.random()*7)+1);

                    barr=arr[nc-1];

                    if(barr=='f')
                        arr[nc-1]='t';
                    else{
                        while(barr!='f'){
                            nc=Math.round((Math.random()*7)+1);
                            barr=arr[nc-1];
                        }
                        if(barr=='f')
                            arr[nc-1]='t';
                    }
                    nuevacartamarcada='img/loteria'+nc+'.png';

                    switch (c2){
                        case 1:
                            numc='#1'
                        break;
                        case 2:
                            numc='#2'
                        break;
                        case 3:
                            numc='#3'
                        break;
                        case 4:
                            numc='#4'
                        break;
                        case 5:
                            numc='#5'
                        break;
                        case 6:
                            numc='#6'
                        break;
                        case 7:
                            numc='#7'
                        break;
                        case 8:
                            numc='#8'
                        break;
                    }
                    $(numc).attr('src',nuevacartamarcada);
                    $('.carta').show();
                    c2++;
                }
            }
        );
    }
);

