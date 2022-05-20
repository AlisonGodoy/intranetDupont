
$(document).ready( function(){

	var knapp = document.getElementById('criarModelo');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-modelo");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-modelo").value == "") {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Cadastrar - Start
	$('#criarModelo').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertModelo?command=insert&modelo="+$('#recipient-modelo').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Modelo criado com sucesso");
			    window.location.href = "../View/tiCadastroSmarts.php";                   
		    }else{
		        alert("Modelo não criado, confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

