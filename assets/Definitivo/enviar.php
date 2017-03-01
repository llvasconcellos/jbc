<?
$to = "comercial@joinvillebc.com.br";

$nova_linha = chr(10);

$html = "<p><b>Pedido de Mais informações:</b></p>" . $nova_linha;

$html .= "<p><b>Nome:</b>&nbsp;" . $_POST["nome"] . "</p>" . $nova_linha;

$html .= "<p><b>Email:</b>&nbsp;" . $_POST["email"] . "</p>" . $nova_linha;

$html .= "<p><b>Telefone:</b>&nbsp;" . $_POST["fone"] . "</p>" . $nova_linha;

$html .= "<p><b>Comentario:</b><br>" . $_POST["comentario"] . "</p>" . $nova_linha;
	
$subject = $_POST["nome"] . " Pede mais informações!";

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-15\n";

$headers .= "From: " . $_POST["nome"] . " <" . $_POST["email"] . ">\n";

if(mail($to, $subject, $html, $headers)) mensagem = '&nbsp;<strong>As informações foram enviadas:</strong><br>Entraremos em contato em breve.';
else '&nbsp;<strong>Houve um problema no envio de informações:</strong><br>Tente novamente mais tarde.';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Apresentação</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="estilo.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
			<tr>
				<td class="w"><b style="font-size:14px; margin-left: 10px;">CONTATOS</b><br><br></td>
			</tr>
			<tr>
				<td><img src="imagens/1_line.gif" alt="" border="0"><br></td>
			</tr>
			<tr>
				<td class="w">
					<p>
						<br><br><br>
						<img style="margin-left: 20px;" src="imagens/3_p2.jpg" align="left">	
						<div style="background-color: #433F32; margin-left: 120px; margin-right: 10px; padding: 10px 10px 10px 10px;">
							<img src="imagens/bullet.gif" align="absbottom"><?=$mensagem?>
							<br>
						</div>
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>