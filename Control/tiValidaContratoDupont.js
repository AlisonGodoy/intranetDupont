//Funcao para registrar os valores do Form - Start
var marca = "";
var modelo = "";
var idEstoque = "";
var imei = "";
var pulsus = "";
var email = "";
var fone = "";
var cpf = "";
var funcao = "";
var captarNomeColaborador = "";
var originalSim = "";
var originalNao = "";

		function enviaForm(){
		captarMarca = document.getElementById('recipient-desc_marca').value;
		document.getElementById('marca').innerHTML = captarMarca;

		captarModelo = document.getElementById('recipient-desc_modelo').value;
		document.getElementById('modelo').innerHTML = captarModelo;

		captarIdEstoque = document.getElementById('recipient-id').value;
		document.getElementById('idEstoque').innerHTML = captarIdEstoque;

		captarImei = document.getElementById('recipient-imei').value;
		document.getElementById('imei').innerHTML = captarImei;

		captarPulsus = document.getElementById('recipient-pulsus').value;
		document.getElementById('pulsus').innerHTML = captarPulsus;

		captarEmail = document.getElementById('recipient-email').value;
		document.getElementById('email').innerHTML = captarEmail;

		captarFone = document.getElementById('recipient-fone').value;
		document.getElementById('fone').innerHTML = captarFone;

		captarCpf = document.getElementById('recipient-cpf').value;
		document.getElementById('cpf').innerHTML = captarCpf;

		captarFuncao = document.getElementById('recipient-funcao').value;
		document.getElementById('funcao').innerHTML = captarFuncao;

		captarNomeColaborador = document.getElementById('recipient-nomeColaborador').value;
		document.getElementById('nomeColaborador').innerHTML = captarNomeColaborador;

		let checkbox = document.getElementById('recipient-originalSim');
			if(checkbox.checked) {
    			document.getElementById('originalSim').innerHTML = "Original";
			} else {
    			document.getElementById('originalSim').innerHTML = "NÃO Original";
			}

		let checkboxDois = document.getElementById('recipient-usbC');
			if(checkboxDois.checked) {
    			document.getElementById('usbC').innerHTML = "USB Tipo C";
			} else {
    			document.getElementById('usbC').innerHTML = "Micro USB";
			}

}
//Funcao para registrar os valores do Form - End


//Funcao para gerar o PDF com os valores do Form - Start
$(document).ready(function(){
    $('#gerarContrato').click(function() {
      savePDF(document.querySelector('#imprimirDiv'));
    });
});
  
function savePDF(codigoHTML) {
  var doc = new jsPDF('portrait', 'pt', 'a4'),
      data = new Date();
  margins = {
    top: 40,
    bottom: 60,
    left: 40,
    width: 1000
  };
  doc.fromHTML(codigoHTML,
               margins.left, // x coord
               margins.top, { pagesplit: true },
               function(dispose){
    doc.save("Relatorio - "+data.getDate()+"/"+data.getMonth()+"/"+data.getFullYear()+".pdf");
  });
}
//Funcao para gerar o PDF com os valores do Form - End
           