$(function(){
    $("#tabelaControleTi input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaControleTi td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaControleTi tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaControleTi input").blur(function(){
        $(this).val("");
    });
});