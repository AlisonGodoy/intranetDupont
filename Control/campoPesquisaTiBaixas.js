$(function(){
    $("#tabelaBaixaTi input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabelaBaixaTi td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        
        $("#tabelaBaixaTi tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabelaBaixaTi input").blur(function(){
        $(this).val("");
    });
});
