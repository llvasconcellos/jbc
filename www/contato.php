<?
   $to= "comercial@joinvillebc.com.br";
   $from = "comercial@joinvillebc.com.br";

   $subject = "Contato via WebSite JBC";

   $corpo = "Formulario de Contato via WebSite JBC:\n\n";
   $corpo .= "Nome: " . $_POST["var001"] . "\n";
   $corpo .= "Email: " . $_POST["var002"] . "\n";
   $corpo .= "Telefone: " . $_POST["var003"] . "\n";
   $corpo .= "Mensagem: " . $_POST["var004"] . "\n";

   //envio o correio...
   if (mail($to, $subject, $corpo, "From: <$from>")) {
   		echo("&retorno=OK");
   } else {
   		echo("&retorno=");
   }
?>