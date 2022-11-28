    const modalT = document.querySelector("#modal");
    var stats = document.querySelector("#status");
    var regiao = document.querySelector("#regiao");
    var operacao = document.querySelector(".operacao");
    var carro = document.querySelector("#carroViagem");
    var notaFiscal = document.querySelector("#notaF");
    var cargaVinculada = document.querySelector("#cargaVin");
    var cargaSap = document.querySelector("#cargaSAP");
    var rota = document.querySelector("#rota");
    var valor = document.querySelector("#valor");
    var peso = document.querySelector("#peso");
    var quant = document.querySelector("#quant");

    var input = document.querySelectorAll('input');    
    var select = document.querySelectorAll('select');

    function limpar(){
        carro.value= ""
        notaFiscal.value= ""
        cargaVinculada.value= ""
        cargaSap.value= ""
        rota.value= ""
        valor.value= ""
        peso.value= ""
        quant.value= ""
    }

    
    //BLOQUEIOS   
     function bloqueio(){
        operacao.addEventListener("click", function(e){

            if (e.target.value == "0"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            cargaSap.setAttribute("disabled", ' ');
            carro.setAttribute("disabled", '');
            notaFiscal.setAttribute("disabled", '');
            cargaVinculada.setAttribute("disabled", '');
            rota.setAttribute("disabled", '');
            valor.setAttribute("disabled", '');
            peso.setAttribute("disabled", '');
            quant.setAttribute("disabled", '');
            regiao.setAttribute("disabled", '');
        }

        if (e.target.value == "1"){  
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            carro.setAttribute("disabled", '');
            notaFiscal.setAttribute("disabled", '');
            cargaVinculada.setAttribute("disabled", '');
        }

        if (e.target.value == "2"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            cargaSap.setAttribute("disabled", '');
            notaFiscal.setAttribute("disabled", '');
            cargaVinculada.setAttribute("disabled", '');
        }

        if (e.target.value == "3"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            cargaSap.setAttribute("disabled", '');
            carro.setAttribute("disabled", '');
            cargaVinculada.setAttribute("disabled", '');
            
        } 

        if (e.target.value == "4"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            carro.setAttribute("disabled", '');
        }  

        if (e.target.value == "5"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            cargaSap.setAttribute("disabled", '');
        }

        if (e.target.value == "6"){
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
            cargaSap.setAttribute("disabled", '');
            carro.setAttribute("disabled", '');
        }

        if (e.target.value == "7"){   
            limpar()
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
        }
    })
 }
    

    function closeModal(modal){
        modal.addEventListener("click", function(e){
        if (e.target.id == "botCancelar" || e.target.id == "botSalvar"){

            modal.classList.remove("mostrar");
            $("input").removeAttr('disabled')
            $("select").removeAttr('disabled')
        }
        })
    }


    function ModalCarga(){
        
        operacao.value = "0";
        stats.value = "1";
        regiao.value = "0";

        var modal = document.querySelector("#modalCriarCarga");
        modal.classList.add("mostrar");
        $("#carroViagem").mask("999/99999-999/99999");
        
        bloqueio();

        cargaSap.setAttribute("disabled", '');
        carro.setAttribute("disabled", '');
        notaFiscal.setAttribute("disabled", '');
        cargaVinculada.setAttribute("disabled", '');
        rota.setAttribute("disabled", '');
        valor.setAttribute("disabled", '');
        peso.setAttribute("disabled", '');
        quant.setAttribute("disabled", '');
        regiao.setAttribute("disabled", '');

        modalT.addEventListener("click", function(e){
            if (operacao.value == "1" || operacao.value == "4" || operacao.value == "7"){
                
                if (e.target.id == "carroViagem" || e.target.id == "notaF" || e.target.id == "cargaVin" || e.target.id == "rota"){                 
                    var n = cargaSap.value.length;
                    if (n > 10 || n < 10 && n > 0){
                        alert("Este campo deve possuir 10 caracteres")
                    };
                }   
            }

            if (operacao.value == "1"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operUM, .operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(cargaSap.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "2"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operDOIS, .operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(carroViagem.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "3"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operTRES, .operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(notaFiscal.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "4"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operQUATRO, . operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(cargaSap.value == "" || notaFiscal.value == "" || cargaVinculada.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "5"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operQUATRO, .operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(carroViagem.value == "" || notaFiscal.value == "" || cargaVinculada.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "6"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll(".operCINCO, .operT");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(notaFiscal.value == "" || cargaVinculada.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            if (operacao.value == "7"){
                $(document).ready( function(){

                var knapp = document.getElementById('botSalvar');

                knapp.disabled = true;

                //Validação dos campos obrigatórios - Start
                var elements = document.querySelectorAll("input");
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].addEventListener("change", function() {
                            if(cargaSap.value == "" || carroViagem.value == "" || notaFiscal.value == "" || cargaVinculada.value == "" || rota.value == "" || valor.value == "" || peso.value == "" || quant.value == "" || regiao.value == "0") {
                            knapp.disabled=true;
                            }else {
                            knapp.disabled=false;
                            }
                        });
                    }
                });
            }

            

            if (e.target.id == "botSalvar"){ 
                var n = cargaSap.value.length;
                if (n > 10 || n < 10){
                    alert("Este campo deve possuir 10 caracteres")
                }
                else if (n == 10 ){
                    modal.classList.remove("mostrar");
                    $("input").removeAttr('disabled')
                    $("select").removeAttr('disabled')
                }  
            }

            if (e.target.id == "botCancelar"){
                modal.classList.remove("mostrar");
                $("input").removeAttr('disabled');
                $("select").removeAttr('disabled');
                limpar(); 
            }   
        })   
    }

    function ModalOper(){

        const modal = document.querySelector("#modalOperacao");
        modal.classList.add("mostrar");

        closeModal(modal);
    }

    function ModalRegiao(){

        const modal = document.querySelector("#modalRegiao");
        modal.classList.add("mostrar");

        closeModal(modal);
    }

    function ModalStatus(){
         
        const modal = document.querySelector("#modalStatus");
        modal.classList.add("mostrar");

        closeModal(modal);
    }

    function ModalEditar(){
        
        const modal = document.querySelector("#modalEditar");
        modal.classList.add("mostrar");
        $("#carroViag").mask("999")
        $("#carroTransb").mask("999")
        
        bloqueio();

        closeModal(modal);
    }