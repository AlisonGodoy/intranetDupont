
$(document).ready( function(){

	var knapp = document.getElementById('criarMotivo');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-motivo");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-motivo").value == "") {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Cadastrar - Start
	$('#criarMotivo').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertMotivo?command=insert&motivo="+$('#recipient-motivo').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Motivo criado com sucesso");
			    window.location.href = "../View/tiCadastroSmarts.php";                   
		    }else{
		        alert("Motivo não criado, confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

