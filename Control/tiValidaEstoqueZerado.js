
$(document).ready( function(){

	var knapp = document.getElementById('criarEstoqueZerado');

 	knapp.disabled = true;

 	//Validação dos campos obrigatórios - Start
	var elements = document.querySelectorAll("#recipient-imei, #recipient-origem");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-imei").value == "" || document.getElementById("recipient-origem").value == 0 ) {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}
	//Validação dos campos obrigatórios - End

	//Validação da limitação da IMEI - Start	
	$(document).ready(function() {
  	$("#recipient-imei").keyup(function() {
      $("#recipient-imei").val(this.value.match(/[0-9]*/));
  		});
	});
	//Validação da limitação da IMEI - End
		
	// Validação ao clicar em Cadastrar - Start
	$('#criarEstoqueZerado').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertZerado?command=insert&id="+$('#recipient-id_smart').val()+"&imei="+$('#recipient-imei').val()+"&pulsus="+$('#recipient-pulsus').val()+"&id_origem="+$('#recipient-origem').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Smart Cadastrado com Sucesso");
			    window.location.href = "../View/tiEstoqueSmarts.php";                   
		    }else{
		        alert("Smart Não Cadastrado - confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

