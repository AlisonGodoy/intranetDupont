
$(document).ready(function() {

  // Validação para Inputs type TEXT GERAL - START 
  $('#tabelaprincipal tbody tr td.editavel').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }
      var conteudoOriginal = $(this).text(); //busca o conteudo que está na /td
      var novoElemento = $('<input/>', { //cria novo objeto <input> dentro da td mencionada
        type: 'text',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) { //inicia a funcao que valida entradas do usuario
        var keyCode = e.which;
        var conteudoNovo = $(this).val();

        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index()); //pega o número da coluna que foi a alteracao

          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(), //envia por GET o valor da coluna ID oculta 
              campo: coluna, //envia o número da coluna que foi alterada
              valor: conteudoNovo //envia o valor da td que foi alterada
            },
            success: function(result) {
              objeto.parent().html(conteudoNovo); //tranforma a td de acordo o novo valor do usuario
              $('body').append(result);
            }
          })

        }else if (keyCode == 27 || e.type == 'blur'){ //ao clicar ESC, volta o valor original que estava na td
          $(this).parent().html(conteudoOriginal);
          }
      }));

      $(this).children().select();
    });
  // Validação para Inputs type TEXT GERAL - END

  // Validação para Inputs type TEXT CARRO VIAGEM - START 
  $('#tabelaprincipal tbody tr td.editavelCarroViagem').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }
      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'text',
        placeholder: 'ccc/vvvvv-ccc/vvvvv',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();

        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index());

          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: coluna,
              valor: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovo);
              $('body').append(result);
            }
          })
        }else if (keyCode == 27 || e.type == 'blur'){
          $(this).parent().html(conteudoOriginal);

        }
      }));
      $(this).children().select();
    });
  // Validação para Inputs type TEXT CARRO VIAGEM - END

  // Validação para Inputs type NUMBER SAP - START
  $('#tabelaprincipal tbody tr td.editavelNumberSAP').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }

      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'number',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();
        var n = conteudoNovo.length; //conta quantos caracteres possui, para validar no if abaixo

        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal && n == 10) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index());
          
          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: coluna,
              valor: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovo);
              $('body').append(result);
              
            }
          })
        }else if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal && n != 10){
          alert("Este campo deve possuir 10 caracteres");

        }else if (keyCode == 27 || e.type == 'blur'){
          $(this).parent().html(conteudoOriginal);

        }
      }));
      $(this).children().select();
    });
  // Validação para Inputs type NUMBER SAP - END

    // Validação para Inputs type NUMBER CARRO - START
  $('#tabelaprincipal tbody tr td.editavelNumberCarro').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }

      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'number',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();
        var n = conteudoNovo.length;

        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal && n == 3) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index());
          console.log(this);
          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: coluna,
              valor: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovo);
              $('body').append(result);
              location.reload(true);
            }
          })
        }else if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal && n != 3){

          alert("Este campo deve possuir 3 caracteres");

        }else if (keyCode == 27 || e.type == 'blur'){

          $(this).parent().html(conteudoOriginal);

        }
      }));
      $(this).children().select();
    });
  // Validação para Inputs type NUMBER CARRO - END

    // Validação para Inputs type NUMBER - START
  $('#tabelaprincipal tbody tr td.editavelNumberSAP').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }

      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'number',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();

        if (keyCode == 13 && conteudoNovo != '' && conteudoNovo != conteudoOriginal) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index());
          console.log(this);
          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: coluna,
              valor: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovo);
              $('body').append(result);
              
            }
          })
        }else if (keyCode == 27 || e.type == 'blur'){

          $(this).parent().html(conteudoOriginal);

        }
      }));
      $(this).children().select();
    });
  // Validação para Inputs type NUMBER - END

  // Validação para Inputs type DATE - START
  $('#tabelaprincipal tbody tr td.editavelDate').dblclick(function() {
      if ($('td > input').length > 0) {
        return;
      }

      var conteudoOriginal = $(this).text();
      var novoElemento = $('<input/>', {
        type: 'date',
        value: conteudoOriginal
      });

      $(this).html(novoElemento.bind('blur keydown', function(e) {
        var keyCode = e.which;
        var conteudoNovo = $(this).val();
        var dataFormatada = conteudoNovo.split('-').reverse().join('/');

        if (keyCode == 13 && dataFormatada != '' && dataFormatada != conteudoOriginal) {
          var objeto = $(this);
          var posicao = $(this).closest('td');
          var coluna = (posicao.index());
          console.log(this);
          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              campo: coluna,
              valor: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(dataFormatada);
              $('body').append(result);
            }
          })
        } else if (keyCode == 27 || e.type == 'blur'){
          $(this).parent().html(conteudoOriginal);
          }
      }));
      $(this).children().select();
    });
  // Validação para Inputs type DATE - END

  // Validação para STATUS - START
  $('#tabelaprincipal tbody tr td.editavelStatus').dblclick(function() {

      var conteudoOriginal = $(this).text();

      //validação do valor da td para criar o elemento com o "selected" no option correto - start
      if (conteudoOriginal == "Parada") {

        var novoElemento= $('<select class="inputFiltro"><option value="1" selected>Parada</option><option value="2">Expedida</option><option value="3">Cancelada</option></select>');

      }else if (conteudoOriginal == "Expedida"){

        var novoElemento= $('<select class="inputFiltro"><option value="1">Parada</option><option value="2" selected>Expedida</option><option value="3">Cancelada</option></select>');

      }else if (conteudoOriginal == "Cancelada"){

        var novoElemento= $('<select class="inputFiltro"><option value="1">Parada</option><option value="2">Expedida</option><option value="3" selected>Cancelada</option></select>');

      }
      //validação do valor da td para criar o elemento com o "selected" no option correto - end

      $('#tabelaprincipal tbody tr td.editavelStatus').keydown(function(e) { //valida o ESC para voltar o conteudo original
        if(e.keyCode == 27) {

        $(this).html(conteudoOriginal);

        };
      });
      
      //validação do onchange quando o usuario alterar o select - start
      $(this).html(novoElemento.on('change', function() { 
        
        var conteudoNovo = $(this).val();

        if (conteudoNovo == 1) {
          conteudoNovoTexto = 'Parada';

        }else if (conteudoNovo == 2) {
          conteudoNovoTexto = 'Expedida';

        }else if (conteudoNovo == 3) {
          conteudoNovoTexto = 'Cancelada'

        }else{
          alert("Conteúdo inválido - verifique os campos");

        } 
      //validação do onchange quando o usuario alterar o select - end
      
        var objeto = $(this);

          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              valorStatus: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovoTexto);
              $('body').append(result);
            }
          })
      }));
      $(this).children().select();
    });
  // Validação para STATUS - END

  // Validação para REGIÃO - START
  $('#tabelaprincipal tbody tr td.editavelRegiao').dblclick(function() {

      var conteudoOriginal = $(this).text();

      if (conteudoOriginal == "Santa Cruz") {
        var novoElemento= $('<select class="inputFiltro"><option value="1" selected>Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');

      }else if (conteudoOriginal == "Cruz Alta"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2" selected>Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');

      }else if (conteudoOriginal == "Santa Maria"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3" selected>Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');

      }else if (conteudoOriginal == "Passo Fundo"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4" selected>Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');

      }else if (conteudoOriginal == "Santa Rosa"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5" selected>Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Frederico W."){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6" selected>Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Erechim"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7" selected>Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Uruguaiana"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8" selected>Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Pelotas"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9" selected>Pelotas</option><option value="10">Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Bento Goncalves"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10" selected>Bento Goncalves</option><option value="11">Vazio</option></select>');
      
      }else if (conteudoOriginal == "Vazio"){
        var novoElemento= $('<select class="inputFiltro"><option value="1">Santa Cruz</option><option value="2">Cruz Alta</option><option value="3">Santa Maria</option><option value="4">Passo Fundo</option><option value="5">Santa Rosa</option><option value="6">Frederico W.</option><option value="7">Erechim</option><option value="8">Uruguaiana</option><option value="9">Pelotas</option><option value="10">Bento Goncalves</option><option value="11" selected>Vazio</option></select>');
      
      }

      $('#tabelaprincipal tbody tr td.editavelRegiao').keydown(function(e) {
        if(e.keyCode == 27) {

        $(this).html(conteudoOriginal);

        };
      });
      
      $(this).html(novoElemento.on('change', function() {
        
        var conteudoNovo = $(this).val();

        if (conteudoNovo == 1) {
          conteudoNovoTexto = 'Santa Cruz';

        }else if (conteudoNovo == 2) {
          conteudoNovoTexto = 'Cruz Alta';

        }else if (conteudoNovo == 3) {
          conteudoNovoTexto = 'Santa Maria'

        }else if (conteudoNovo == 4) {
          conteudoNovoTexto = 'Passo Fundo';

        }else if (conteudoNovo == 5) {
          conteudoNovoTexto = 'Santa Rosa';

        }else if (conteudoNovo == 6) {
          conteudoNovoTexto = 'Frederico W.';

        }else if (conteudoNovo == 7) {
          conteudoNovoTexto = 'Erechim';

        }else if (conteudoNovo == 8) {
          conteudoNovoTexto = 'Uruguaiana';

        }else if (conteudoNovo == 9) {
          conteudoNovoTexto = 'Pelotas';

        }else if (conteudoNovo == 10) {
          conteudoNovoTexto = 'Bento Goncalves';

        }else if (conteudoNovo == 11) {
          conteudoNovoTexto = 'Vazio';

        }else{
          alert("Conteúdo inválido - verifique os campos");

        } 

        var objeto = $(this);

          $.ajax({
            type: "GET",
            url: "../Control/updateControleCargas.php",
            data: {
              id: $(this).parents('tr').children().first().text(),
              valorRegiao: conteudoNovo
            },
            success: function(result) {
              objeto.parent().html(conteudoNovoTexto);
              $('body').append(result);
            }
          })
      }));
      $(this).children().select();
    });
  // Validação para REGIÃO - END
  
});


