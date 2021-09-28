//Declara variaveis para controle - Start
var tempo = 0
var mexeu = 0;
//Declara variaveis para controle - End

setInterval(function(){  //Realiza função de Intervalo
	tempo++;

	document.onmousemove = function(e){ // Realiza função ao mexer no mouse
		mexeu=1;
	}

	if(tempo == 74400){ //620 = 1min
		alert('Você foi Desconectado por Inatividade , Logue Novamente');
		window.location.href = ("http://localhost/intranetgd/Control/logout.php");
		tempo = 0;
		mexeu = 0;
	}
}, 100);