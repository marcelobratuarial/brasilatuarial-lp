<?php
    // error_reporting(0);
	$error = '';

	if ( array_key_exists('to', $_POST) || true ){

		$to 		= 'marcelo@agenciabrasildigital.com.br' ; //$_POST['to'];
		// $to 		= 'gabriela.guimaraes@brasilatuarial.com.br'; ; //$_POST['to'];
		unset($_POST['to']);

		$from		= "contato@bplink.com.br";
		$name		= "Brasil Atuarial";
		$subject	= "Nova mensagem | Brasil Atuarial LP";
		// $reCaptchaSecret = "6Lck1FAUAAAAAH3Y3wOtFAx5IjS2z_MD5WpNl4P9";


		if(isset($_POST['from'])){
			$from 	= $_POST['from'];
			unset($_POST['from']);
		}

		if(isset($_POST['name'])){
			$name 	= $_POST['name'];
// 			unset($_POST['name']);
		}

		if(isset($_POST['subject'])){
			$subject 	= $_POST['subject'];
			unset($_POST['subject']);
		}
        /*
		if(array_key_exists("g-recaptcha-response", $_POST)) {
			if(isset($_POST["g-recaptcha-response"]) && $_POST["g-recaptcha-response"] != '') {
				$recaptcha = $_POST["g-recaptcha-response"];
				// echo $recaptcha;
			} else {
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					Please, verify you are a human.
				</div>';
				return;
			}

			$postdata = http_build_query([
				"secret" => $reCaptchaSecret,
				"response" => $recaptcha
			]);
			$opts = ['http' =>
			   [
			       'method'  => 'POST',
			       'header'  => 'Content-type: application/x-www-form-urlencoded',
			       'content' => $postdata
			   ]
			];
			$context  = stream_context_create($opts);
			$result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
			$check = json_decode($result);

			if(!$check->success) {
				header("HTTP/1.1 422 failed");
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					reCaptcha validation failed!
				</div>';
				return;
			}
		} */

        $str_template = file_get_contents('./template-mail.php');
        if(isset($_POST["benef"])) {
					
			$beneficios = "";
			foreach($_POST["benef"] as $ben){
				$beneficios .= $ben.", ";

			}
			$beneficios = rtrim($beneficios, ", ");
			
		}
// 		print_r($_POST);exit;
        $ref = array(
          '{nome}' => $_POST['name'],
          '{email}' => $_POST['email'],
          '{empresa}' => $_POST["empresa"],
          '{telefone}' => $_POST['telefone'],
          '{whatsapp}' => $_POST['whatsapp'],
          '{beneficios}' => $beneficios,
          '{mensagem}' => $_POST['message'],
        );
        $message = strtr($str_template, $ref);
		$message = str_replace("\n.", "\n..", $message);
        /*
		$message = "";
		foreach ($_POST as $field => $data){

	   		$message = "<html><head><title>$subject</title></head><body>\n";
	   		foreach($_POST as $field => $data){
	   		    if($field == "benef") {
					
					$message .= "<div style='border-bottom:1px solid #dadada; padding-bottom:15px;margin-bottom:15px;'><strong>Benef??cios: </strong>";
					foreach($data as $ben){
						$message .= $ben.", ";
	
					}
					$message = rtrim($message, ", ");
					$message .= "</div>\n";
				} else {
				    $message .= "<div style='border-bottom:1px solid #dadada; padding-bottom:15px;margin-bottom:15px;'><strong>".ucwords($field)."</strong><br/>".stripslashes($data)."</div>\n";
				}
	   			
	   		}
	   		$message .= "</body></html>";

		} */


		// To send HTML mail, the Content-type header must be set
		define('HEADER_TRAIL', "\r\n");
		define('EMAIL_HTML', true);
	   	$headers  = 'MIME-Version: 1.0' . HEADER_TRAIL;
	   	$headers .= ( ! EMAIL_HTML) ? 'Content-type: text;' . HEADER_TRAIL : 'Content-type: text/html; charset=utf-8' . HEADER_TRAIL ;

	   	// Additional headers
	   	$headers .= "From: Brasil Atuarial LP <".$from.">" . HEADER_TRAIL;
	   	// $headers .= "Bcc: bb@agenciabrasildigital.com.br" . HEADER_TRAIL;
	   //	$headers .= "Bcc: marcelodmdo@gmail.com" . HEADER_TRAIL;
	   //	$headers .= "From: ".$name." <".$from.">" . HEADER_TRAIL;


	   	if(!mail($to, $subject, $message, $headers)){
	   		$error =
	   		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Erro ao enviar mensagem. Tente novamente.
			</div>';
	   	}
		   var_dump(error_get_last()['message']);


	} else {
		$error =
		'<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			There is no <strong> "to" </strong> field found in the form. Please follow the documentation.
		</div>';
	}


	if(!empty($error) ){
		header("HTTP/1.1 422 failed");
		echo $error;
	}
	else{
		header("HTTP/1.1 200 OK");
		echo
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Sua mensagem foi enviada com sucesso! Em breve retornaremos seu contato.
		</div>';
	}


?>
