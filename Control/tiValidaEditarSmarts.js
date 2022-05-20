
$(document).ready( function(){

	var knapp = document.getElementById('editarSmart');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-imei, #recipient-pulsus");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-imei").value == "" || document.getElementById("recipient-pulsus").value == "") {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	//Validação da limitação da IMEI - Start	
	$(document).ready(function() {
  	$("#recipient-imei").keyup(function() {
      $("#recipient-imei").val(this.value.match(/[0-9]*/));
  		});
	});
	//Validação da limitação da IMEI - End

	// Validação ao clicar em Cadastrar - Start
	$('#editarSmart').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiUpdateSmart?command=insert&id="+$('#recipient-id').val()+"&imei="+$('#recipient-imei').val()+"&pulsus="+$('#recipient-pulsus').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Smart Editado com Sucesso");
			    window.location.href = "../View/tiControleSmarts.php";                   
		    }else{
		        alert("Smart Não Editado - confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

