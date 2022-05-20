$(function(){
    $("#tabelaEstoqueZerado input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaEstoqueZerado td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaEstoqueZerado tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaEstoqueZerado input").blur(function(){
        $(this).val("");
    });
});
