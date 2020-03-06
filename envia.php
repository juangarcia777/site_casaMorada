<?php
header("Content-Type: text/html; charset=iso-8859-1");

 require("class_email/class.phpmailer.php");

function envia_email($email,$mensagem){

	$mail = new PHPMailer;
	$mail->SMTPDebug =0;
	$mail->isSMTP();
	$mail->Host = 'srv74.prodns.com.br';
	$mail->SMTPAuth = true;
	$mail->Username = 'site@sisconnection.com.br';
	$mail->Password = 'inicial2011';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('site@rhegistra.com.br', 'Nova Mensagem->Site');
	$mail->addAddress($email);

	$mail->isHTML(true);

	$mail->Subject = 'CONTATO ENVIADO PELO SITE';
	$mail->Body    = $mensagem;
	$mail->send();
}

  if(!empty($_POST['nome'])) {
  $nome =  utf8_decode($_POST['nome']);
	$email = utf8_decode($_POST['email']);
	$text = utf8_decode($_POST['text']);
	$msg = utf8_decode($_POST['msg']);
}


$to_ema = 'juangarcia170498@gmail.com';


$vaix = '
	<table cellspacing="0" style="font-family: Helvetica; font-size: 14px; width:600px; margin: 0 auto; border: 1px solid #D2D2D2;">
			<tr><td style="padding:14px;">
			<h2>Contato</h2>
			<p><strong>NOME:</strong> '.$nome.'</p>
			<p><strong>ASSUNTO:</strong> '.$msg.'</p>
			<p><strong>E-MAIL:</strong> '.$email.'</p>
			<p><strong>MENSAGEM:</strong> '.$text.'</p>
			<p style="font-size:12px; color:#666">IMPORTANTE: NÃO RESPONDA ESSE E-MAIL, POIS ELE É ENVIADO ATRAVÉS DO SITE.</p>
			</td></tr>
		</table>

';

		envia_email($to_ema,$vaix);

		echo 'Mensagem enviada com sucesso. Obrigado.';

?>
