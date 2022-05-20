<?php

session_start();


?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Estoque Smarts</title>
    <link rel="SHORTCUT ICON" href="../imagem/iconelink.ico">

      <!-- Faz referência a biblioteca Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 

      <!-- Faz referência a biblioteca Jquery -->
      <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Última versão JavaScript compilada e minificada -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"  src="../Control/Tempo.js"></script>

      <!-- Faz referência a arquivo .js personalizado -->
      <script type="text/javascript"	src="../Control/campoPesquisaBiblioteca.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,700&family=Nunito:wght@700&family=Yellowtail&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
      <link href = "https: //fonts.googleapis.com/css2? family = Teko: wght @ 700 & display = swap "rel =" stylesheet ">
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../css/teamplateTiBiblioteca.css" >
      <link rel="stylesheet" href="../css/normalize.css" >
    
  </head>

  <body>

    <header class="cabecalho">
      <h1>Biblioteca Grupo Dupont</h1>
    </header>

  <?php

    include("../Model/conexaoIntranetGd.php");

  ?>
  <div class="container">
    <table class="tabelaBiblioteca">
      <tr>
        <td class="tituloTabela">TI</td>
        <td class="tituloTabela">Cadastro</td>
        <td class="tituloTabela">Financeiro</td>
        <td class="tituloTabela">Prestação de Contas</td>
        <td class="tituloTabela">Star-B</td>
      </tr>

      <tr>
        <th><input type="text" id="tituloTi" placeholder="Pesquisar..."></th>
        <th><input type="text" id="tituloCadastro" placeholder="Pesquisar..."></th>
        <th><input type="text" id="tituloFinanceiro" placeholder="Pesquisar..."></th>
        <th><input type="text" id="tituloPrestacaoeContas" placeholder="Pesquisar..."></th>
        <th><input type="text" id="tituloStarB" placeholder="Pesquisar..."></th>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EfirSvPBbOhOkXhhjVPaDHsB2dZai3U8yAJULt7RK4kR9g?e=qF5HdY">Processos Avante Sales</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EUvQBHmc7wZDqRPBHQRyxjwBFTkJocgKnAdQyMlxp4r-yQ?e=jMvORz">Cadastro de Clientes</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EULSLGDHmzRKuQoZAfepnpkBEiNcnReiRPog8UIIDzhimA?e=MctXS9">Cobrança</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EZlYwu44h4xLhUhsqaqhx1QBpgpUycTnV4bbatkOFrAG0Q?e=8e9VDx">Reentregas</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EbNM15BrAJ5JiwuYHVkyAJwBFf-_P2t1SDLm_oQUMMjQGg?e=TqyotO">Inovaçoes Q1 2022</a></td>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/personal/ti_grupodupont_com_br/_layouts/15/onedrive.aspx?FolderCTID=0x012000206EF56AAA5A76458D2319BAC00C6A0C&id=%2Fpersonal%2Fti%5Fgrupodupont%5Fcom%5Fbr%2FDocuments%2FBiblioteca%2FRESET%20DO%20APLICATIVO%20SIMIX%20PONTO%2Epdf&parent=%2Fpersonal%2Fti%5Fgrupodupont%5Fcom%5Fbr%2FDocuments&parentview=4">Ponto</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EYx2pWp5Kx5Fg1rIW-1bVYgB6rrn0_1mtMvkJbkzACpcyA?e=agHJ2M">Inativação de Clientes</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EUN4qUpC5zhKt16DGMan3woBvwcrp-HUSOFBAtpxoihmXg?e=3dcGCq">Crédito</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EeZzWbOtXcFEs7K__MWCxWABO6NYLyZrMaGpUV02IYIQhw?e=8FEtZb">Assinatura nas Listagens</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:p:/g/personal/ti_grupodupont_com_br/EedUpxSesmhKk89LvqA9UuIBUDaATgrrG08ZRNdZ12A2Mw?e=uDDhoa">Passos da Venda</a></td>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EfH9bJsUW3hLnlDPk8TrqY0BhQVGkLRgV7DMwaGjB7bsRQ?e=pXowK9">Configuração Avante Sales</a></td>
        <td><a href="#"></a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EUa0dKLbIiBJsM_49XF2n6wBokxB3Nq6UP-LQpvNiuipvg?e=T0wCc6">Planilha de Despesas</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/ERtPE0adnu1JsCDW07ZDPzUBnwMgGHPNGRROELdEE38PMg?e=nm5RDx">Canhoto Retido</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EXpU0DTubOdCqL_Y9NgmUugByIlu-80xl18VXo_LUGGqww?e=9han7f">Boletim Inovaçoes 2022</a></td>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EY0FdSqMzGxOvb6QL19XkSABdrdMd8gZ5Ngkty1wFuHwuQ?e=b0wnTe">Processo de Venda</a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EfVv7W-NRbFKvoBDUO1UI8kBoTaT65U2sQM2NmIM5EYxHw?e=XUDtLz">Devolução</a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EUK4pDWC53VGuEQKvrS7gTIBYWixOkc701KdP0TAn1vryQ?e=YFGsxP">Manual de Identidade</a></td>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/ERVJnH_TQfdMomEZdvIDnUwBYs1Df5dHnXy32j_qoextMQ?e=oqjlAq">Resolução de Problemas Avante</a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EWoNEDFbk29Gvj9RhW9efM0BdiKf6jRAUY1jeJlr_ceWrg?e=Dii3bc">Catalogo Purina</a></td>
      </tr>

      <tr>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/ETVVJVBqVWdAj3lWZjiS-_0B-ylzbJ2-ioKmVzHSSg6ewg?e=VePnqa">Processo Indenização</a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/personal/ti_grupodupont_com_br/_layouts/15/onedrive.aspx?id=%2Fpersonal%2Fti%5Fgrupodupont%5Fcom%5Fbr%2FDocuments%2FBiblioteca%2FCATA%CC%81LOGO%20DE%20VENDAS%20DP%5F2022%5FLINHA%20SECA%5FATT%2Epdf&parent=%2Fpersonal%2Fti%5Fgrupodupont%5Fcom%5Fbr%2FDocuments%2FBiblioteca&ga=1">Catalogo Linha Seca</a></td>
      </tr>

      <tr>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href=""></a></td>
        <td><a href="https://office365dupont-my.sharepoint.com/:b:/g/personal/ti_grupodupont_com_br/EeJE2_d34e9Bs9QBGXpX2isBP5gep4omwnYGh76-EpyQXQ?e=4xszBk">Catalogo Professional</a></td>
      </tr>

    </table>

    </div>

    <footer>
      <a href="../View/setores">VOLTAR</a>
    </footer>

  </body>
</html>