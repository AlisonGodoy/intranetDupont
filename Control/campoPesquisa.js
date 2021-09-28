$(function(){
    $("#tabelaprincipal input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaprincipal td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaprincipal tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaprincipal input").blur(function(){
        $(this).val("");
    });
});

