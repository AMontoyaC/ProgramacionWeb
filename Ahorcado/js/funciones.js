$(document).ready(function(){

	var rutaicono;
	
	//2jugadores
	var pal1;
	var jug1;
	var pal2;
	var jug2;
	var b=0;



	$('#icono').hide();
	$('#titulo').hide();
	$('#menu').hide();
	$('#ayuda').hide();
	$('#creditos').hide();
	$('#opciones').hide();
	$('#cambiaricono').hide();
	$('#2jugadores').hide();
	$('#agregarpalabra').hide();
	$('#categorias').hide();
	$('#t1jug').hide();

	document.body.style.backgroundColor = "#FFFFFF";
	$('#entrar').click(function(){
		$('#gif1').hide();
		$('#entrar').hide();
    	document.body.style.backgroundImage = "url('img/fondo.png')";
    	$('#icono').show();
    	$('#titulo').show();
	});

	$('#titulo').click(function(){
		$('#icono').hide();
		$('#titulo').hide();
		$('#menu').show();
	});

	$('#btnayuda').click(function(){
		$('#menu').hide();
		$('#ayuda').show();
	});

	$('#ayuda_menu').click(function(){
		$('#menu').show();
		$('#ayuda').hide();
	});

	$('#btncreditos').click(function(){
		$('#menu').hide();
		$('#creditos').show();
	});

	$('#creditos_menu').click(function(){
		$('#menu').show();
		$('#creditos').hide();
	});

	$('#btnopc').click(function(){
		$('#menu').hide();
		$('#opciones').show();
	});

	$('#opciones_menu').click(function(){
		$('#menu').show();
		$('#opciones').hide();
	});

	$('#btncamicono').click(function(){
		$('#opciones').hide();
		$('#cambiaricono').show();
	});

	$('#camicono_menu').click(function(){
		$('#menu').show();
		$('#cambiaricono').hide();
	});

	$('#btn2jug').click(function(){
		$('#menu').hide();
		$('#2jugadores').show();
	});

	$('#formjug1_menu').click(function(){
		$('#menu').show();
		$('#2jugadores').hide();
	});

	$('#listo1').click(function(){
		pal1 = document.jug1.pal1.value;
		jug1 = document.jug1.nomjug1.value;

		if(pal1.length>10){
			$('#icono').hide();
			$('#titulo').hide();
			$('#menu').hide();
			alert("Palabra mayor a 10 caracteres");
			document.jug1.pal1.value="";
		}
		else{
   			var v=tiene_numeros(pal1);

   			if(v==1){
   				alert("Tiene caracteres especiales");
   				document.jug1.pal1.value="";
   			}
   			else{
   				alert("ALL GOOD");
   			}
		}
	});

	$('#btnagrpalabras').click(function(){
		$('#opciones').hide();
		$('#agregarpalabra').show();
	});

	$('#agrpalabra_menu').click(function(){
		$('#menu').show();
		$('#agregarpalabra').hide();
	});

	$('#listo2').click(function(){
		var palabra = document.agrpalabra.palabra.value;
		var categoria = document.agrpalabra.categoria.value;
		var ncategoria="n"+categoria;

		var v=tiene_numeros(palabra);

   		if(v==1){
   			alert("Tiene caracteres especiales");
   			document.agrpalabra.palabra.value="";
   		}
   		else{
   			agregar_palabra(categoria,ncategoria,palabra);
   			$('#menu').show();
			$('#agregarpalabra').hide();
   		}
	});


	$('#btn1jug').click(function(){
		$('#menu').hide();
		$('#categorias').show();
	});

	$('#cat_menu').click(function(){
		$('#menu').show();
		$('#categorias').hide();
	});

	$('#t1jug_menu').click(function(){
		$('#menu').show();
		$('#t1jug').hide();
	});

	//imagen categorias click
	$('#ic1').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("paisesyciudades","npaisesyciudades");
	});

	$('#ic2').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("comida","ncomida");
	});

	$('#ic3').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("deportes","ndeportes");
	});

	$('#ic4').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("disney","ndisney");
	});

	$('#ic5').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("marcas","nmarcas");
	});

	$('#ic6').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("musica","nmusica");
	});

	$('#ic7').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("peliculasyseries","npeliculasyseries");
	});

	$('#ic8').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		elegir_palabra("personajes","npersonajes");
	});


	//depende click icono guardar su ruta
	$('#i1').click(function(){
		rutaicono="img/icono1.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i2').click(function(){
		rutaicono="img/icono2.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i3').click(function(){
		rutaicono="img/icono3.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i4').click(function(){
		rutaicono="img/icono4.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i5').click(function(){
		rutaicono="img/icono5.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i6').click(function(){
		rutaicono="img/icono6.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i7').click(function(){
		rutaicono="img/icono7.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i8').click(function(){
		rutaicono="img/icono8.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i9').click(function(){
		rutaicono="img/icono9.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i10').click(function(){
		rutaicono="img/icono10.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i11').click(function(){
		rutaicono="img/icono11.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
	$('#i12').click(function(){
		rutaicono="img/icono12.png";
		$('#menu').show();
		$('#cambiaricono').hide();
	});
});


