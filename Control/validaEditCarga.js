

$(document).ready( function(){

	$('#voltar').click(function() {
	history.go(-1)
});


	var knapp = document.getElementById('editCarga');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipientE-tipo, #recipientE-status, #recipientE-regiao, #recipientE-cliente ");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-tipo").value == "" || document.getElementById("recipient-tipo").value == 0 || document.getElementById("recipient-status").value == "" || document.getElementById("recipient-status").value == 0 || document.getElementById("recipient-regiao").value == "" || document.getElementById("recipient-regiao").value == 0 || document.getElementById("recipient-cliente").value == "" || document.getElementById("recipient-cliente").value == 0 ) {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}
	// Validação ao clicar em Salvar - Start
	$('#updateCarga').click(function() {
		      

	$.ajax({
		        		
		        		type:'GET',
		        		url:"../Control/controleUpdateCarga?command=update&id_carga="+$('#recipientE-id').val()+"&id_tipo="+$('#recipientE-tipo').val()+"&carga_origem="+$('#recipientE-origem').val()+"&date_criacao="+$('#recipientE-criacao').val()+"&date_expedicao="+$('#recipientE-expedicao').val()+"&date_agendamento="+$('#recipientE-agendamento').val()+"&id_status="+$('#recipientE-status').val()+"&cliente_cidade="+$('#recipientE-cliente').val()+"&carga_nestle="+$('#recipientE-cargaNestle').val()+"&qtd_nestle="+$('#recipientE-qtdNestle').val()+"&peso_nestle="+$('#recipientE-pesoNestle').val()+"&valor_nestle="+$('#recipientE-valorNestle').val()+"&carga_vigor="+$('#recipientE-cargaVigor').val()+"&qtd_vigor="+$('#recipientE-qtdVigor').val()+"&peso_vigor="+$('#recipientE-pesoVigor').val()+"&valor_vigor="+$('#recipientE-valorVigor').val()+"&carga_atacado="+$('#recipientE-cargaAtacado').val()+"&qtd_atacado="+$('#recipientE-qtdAtacado').val()+"&peso_atacado="+$('#recipientE-pesoAtacado').val()+"&valor_atacado="+$('#recipientE-valorAtacado').val()+"&carga_italac="+$('#recipientE-cargaItalac').val()+"&qtd_italac="+$('#recipientE-qtdItalac').val()+"&peso_italac="+$('#recipientE-pesoItalac').val()+"&valor_italac="+$('#recipientE-valorItalac').val()+"&carga_pavioli="+$('#recipientE-cargaPavioli').val()+"&qtd_pavioli="+$('#recipientE-qtdPavioli').val()+"&peso_pavioli="+$('#recipientE-pesoPavioli').val()+"&valor_pavioli="+$('#recipientE-valorPavioli').val()+"&carga_log="+$('#recipientE-cargaPedroLog').val()+"&qtd_log="+$('#recipientE-qtdPedroLog').val()+"&peso_log="+$('#recipientE-pesoPedroLog').val()+"&valor_log="+$('#recipientE-valorPedroLog').val()+"&user_update="+$('#recipientE-idUpdate').val()+"&id_regiao="+$('#recipientE-regiao').val(),

		        		success: function(data){
		        			  //console.log(data);
		        			  var meuJson = JSON.parse(data); //Monta o Json
		                      //console.log(meuJson);
		                      //console.log (meuJson.status);
		 					  var st  = meuJson.status;		 					  
		 					  
		                      //console.log(st);
           					if(st == true){
		                     	alert("Carga Editada com Sucesso");
			    				history.go(-1)
		                     
		                     }else{

		                     	alert("Carga NÃO Editada - Confira os Campos Inseridos");
		                     }

		                      

		        		},error: function(request,status,error){

		        			 //console.log(error);
		        		}

		        });
			
	});
	// Validação ao clicar em Salvar - End
});

