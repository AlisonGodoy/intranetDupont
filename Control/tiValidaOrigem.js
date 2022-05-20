
$(document).ready( function(){

	var knapp = document.getElementById('criarOrigem');

 	knapp.disabled = true;

	var elements = document.querySelectorAll("#recipient-origem");
		for (var i = 0; i < elements.length; i++) {
  			elements[i].addEventListener("change", function() {
    			if(document.getElementById("recipient-origem").value == "") {
        		knapp.disabled=true;
    			}else {
        		knapp.disabled=false;
    			}
  			});
		}

	// Validação ao clicar em Cadastrar - Start
	$('#criarOrigem').click(function() {
		      
		$.ajax({
		        		
		    type:'GET',
		    url:"../Control/tiInsertOrigem?command=insert&origem="+$('#recipient-origem').val(),

		    success: function(data){
		    //console.log(data);
		    var meuJson = JSON.parse(data); //Monta o Json
		    //console.log(meuJson);
		    //console.log (meuJson.status);
			var st  = meuJson.status;		 					  
		 					  
           	if(st == true){
		        alert("Origem criada com sucesso");
			    window.location.href = "../View/tiCadastroSmarts.php";                   
		    }else{
		        alert("Origem não criada, confira os campos");
		    }

		    },error: function(request,status,error){
		        			 //console.log(error);
		    }

		});
			
	});
	// Validação ao clicar em Cadastrar - End
});

