$(function(){
    $("#tabelaEstoqueTi input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaEstoqueTi td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaEstoqueTi tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaEstoqueTi input").blur(function(){
        $(this).val("");
    });
});

