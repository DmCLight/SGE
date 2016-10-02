<?php

// Váriaveis de controle
$strFromNumber = "+12512200580";
$strToNumber   = "+5511941825269";
$strMsg        = "Teste";//Olivier accidentally pulled up a porn site on a projector
$aryResponse   = array();

// Biblioteca do Twilio (Para se conectar ao servidor e enviar o SMS)
require_once ("inc/Services/Twilio.php");

// Configurações básicas do SID/Token de autenticação (SID e Token de teste)
$AccountSid = "AC005d1374b86331fbc30680e321cf2d29";
$AuthToken  = "972d67ca6c1bef8fd4bb2b6e2980aa6d";

// Inicia uma conexão do cliente (SID/Token informados) com o servidor Twilio.
$objConnection = new Services_Twilio($AccountSid, $AuthToken);

//Envia uma nova mensagem!
$bSuccess = $objConnection->account->sms_messages->create(

	$strFromNumber, // Numero de origem
	$strToNumber, // Numero de destino
	$strMsg// Conteúdo da mensagem
);

$aryResponse["SentMsg"] = $strMsg;
$aryResponse["Success"] = true;

echo json_encode($aryResponse);