var numeros="0123456789|°¬!#$%&/()=?'+*~´¨{[^}]`-_:.;,";

function tiene_numeros(texto){
   for(i=0; i<texto.length; i++){
      if (numeros.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
}

var npaisesyciudades=20;
var ncomida=20;
var ndeportes=20;
var ndisney=20;
var nmarcas=20;
var nmusica=20;
var npeliculasyseries=20;
var npersonajes=20;

var paisesyciudades = ["Mexico","Celaya","Berlin","Londres","Belgica","Dublin","Texas","Paris"
				,"Brasil","Guanajuato","Irlanda","China","Dubai","Inglaterra","Rusia"
				,"Alemania","Francia","Argentina","Croacia","Ecuador"];

var comida = ["hamburguesa","papas","tacos","torta","pozole","sopa","gelatina","pollo","carne"
				,"jamon","salchicha","pizza","sushi","helado","queso","cereal","huevo","ensalada","arroz","galleta"];

var deportes = ["futbol","basquetbol","tenis","atletismo","hockey","americano","golf","natacion"
				,"beisbol","ciclismo","equitacion","handball","box","esgrima","gimnasia","taekwondo"
				,"voleibol","lucha","triatlon","waterpolo"];

var disney = ["frozen","princesa","mickey","enredados","walt","disneyland","cenicienta","blancanieves"
				,"nemo","elsa","ana","woody","buzz","tarzan","pocahontas","minnie","aurora","malefica"
				,"dory","principe"];

var marcas = ["apple","android","xbox","samsung","gap","mattel","levis","kellogs","huggies","pepsi"
				,"heinz","target","adidas","nike","puma","pringles","sabritas","dell","whatsapp","nutella"];

var musica = ["yellow","sing","cantante","banda","pompeii","bastille","coldplay","pop","rock"
				,"clasica","concierto","shakira","guitarra","haim","onerepublic","bateria"
				,"summer","alive","queen","bajo"];				

var peliculasyseries = ["friends","glee","bones","csi","revenge","lost","house","homeland"
						,"heroes","nashville","dexter","supernatural","arrow","malefica"
						,"transformers","godzilla","divergente","noe","her","xmen"];				

var personajes = ["thor","ironman","batman","superman","bumblebee","hulk","gatubela","spiderman"
					,"pinocho","olaf","homero","rapunzel","Sulley","bart","daisy","piolin"
					,"goofy","donald","shrek","wolverine"];


function agregar_palabra(c,nc,p){
	if(c=="paisesyciudades"){
		paisesyciudades.push(p);
		npaisesyciudades++;
		//alert(paisesyciudades.join('\n'));
	}
	if(c=="comida"){
		comida.push(p);
		ncomida++;
		//alert(comida.join('\n'));
	}
	if(c=="deportes"){
		deportes.push(p);
		ndeportes++;
		//alert(deportes.join('\n'));
	}
	if(c=="disney"){
		disney.push(p);
		ndisney++;
		//alert(disney.join('\n'));
	}
	if(c=="marcas"){
		marcas.push(p);
		nmarcas++;
		//alert(marcas.join('\n'));
	}
	if(c=="musica"){
		musica.push(p);
		nmusica++;
		//alert(musica.join('\n'));
	}
	if(c=="peliculasyseries"){
		peliculasyseries.push(p);
		npeliculasyseries++;
		//alert(peliculasyseries.join('\n'));
	}
	if(c=="personajes"){
		personajes.push(p);
		npersonajes++;
		//alert(personajes.join('\n'));
	}
}

function elegir_palabra(c,nc){
	var num;
	var p;

	if(c=="paisesyciudades"){
		num=Math.round((Math.random()*npaisesyciudades)+1);
		p=paisesyciudades[num];
	}
	if(c=="comida"){
		num=Math.round((Math.random()*ncomida)+1);
		p=comida[num];
	}
	if(c=="deportes"){
		num=Math.round((Math.random()*ndeportes)+1);
		p=deportes[num];
	}
	if(c=="disney"){
		num=Math.round((Math.random()*ndisney)+1);
		p=disney[num];
	}
	if(c=="marcas"){
		num=Math.round((Math.random()*nmarcas)+1);
		p=marcas[num];
	}
	if(c=="musica"){
		num=Math.round((Math.random()*nmusica)+1);
		p=musica[num];
	}
	if(c=="peliculasyseries"){
		num=Math.round((Math.random()*npeliculasyseries)+1);
		p=peliculasyseries[num];
	}
	if(c=="personajes"){
		num=Math.round((Math.random()*npersonajes)+1);
		p=personajes[num];
	}
}