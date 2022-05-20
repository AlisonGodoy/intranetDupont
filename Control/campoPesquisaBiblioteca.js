$(function(){
    $("#tabelaBiblioteca input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaBiblioteca td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaBiblioteca tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaBiblioteca input").blur(function(){
        $(this).val("");
    });
});

