$(document).ready(function(){

	var rutaicono;
	
	//2jugadores
	var pal1;
	var jug1;
	var pal2;
	var jug2;
	var b=0;

	//1jug
	var padivinar;
	//0 si no adivino y 1 si ya adivino
	var vadivino=0;


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

	//ocultar cuerpo
	$('#t1jugicono').hide();
	$('#t1jugcuerpo').hide();
	$('#t1jugbizq').hide();
	$('#t1jugbder').hide();
	$('#t1jugpizq').hide();
	$('#t1jugpder').hide();


	//1jug
	var nguiones;
	var dguiones;
	var banderaletra;
	var contahorcado=0;

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
		padivinar=elegir_palabra("paisesyciudades","npaisesyciudades");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic2').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("comida","ncomida");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic3').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("deportes","ndeportes");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic4').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("disney","ndisney");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic5').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("marcas","nmarcas");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic6').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("musica","nmusica");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic7').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("peliculasyseries","npeliculasyseries");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
	});

	$('#ic8').click(function(){
		$('#categorias').hide();
		$('#t1jugicono').attr('src',rutaicono);
		$('#t1jug').show();
		padivinar=elegir_palabra("personajes","npersonajes");
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones').text(dguiones);
		alert(padivinar);
	});


	//botones letras
	$('#la').click(function(){
		document.getElementById("la").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"a");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"a",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}


	});
	$('#lb').click(function(){
		document.getElementById("lb").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"b");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"b",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#lc').click(function(){
		document.getElementById("lc").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"c");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"c",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#ld').click(function(){
		document.getElementById("ld").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"d");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"d",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#le').click(function(){
		document.getElementById("le").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"e");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"e",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#lf').click(function(){
		document.getElementById("lf").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"f");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"f",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#lg').click(function(){
		document.getElementById("lg").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"g");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"g",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#lh').click(function(){
		document.getElementById("lh").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"h");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"h",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#li').click(function(){
		document.getElementById("li").disabled=true;
		//saber si la letra esta
		banderaletra=bandletra(padivinar,"i");
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,"i",dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);	
		}
		if(banderaletra==0){
			contahorcado++;


			switch (contahorcado){
				case 1:
					$('#t1jugicono').show();
					break;
				case 2:
					$('#t1jugcuerpo').show();
					break;
				case 3:
					$('#t1jugbizq').show();
					break;
				case 4:
					$('#t1jugbder').show();
					break;
				case 5:
					$('#t1jugpizq').show();
					break;
				case 6:
					$('#t1jugpder').show();
					break;
			}
		}

		if(contahorcado==6){
			alert("perdiste");
		}
	});
	$('#lj').click(function(){
		document.getElementById("lj").disabled=true;
	});
	$('#lk').click(function(){
		document.getElementById("lk").disabled=true;
	});
	$('#ll').click(function(){
		document.getElementById("ll").disabled=true;
	});
	$('#lm').click(function(){
		document.getElementById("lm").disabled=true;
	});
	$('#ln').click(function(){
		document.getElementById("ln").disabled=true;
	});
	$('#lñ').click(function(){
		document.getElementById("lñ").disabled=true;
	});
	$('#lo').click(function(){
		document.getElementById("lo").disabled=true;
	});
	$('#lp').click(function(){
		document.getElementById("lp").disabled=true;
	});
	$('#lq').click(function(){
		document.getElementById("lq").disabled=true;
	});
	$('#lr').click(function(){
		document.getElementById("lr").disabled=true;
	});
	$('#ls').click(function(){
		document.getElementById("ls").disabled=true;
	});
	$('#lt').click(function(){
		document.getElementById("lt").disabled=true;
	});
	$('#lu').click(function(){
		document.getElementById("lu").disabled=true;
	});
	$('#lv').click(function(){
		document.getElementById("lv").disabled=true;
	});
	$('#lw').click(function(){
		document.getElementById("lw").disabled=true;
	});
	$('#lx').click(function(){
		document.getElementById("lx").disabled=true;
	});
	$('#ly').click(function(){
		document.getElementById("ly").disabled=true;
	});
	$('#lz').click(function(){
		document.getElementById("lz").disabled=true;
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

	return p;
}

function num_guiones(pal){
	var guiones=0;
	for(var i=0;i<pal.length;i++){
		guiones++;
	}
	return guiones;
}

function dib_guiones(ng){
	var sguiones="";
	for(var i=0;i<ng;i++){
		sguiones+="_ ";
	}

	return sguiones;
}

function buscar(palabra,letra,dguiones){
	var nump=dguiones.length;
	var arrdguiones=new Array(palabra.length);

	//poner palabra con guiones o letras encontradas en un arreglo
	var j=1;
	for(var i=0;i<nump;i++){
		if(i==0){
			arrdguiones[i]=dguiones.charAt(i);
		}
		if(i!=0 && i%2==0){
			arrdguiones[j]=dguiones.charAt(i);
			j++;
		}
	}

	//ver si la letra esta en la palabra y cuantas veces
	var numletra=0;

	for(var i=0;i<palabra.length;i++){
		if(palabra.charAt(i)==letra){
			numletra++;
		}
	}

	//si esta la letra en la palabra, sacar posiciones y agregarla al arreglo
	var posicion;

	//si numletra es dif de 0 es que si se encontro letra
	//si numletra es igual a 0 es que no esta la letra
	if(numletra!=0){
		for(var i=0;i<numletra;i++){
			for(var i=0;i<palabra.length;i++){
				if(palabra.charAt(i)==letra){
					posicion=i;
					arrdguiones[posicion]=letra;
				}
			}
		}
	}

	//ya esta con la letra encontrada en el arreglo, ahora sacamos el arreglo para devolverlo y dibujarlo
	var newdguiones="";

	for(var i=0;i<palabra.length;i++){
		newdguiones+=arrdguiones[i]+" ";
	}

	return newdguiones;
}

function bandletra(palabra,letra){
	var numletra=0;

	for(var i=0;i<palabra.length;i++){
		if(palabra.charAt(i)==letra){
			numletra++;
		}
	}

	return numletra;
}