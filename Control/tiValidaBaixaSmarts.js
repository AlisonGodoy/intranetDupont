
$(document).ready( function(){

	var knapp = document.getElementById('baixarSmart');
	
 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-baixa, #recipient-motivo");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-baixa").value == 0 || document.getElementById("recipient-motivo").value == 0 ) {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Baixar - Start
	$('#baixarSmart').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertUpdateBaixaSmart?command=insert&id_smart="+$('#recipient-id_smart').val()+"&id="+$('#recipient-baixa').val()+"&id_motivo="+$('#recipient-motivo').val()+"&destino="+$('#recipient-destino').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Smart Baixado com Sucesso");
			    window.location.href = "../View/tiEstoqueSmarts.php";                   
		    }else{
		        alert("Smart Não Baixado - confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Baixar - End
});

