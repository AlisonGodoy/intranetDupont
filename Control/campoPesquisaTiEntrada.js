$(function(){
    $("#tabelaEntradaTi input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaEntradaTi td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaEntradaTi tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaEntradaTi input").blur(function(){
        $(this).val("");
    });
});

