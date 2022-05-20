
$(document).ready( function(){

	var knapp = document.getElementById('criarNovoSmart');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-modelo, #recipient-marca");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-modelo").value == "" || document.getElementById("recipient-marca").value == "") {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Cadastrar - Start
	$('#criarNovoSmart').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertNovoSmart?command=insert&modelo="+$('#recipient-modelo').val()+"&marca="+$('#recipient-marca').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Novo Smart criado com sucesso");
			    window.location.href = "../View/tiCadastroSmarts.php";                   
		    }else{
		        alert("Smart não criado, confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

