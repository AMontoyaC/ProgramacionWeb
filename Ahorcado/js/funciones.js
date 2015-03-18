$(document).ready(function(){

	var rutaicono;
	
	//2jugadores
	var pal1;
	var jug1;
	var pal2;
	var jug2;
	var b=0;
	var puntos1jug=200;
	var puntos2jug=200;
	var contahorcado2=0;
	var numjugen2jug=1;

	//1jug
	var padivinar;
	//0 si no gano y 1 si ya gano
	var vgano=0;


	$('#icono').hide();
	$('#titulo').hide();
	$('#menu').hide();
	$('#ayuda').hide();
	$('#creditos').hide();
	$('#opciones').hide();
	$('#cambiaricono').hide();

	$('#a12jugadores').hide();
	$('#2jugadores').hide();
	$('#2jugadores2').hide();
	$('#t2jug').hide();
	$('#a22jugadores').hide();
	$('#a32jugadores').hide();
	$('#a42jugadores').hide();
	$('#resultados2jug').hide();

	$('#agregarpalabra').hide();
	$('#categorias').hide();
	$('#t1jug').hide();
	$('#ganaste').hide();
	$('#perdiste').hide();

	//ocultar cuerpo
	$('#t1jugicono').hide();
	$('#t1jugcuerpo').hide();
	$('#t1jugbizq').hide();
	$('#t1jugbder').hide();
	$('#t1jugpizq').hide();
	$('#t1jugpder').hide();

	//ocultar cuerpo 2jug
	$('#t2jugicono').hide();
	$('#t2jugcuerpo').hide();
	$('#t2jugbizq').hide();
	$('#t2jugbder').hide();
	$('#t2jugpizq').hide();
	$('#t2jugpder').hide();


	//1jug
	var nguiones;
	var dguiones;
	var banderaletra;
	var contahorcado=0;
	var puntos=200;

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
		$('#a12jugadores').show();
		reiniciar2();
		numjugen2jug=1;
		document.getElementById('puntos2').innerHTML =200;
		document.jug2.pal2.value="";
		document.jug1.pal1.value="";
		document.jug2.nomjug2.value="";
		document.jug1.nomjug1.value="";

	});

	$('#a1sig').click(function(){
		$('#a12jugadores').hide();
		$('#2jugadores').show();
	});

	$('#a3sig').click(function(){
		$('#a32jugadores').hide();
		$('#2jugadores2').show();
	});

	$('#formjug1_menu').click(function(){
		$('#menu').show();
		$('#2jugadores').hide();
	});

	$('#formjug2_menu').click(function(){
		$('#menu').show();
		$('#2jugadores').hide();
	});

	$('#t2jug_menu').click(function(){
		$('#menu').show();
		$('#t2jug').hide();
	});

	$('#r2_menu').click(function(){
		$('#menu').show();
		$('#resultados2jug').hide();
	});

	$('#listo1').click(function(){
		pal1 = document.jug1.pal1.value;
		jug1 = document.jug1.nomjug1.value;
		if(pal1!=null){
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
	   				alert("Tiene caracteres especiales y/o mayusculas");
	   				document.jug1.pal1.value="";
	   			}
	   			else{
	   				//alert("ALL GOOD");
	   				$('#2jugadores').hide();
	   				$('#a22jugadores').show();
	   			}
			}
		}
		else{
			alert("NO hay palabra!");
		}
	});

	$('#listo22').click(function(){
		pal2 = document.jug2.pal2.value;
		jug2 = document.jug2.nomjug2.value;
		if(pal2!=null){
			if(pal2.length>10){
				$('#icono').hide();
				$('#titulo').hide();
				$('#menu').hide();
				alert("Palabra mayor a 10 caracteres");
				document.jug2.pal2.value="";
			}
			else{
	   			var v=tiene_numeros(pal2);

	   			if(v==1){
	   				alert("Tiene caracteres especiales y/o mayusculas");
	   				document.jug2.pal2.value="";
	   			}
	   			else{
	   				//alert("ALL GOOD");
	   				$('#2jugadores2').hide();
	   				$('#a42jugadores').show();
	   			}
			}
		}
		else{
			alert("NO hay palabra!");
		}
	});

	$('#a2sig').click(function(){
		$('#a22jugadores').hide();
		$('#t2jug').show();
		padivinar=pal1;
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones2').text(dguiones);
	});

	$('#a4sig').click(function(){
		reiniciar2();
		$('#a42jugadores').hide();
		$('#t2jug').show();
		padivinar=pal2;
		nguiones=num_guiones(padivinar);
		dguiones=dib_guiones(nguiones);
		$('#guiones2').text(dguiones);
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
	});

	$('#g_menu').click(reiniciar);
	$('#p_menu').click(reiniciar);

	function reiniciar(){
		document.getElementById("la").disabled=false;
		document.getElementById("la").style.color = "#FFFFFF";
		document.getElementById("lb").disabled=false;
		document.getElementById("lb").style.color = "#FFFFFF";
		document.getElementById("lc").disabled=false;
		document.getElementById("lc").style.color = "#FFFFFF";
		document.getElementById("ld").disabled=false;
		document.getElementById("ld").style.color = "#FFFFFF";
		document.getElementById("le").disabled=false;
		document.getElementById("le").style.color = "#FFFFFF";
		document.getElementById("lf").disabled=false;
		document.getElementById("lf").style.color = "#FFFFFF";
		document.getElementById("lg").disabled=false;
		document.getElementById("lg").style.color = "#FFFFFF";
		document.getElementById("lh").disabled=false;
		document.getElementById("lh").style.color = "#FFFFFF";
		document.getElementById("li").disabled=false;
		document.getElementById("li").style.color = "#FFFFFF";
		document.getElementById("lj").disabled=false;
		document.getElementById("lj").style.color = "#FFFFFF";
		document.getElementById("lk").disabled=false;
		document.getElementById("lk").style.color = "#FFFFFF";
		document.getElementById("ll").disabled=false;
		document.getElementById("ll").style.color = "#FFFFFF";
		document.getElementById("lm").disabled=false;
		document.getElementById("lm").style.color = "#FFFFFF";
		document.getElementById("ln").disabled=false;
		document.getElementById("ln").style.color = "#FFFFFF";
		document.getElementById("lñ").disabled=false;
		document.getElementById("lñ").style.color = "#FFFFFF";
		document.getElementById("lo").disabled=false;
		document.getElementById("lo").style.color = "#FFFFFF";
		document.getElementById("lp").disabled=false;
		document.getElementById("lp").style.color = "#FFFFFF";
		document.getElementById("lq").disabled=false;
		document.getElementById("lq").style.color = "#FFFFFF";
		document.getElementById("lr").disabled=false;
		document.getElementById("lr").style.color = "#FFFFFF";
		document.getElementById("ls").disabled=false;
		document.getElementById("ls").style.color = "#FFFFFF";
		document.getElementById("lt").disabled=false;
		document.getElementById("lt").style.color = "#FFFFFF";
		document.getElementById("lu").disabled=false;
		document.getElementById("lu").style.color = "#FFFFFF";
		document.getElementById("lv").disabled=false;
		document.getElementById("lv").style.color = "#FFFFFF";
		document.getElementById("lw").disabled=false;
		document.getElementById("lw").style.color = "#FFFFFF";
		document.getElementById("lx").disabled=false;
		document.getElementById("lx").style.color = "#FFFFFF";
		document.getElementById("ly").disabled=false;
		document.getElementById("ly").style.color = "#FFFFFF";
		document.getElementById("lz").disabled=false;
		document.getElementById("lz").style.color = "#FFFFFF";
		puntos=200;
		document.getElementById('puntos').innerHTML =puntos;
		$('#menu').show();
		$('#ganaste').hide();
		$('#perdiste').hide();
		$('#t1jugicono').hide();
		$('#t1jugcuerpo').hide();
		$('#t1jugbizq').hide();
		$('#t1jugbder').hide();
		$('#t1jugpizq').hide();
		$('#t1jugpder').hide();
		contahorcado=0;
	}

	function reiniciar2(){
		document.getElementById("la2").disabled=false;
		document.getElementById("la2").style.color = "#FFFFFF";
		document.getElementById("lb2").disabled=false;
		document.getElementById("lb2").style.color = "#FFFFFF";
		document.getElementById("lc2").disabled=false;
		document.getElementById("lc2").style.color = "#FFFFFF";
		document.getElementById("ld2").disabled=false;
		document.getElementById("ld2").style.color = "#FFFFFF";
		document.getElementById("le2").disabled=false;
		document.getElementById("le2").style.color = "#FFFFFF";
		document.getElementById("lf2").disabled=false;
		document.getElementById("lf2").style.color = "#FFFFFF";
		document.getElementById("lg2").disabled=false;
		document.getElementById("lg2").style.color = "#FFFFFF";
		document.getElementById("lh2").disabled=false;
		document.getElementById("lh2").style.color = "#FFFFFF";
		document.getElementById("li2").disabled=false;
		document.getElementById("li2").style.color = "#FFFFFF";
		document.getElementById("lj2").disabled=false;
		document.getElementById("lj2").style.color = "#FFFFFF";
		document.getElementById("lk2").disabled=false;
		document.getElementById("lk2").style.color = "#FFFFFF";
		document.getElementById("ll2").disabled=false;
		document.getElementById("ll2").style.color = "#FFFFFF";
		document.getElementById("lm2").disabled=false;
		document.getElementById("lm2").style.color = "#FFFFFF";
		document.getElementById("ln2").disabled=false;
		document.getElementById("ln2").style.color = "#FFFFFF";
		document.getElementById("lñ2").disabled=false;
		document.getElementById("lñ2").style.color = "#FFFFFF";
		document.getElementById("lo2").disabled=false;
		document.getElementById("lo2").style.color = "#FFFFFF";
		document.getElementById("lp2").disabled=false;
		document.getElementById("lp2").style.color = "#FFFFFF";
		document.getElementById("lq2").disabled=false;
		document.getElementById("lq2").style.color = "#FFFFFF";
		document.getElementById("lr2").disabled=false;
		document.getElementById("lr2").style.color = "#FFFFFF";
		document.getElementById("ls2").disabled=false;
		document.getElementById("ls2").style.color = "#FFFFFF";
		document.getElementById("lt2").disabled=false;
		document.getElementById("lt2").style.color = "#FFFFFF";
		document.getElementById("lu2").disabled=false;
		document.getElementById("lu2").style.color = "#FFFFFF";
		document.getElementById("lv2").disabled=false;
		document.getElementById("lv2").style.color = "#FFFFFF";
		document.getElementById("lw2").disabled=false;
		document.getElementById("lw2").style.color = "#FFFFFF";
		document.getElementById("lx2").disabled=false;
		document.getElementById("lx2").style.color = "#FFFFFF";
		document.getElementById("ly2").disabled=false;
		document.getElementById("ly2").style.color = "#FFFFFF";
		document.getElementById("lz2").disabled=false;
		document.getElementById("lz2").style.color = "#FFFFFF";
		$('#t2jugicono').hide();
		$('#t2jugcuerpo').hide();
		$('#t2jugbizq').hide();
		$('#t2jugbder').hide();
		$('#t2jugpizq').hide();
		$('#t2jugpder').hide();
		contahorcado2=0;
	}

	function letra(let){
		banderaletra=bandletra(padivinar,let);
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,let,dguiones);
			dguiones=ndg;
			$('#guiones').text("");		
			$('#guiones').text(dguiones);
			puntos=puntos+10;
			document.getElementById('puntos').innerHTML =puntos;
			
			//saber si gano
			vgano=gano(dguiones,padivinar);

			//GANADOR
			if(vgano==1){
				//alert("ganaste!");
				$('#t1jug').hide();
				$('#ganaste').show();

				$('#gpuntos').text(puntos);

				//////////////////////CONFETI
				var c = document.getElementById('c'),
			    ctx = c.getContext('2d'),
			    cw = window.innerWidth,
			    ch = window.innerHeight;
				c.width = cw;
				c.height = ch;
				var rand = function(a,b){return ~~((Math.random()*(b-a+1))+a);}

				var particles = [],
				particlesPerTeam = 40,
			    maxVelocity = 3,
			    teams = [];
			    teamCount = 12;
				var ti;

			    for(ti = 0; ti < teamCount; ti++){
			      teams.push({
			        team: ti,
			        color: 'hsla('+((360/teamCount)*ti)+', 90%, 50%, .8)',
			        attracts: ti,
			        repels: (ti === teamCount-1) ? 0 : ti+1
			      });
			    }

				var Particle = function(x, y, vx, vy, radius, team){
					this.x = x;
					this.y = y;
					this.vx = vx;
					this.vy = vy;
					this.radius = radius;
					this.team = team;
				}

				var createParticles = function(){
					var i = teams.length;
					while(i--){
				  		var i2 = particlesPerTeam;
					  	while(i2--){
					      particles.push(new Particle(
					        cw/2,
					        ch/2,
					      	rand(-1000, 1000)/1000,
					      	rand(-1000, 1000)/1000,
					      	rand(1, 6)/2,
					      	i      		
					      ));
						}
			  		}
				}
			    
				var updateParticles = function(){
					var i = particles.length;
			  		while(i--){
			    		var p = particles[i];
						var i2 = particles.length;
						while(i2--){
				      		if(i != i2){
						        var p2 = particles[i2];
						        var dx = p2.x - p.x;
						        var dy = p2.y - p.y;
						        var dist = Math.sqrt(dx * dx + dy * dy);
						        if(dist <= 100){       
						          if(p.team == teams[p2.team].attracts){
						            p.vx += dx/(30000*p2.radius);
						            p.vy += dy/(30000*p2.radius);
						          } 
						          else if(p.team == teams[p2.team].repels){
						            p.vx -= dx/(55000*p2.radius);
						            p.vy -= dy/(55000*p2.radius);
						          }
						        }
			      			}
						}
						capVelocity(p);
						p.x += p.vx;
						p.y += p.vy;
						loopBounds(p);
			  		}   
				}
			    
				var renderParticles = function(){
			  		var i = particles.length;  
			  		while(i--){
					    var p = particles[i];
					    ctx.fillStyle = teams[p.team].color;
					    ctx.beginPath();
					    ctx.arc(p.x, p.y, p.radius, 0, Math.PI *2, false);
					    ctx.closePath();
					    ctx.fill();
			  		}   
				}

				var loopBounds = function(p){
				  if(p.y < -p.radius){
				    p.y = ch + p.radius;
				  }
				  if(p.x > cw + p.radius){
				    p.x = -p.radius;
				  }
				  if(p.y > ch + p.radius){
				    p.y = -p.radius;
				  }		
				  if(p.x < -p.radius){
				    p.x = cw + p.radius;
				  }
				}
			    
				var capVelocity = function(p){
					 if(p.vx > maxVelocity){
				      p.vx = maxVelocity;
				   }
				  if(p.vx < -maxVelocity){
				      p.vx = -maxVelocity;
				   }
				  if(p.vy > maxVelocity){
				      p.vy = maxVelocity;
				   }
				  if(p.vy < -maxVelocity){
				      p.vy = -maxVelocity;
				   }
				}
			    
				var eraseIt = function(){  
				  ctx.globalCompositeOperation = 'destination-out';
				  ctx.fillStyle = 'rgba(0, 0, 0, .3)';
				  ctx.fillRect(0, 0, cw, ch);
				  ctx.globalCompositeOperation = 'lighter';
				}
			    
				var loopsIDidItAgain = function(){
				  	eraseIt();  
					updateParticles();  
				  	renderParticles();
				}

			createParticles();
			setInterval(loopsIDidItAgain, 16);
				//////////////////////////////////
			}
			
		}
		if(banderaletra==0){
			contahorcado++;
			puntos=puntos-20;
			document.getElementById('puntos').innerHTML =puntos;

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
			//alert("perdiste :(");
			$('#t1jug').hide();
			$('#perdiste').show();

			$('#ppuntos').text(puntos);
		}
	}

	//botones letras
	$('#la').click(function(){
		document.getElementById("la").disabled=true;
		document.getElementById("la").style.color = "#ff0000";
		letra("a");
	});
	$('#lb').click(function(){
		document.getElementById("lb").disabled=true;
		document.getElementById("lb").style.color = "#ff0000";
		letra("b");
	});
	$('#lc').click(function(){
		document.getElementById("lc").disabled=true;
		document.getElementById("lc").style.color = "#ff0000";
		letra("c");
	});
	$('#ld').click(function(){
		document.getElementById("ld").disabled=true;
		document.getElementById("ld").style.color = "#ff0000";
		letra("d");
	});
	$('#le').click(function(){
		document.getElementById("le").disabled=true;
		document.getElementById("le").style.color = "#ff0000";
		letra("e");
	});
	$('#lf').click(function(){
		document.getElementById("lf").disabled=true;
		document.getElementById("lf").style.color = "#ff0000";
		letra("f");
	});
	$('#lg').click(function(){
		document.getElementById("lg").disabled=true;
		document.getElementById("lg").style.color = "#ff0000";
		letra("g");
	});
	$('#lh').click(function(){
		document.getElementById("lh").disabled=true;
		document.getElementById("lh").style.color = "#ff0000";
		letra("h");
	});
	$('#li').click(function(){
		document.getElementById("li").disabled=true;
		document.getElementById("li").style.color = "#ff0000";
		letra("i");
	});
	$('#lj').click(function(){
		document.getElementById("lj").disabled=true;
		document.getElementById("lj").style.color = "#ff0000";
		letra("j");
	});
	$('#lk').click(function(){
		document.getElementById("lk").disabled=true;
		document.getElementById("lk").style.color = "#ff0000";
		letra("k");
	});
	$('#ll').click(function(){
		document.getElementById("ll").disabled=true;
		document.getElementById("ll").style.color = "#ff0000";
		letra("l");
	});
	$('#lm').click(function(){
		document.getElementById("lm").disabled=true;
		document.getElementById("lm").style.color = "#ff0000";
		letra("m");
	});
	$('#ln').click(function(){
		document.getElementById("ln").disabled=true;
		document.getElementById("ln").style.color = "#ff0000";
		letra("n");
	});
	$('#lñ').click(function(){
		document.getElementById("lñ").disabled=true;
		document.getElementById("lñ").style.color = "#ff0000";
		letra("ñ");
	});
	$('#lo').click(function(){
		document.getElementById("lo").disabled=true;
		document.getElementById("lo").style.color = "#ff0000";
		letra("o");
	});
	$('#lp').click(function(){
		document.getElementById("lp").disabled=true;
		document.getElementById("lp").style.color = "#ff0000";
		letra("p");
	});
	$('#lq').click(function(){
		document.getElementById("lq").disabled=true;
		document.getElementById("lq").style.color = "#ff0000";
		letra("q");
	});
	$('#lr').click(function(){
		document.getElementById("lr").disabled=true;
		document.getElementById("lr").style.color = "#ff0000";
		letra("r");
	});
	$('#ls').click(function(){
		document.getElementById("ls").disabled=true;
		document.getElementById("ls").style.color = "#ff0000";
		letra("s");
	});
	$('#lt').click(function(){
		document.getElementById("lt").disabled=true;
		document.getElementById("lt").style.color = "#ff0000";
		letra("t");
	});
	$('#lu').click(function(){
		document.getElementById("lu").disabled=true;
		document.getElementById("lu").style.color = "#ff0000";
		letra("u");
	});
	$('#lv').click(function(){
		document.getElementById("lv").disabled=true;
		document.getElementById("lv").style.color = "#ff0000";
		letra("v");
	});
	$('#lw').click(function(){
		document.getElementById("lw").disabled=true;
		document.getElementById("lw").style.color = "#ff0000";
		letra("w");
	});
	$('#lx').click(function(){
		document.getElementById("lx").disabled=true;
		document.getElementById("lx").style.color = "#ff0000";
		letra("x");
	});
	$('#ly').click(function(){
		document.getElementById("ly").disabled=true;
		document.getElementById("ly").style.color = "#ff0000";
		letra("y");
	});
	$('#lz').click(function(){
		document.getElementById("lz").disabled=true;
		document.getElementById("lz").style.color = "#ff0000";
		letra("z");
	});


	//jugadores2 botones
	//botones letras
	$('#la2').click(function(){
		document.getElementById("la2").disabled=true;
		document.getElementById("la2").style.color = "#ff0000";
		letra2("a");
	});
	$('#lb2').click(function(){
		document.getElementById("lb2").disabled=true;
		document.getElementById("lb2").style.color = "#ff0000";
		letra2("b");
	});
	$('#lc2').click(function(){
		document.getElementById("lc2").disabled=true;
		document.getElementById("lc2").style.color = "#ff0000";
		letra2("c");
	});
	$('#ld2').click(function(){
		document.getElementById("ld2").disabled=true;
		document.getElementById("ld2").style.color = "#ff0000";
		letra2("d");
	});
	$('#le2').click(function(){
		document.getElementById("le2").disabled=true;
		document.getElementById("le2").style.color = "#ff0000";
		letra2("e");
	});
	$('#lf2').click(function(){
		document.getElementById("lf2").disabled=true;
		document.getElementById("lf2").style.color = "#ff0000";
		letra2("f");
	});
	$('#lg2').click(function(){
		document.getElementById("lg2").disabled=true;
		document.getElementById("lg2").style.color = "#ff0000";
		letra2("g");
	});
	$('#lh2').click(function(){
		document.getElementById("lh2").disabled=true;
		document.getElementById("lh2").style.color = "#ff0000";
		letra2("h");
	});
	$('#li2').click(function(){
		document.getElementById("li2").disabled=true;
		document.getElementById("li2").style.color = "#ff0000";
		letra2("i");
	});
	$('#lj2').click(function(){
		document.getElementById("lj2").disabled=true;
		document.getElementById("lj2").style.color = "#ff0000";
		letra2("j");
	});
	$('#lk2').click(function(){
		document.getElementById("lk2").disabled=true;
		document.getElementById("lk2").style.color = "#ff0000";
		letra2("k");
	});
	$('#ll2').click(function(){
		document.getElementById("ll2").disabled=true;
		document.getElementById("ll2").style.color = "#ff0000";
		letra2("l");
	});
	$('#lm2').click(function(){
		document.getElementById("lm2").disabled=true;
		document.getElementById("lm2").style.color = "#ff0000";
		letra2("m");
	});
	$('#ln2').click(function(){
		document.getElementById("ln2").disabled=true;
		document.getElementById("ln2").style.color = "#ff0000";
		letra2("n");
	});
	$('#lñ2').click(function(){
		document.getElementById("lñ2").disabled=true;
		document.getElementById("lñ2").style.color = "#ff0000";
		letra2("ñ");
	});
	$('#lo2').click(function(){
		document.getElementById("lo2").disabled=true;
		document.getElementById("lo2").style.color = "#ff0000";
		letra2("o");
	});
	$('#lp2').click(function(){
		document.getElementById("lp2").disabled=true;
		document.getElementById("lp2").style.color = "#ff0000";
		letra2("p");
	});
	$('#lq2').click(function(){
		document.getElementById("lq2").disabled=true;
		document.getElementById("lq2").style.color = "#ff0000";
		letra2("q");
	});
	$('#lr2').click(function(){
		document.getElementById("lr2").disabled=true;
		document.getElementById("lr2").style.color = "#ff0000";
		letra2("r");
	});
	$('#ls2').click(function(){
		document.getElementById("ls2").disabled=true;
		document.getElementById("ls2").style.color = "#ff0000";
		letra2("s");
	});
	$('#lt2').click(function(){
		document.getElementById("lt2").disabled=true;
		document.getElementById("lt2").style.color = "#ff0000";
		letra2("t");
	});
	$('#lu2').click(function(){
		document.getElementById("lu2").disabled=true;
		document.getElementById("lu2").style.color = "#ff0000";
		letra2("u");
	});
	$('#lv2').click(function(){
		document.getElementById("lv2").disabled=true;
		document.getElementById("lv2").style.color = "#ff0000";
		letra2("v");
	});
	$('#lw2').click(function(){
		document.getElementById("lw2").disabled=true;
		document.getElementById("lw2").style.color = "#ff0000";
		letra2("w");
	});
	$('#lx2').click(function(){
		document.getElementById("lx2").disabled=true;
		document.getElementById("lx2").style.color = "#ff0000";
		letra2("x");
	});
	$('#ly2').click(function(){
		document.getElementById("ly2").disabled=true;
		document.getElementById("ly2").style.color = "#ff0000";
		letra2("y");
	});
	$('#lz2').click(function(){
		document.getElementById("lz2").disabled=true;
		document.getElementById("lz2").style.color = "#ff0000";
		letra2("z");
	});


	//letra 2 jug
	function letra2(let){
		banderaletra=bandletra(padivinar,let);
		
		if(banderaletra!=0){
			//encontrar lugar de la letra
			var ndg;
			ndg=buscar(padivinar,let,dguiones);
			dguiones=ndg;
			$('#guiones2').text("");		
			$('#guiones2').text(dguiones);

			if(numjugen2jug==1){
				puntos1jug=puntos1jug+10;
				document.getElementById('puntos2').innerHTML =puntos1jug;
			}
			else{
				puntos2jug=puntos2jug+10;
				document.getElementById('puntos2').innerHTML =puntos2jug;
			}
			
			//saber si gano
			vgano=gano(dguiones,padivinar);

			//GANADOR
			if(vgano==1){
				if(numjugen2jug==1){
					$('#t2jug').hide();
					$('#a32jugadores').show();
					numjugen2jug=2;
					document.getElementById('puntos2').innerHTML =200;
				}
				else{
					//alert("finish 1");
					$('#t2jug').hide();
					$('#lbl1').text(jug1);
					$('#lbl2').text(jug2);
					$('#p11').text(puntos2jug);
					$('#p2').text(puntos1jug);
					$('#resultados2jug').show();
				}
			}
			
		}
		if(banderaletra==0){
			contahorcado2++;

			if(numjugen2jug==1){
				puntos1jug=puntos1jug-20;
				document.getElementById('puntos2').innerHTML =puntos1jug;
			}
			else{
				puntos2jug=puntos2jug-20;
				document.getElementById('puntos2').innerHTML =puntos2jug;
			}

			switch (contahorcado2){
				case 1:
					$('#t2jugicono').show();
					break;
				case 2:
					$('#t2jugcuerpo').show();
					break;
				case 3:
					$('#t2jugbizq').show();
					break;
				case 4:
					$('#t2jugbder').show();
					break;
				case 5:
					$('#t2jugpizq').show();
					break;
				case 6:
					$('#t2jugpder').show();
					break;
			}
		}

		if(contahorcado2==6){
			if(numjugen2jug==1){
				$('#t2jug').hide();
				$('#a32jugadores').show();
				numjugen2jug=2;
				document.getElementById('puntos2').innerHTML =200;
			}
			else{
				//alert("finish 2");
				$('#t2jug').hide();
				$('#lbl1').text(jug1);
				$('#lbl2').text(jug2);
				$('#p11').text(puntos2jug);
				$('#p2').text(puntos1jug);
				$('#resultados2jug').show();
			}
		}
	}

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


var numeros="0123456789|°¬!#$%&/()=?'+*~´¨{[^}]`-_:.;,ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

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

var paisesyciudades = ["mexico","celaya","berlin","londres","belgica","dublin","texas","paris"
				,"brasil","guanajuato","irlanda","china","dubai","inglaterra","rusia"
				,"alemania","francia","argentina","croacia","ecuador"];

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
					,"pinocho","olaf","homero","rapunzel","sulley","bart","daisy","piolin"
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


function gano(dguiones,palabra){
	vg=0;

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

	//sacar palabra del arreglo
	var p1="";

	for(var i=0;i<palabra.length;i++){
		p1+=arrdguiones[i];
	}

	if(p1==palabra){
		vg=1;
	}

	return vg;
}
