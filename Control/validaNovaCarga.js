
$(document).ready( function(){

	//$('#novaCarga').hide();

	$('#insertCarga').click(function() { 
		$('#novaCarga').show();
	});

	var knapp = document.getElementById('criarCarga');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-tipo, #recipient-status, #recipient-regiao, #recipient-cliente ");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-tipo").value == "" || document.getElementById("recipient-tipo").value == 0 || document.getElementById("recipient-status").value == "" || document.getElementById("recipient-status").value == 0 || document.getElementById("recipient-regiao").value == "" || document.getElementById("recipient-regiao").value == 0 || document.getElementById("recipient-cliente").value == "" || document.getElementById("recipient-cliente").value == 0 ) {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Nova Carga - Start
	$('#criarCarga').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"http://localhost/intranetgd/Control/controleInsertCarga?command=insert&id_tipo="+$('#recipient-tipo').val()+"&carga_origem="+$('#recipient-origem').val()+"&date_criacao="+$('#recipient-criacao').val()+"&date_expedicao="+$('#recipient-expedicao').val()+"&date_agendamento="+$('#recipient-agendamento').val()+"&id_status="+$('#recipient-status').val()+"&cliente_cidade="+$('#recipient-cliente').val()+"&carga_nestle="+$('#recipient-cargaNestle').val()+"&qtd_nestle="+$('#recipient-qtdNestle').val()+"&peso_nestle="+$('#recipient-pesoNestle').val()+"&valor_nestle="+$('#recipient-valorNestle').val()+"&carga_vigor="+$('#recipient-cargaVigor').val()+"&qtd_vigor="+$('#recipient-qtdVigor').val()+"&peso_vigor="+$('#recipient-pesoVigor').val()+"&valor_vigor="+$('#recipient-valorVigor').val()+"&carga_atacado="+$('#recipient-cargaAtacado').val()+"&qtd_atacado="+$('#recipient-qtdAtacado').val()+"&peso_atacado="+$('#recipient-pesoAtacado').val()+"&valor_atacado="+$('#recipient-valorAtacado').val()+"&carga_italac="+$('#recipient-cargaItalac').val()+"&qtd_italac="+$('#recipient-qtdItalac').val()+"&peso_italac="+$('#recipient-pesoItalac').val()+"&valor_italac="+$('#recipient-valorItalac').val()+"&carga_pavioli="+$('#recipient-cargaPavioli').val()+"&qtd_pavioli="+$('#recipient-qtdPavioli').val()+"&peso_pavioli="+$('#recipient-pesoPavioli').val()+"&valor_pavioli="+$('#recipient-valorPavioli').val()+"&carga_log="+$('#recipient-cargaPedroLog').val()+"&qtd_log="+$('#recipient-qtdPedroLog').val()+"&peso_log="+$('#recipient-pesoPedroLog').val()+"&valor_log="+$('#recipient-valorPedroLog').val()+"&user_create="+$('#recipient-IdUser').val()+"&id_regiao="+$('#recipient-regiao').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Carga Cadastrada com Sucesso");
			    location.reload()                   
		    }else{
		        alert("Carga NÃO Cadastrada - Confira os Campos Inseridos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Nova Carga - End
});

