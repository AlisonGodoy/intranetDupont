<?php

session_start(); // Inicia sessão - https://bit.ly/3sEO4qA 

/// Recebe valores do Form - Start
$usuario   = @$_POST['usuario'];
$senha 	   = @$_POST['senha'];
/// Recebe valores do Form - End

include("../Model/conexaoIntranetGd.php"); //Conecta ao banco


// Monta a Query - Start
$queryA = "
      OPEN SYMMETRIC KEY ChaveSenha
DECRYPTION BY CERTIFICATE Certificado WITH PASSWORD = 'Arev@82838283'


SELECT CodUser
FROM   UserGd
WHERE LoginGd = '".$usuario."' AND (CAST (DECRYPTBYKEY(Password) AS varchar(50))) = '".$senha."'


CLOSE SYMMETRIC KEY ChaveSenha";
// Monta a Query - End

$resultA   = odbc_exec($con, $queryA);    //Executa função para Executar a Query - https://bit.ly/3B4Nzcm
$arraysqlA = odbc_fetch_array ($resultA); //Coloca o valor de odbc_exec em um array - https://bit.ly/3mkYOcf

$CodUser = $arraysqlA['CodUser'];    //Resgata "id" do array

$_SESSION['CodUser'] = $CodUser;  // Inseri na sessão Global o Id do Usuário

//Perfil do Usuário - Start
$queryPerfil = "
OPEN MASTER KEY DECRYPTION BY PASSWORD = 'Arev@82838283'

OPEN SYMMETRIC KEY ChaveSenha
DECRYPTION BY CERTIFICATE Certificado WITH PASSWORD = 'Arev@82838283'

          SELECT
          CodProfile
          FROM UserGd
          WHERE LoginGd = '".$usuario."' AND (CAST (DECRYPTBYKEY(Password) AS varchar(50))) = '".$senha."'";

$resultPerfil = odbc_exec($con, $queryPerfil);    //Executa função para Executar a Query - https://bit.ly/3B4Nzcm
$arrayPerfil  = odbc_fetch_array ($resultPerfil); //Coloca o valor de odbc_exec em um array - https://bit.ly/3mkYOcf

$CodPerfil = $arrayPerfil['CodProfile'];    //Resgata "id" do array
$_SESSION['CodPerfil'] = $CodPerfil;

//Perfil do Usuário - End

// Monta a Query - Start
$query = "
OPEN MASTER KEY DECRYPTION BY PASSWORD = 'Arev@82838283'

OPEN SYMMETRIC KEY ChaveSenha
DECRYPTION BY CERTIFICATE Certificado WITH PASSWORD = 'Arev@82838283'

          SELECT
          count(*) as quant,
          CodUser       as id
          FROM UserGd
          WHERE LoginGd = '".$usuario."' AND (CAST (DECRYPTBYKEY(Password) AS varchar(50))) = '".$senha."'
          GROUP BY CodUser";
// Monta a Query - End

//Insert Historico de acesso - Start
  $queryInsert = "
      INSERT INTO [dbo].[historicoAcesso]
           ([id_user]
           ,[horaAcesso])
     VALUES
           ('".$CodUser."'
           ,(select GETDATE())) ";
//Insert Historico de acesso - End

$result   = odbc_exec($con, $query);    //Executa função para Executar a Query - https://bit.ly/3B4Nzcm
$arraysql = odbc_fetch_array ($result); //Colocar o valor de odbc_exec em um array - https://bit.ly/3mkYOcf


$quant  = $arraysql['quant']; //Resgata "quant" do array
$idUser = $arraysql['id'];    //Resgata "id" do array

if($quant == 1){

  $_SESSION['controleLogin'] = true;       //Cria Parametro "controleLogin" = true
  header("Location: ..\View\setores.php"); //Envia para próxima página 
  $resultInsert   = odbc_exec($con, $queryInsert);  

}else{
  unset($_SESSION['controleLogin']);      //Destrói variável Global com Parametro controleLogin - https://bit.ly/3z7L4VZ
  header("Location: ..\View\loginUser.php?error=t"); //Envia para Login contendo na URL error = t
  }

?>