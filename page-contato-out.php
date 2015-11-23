<?php
	//response generation function
	$response = "";
	//function to generate response
	function my_contact_form_generate_response($type, $message){
		global $response;
		if($type == "success") $response = "<div class='success'>{$message}</div>";
		else $response = "<div class='error'>{$message}</div>";
	}
	//Placeholder
	$ph_name = "Nome";
	$ph_email = "e-maill";
	$ph_tel = "Telefone";
	$ph_message = "Mensagem";
	$ph_human = "";
	//response messages
	$not_human       = "Verificação humana incorreta.";
	$missing_content = "Por favor coloque todas as informações.";
	$email_invalid   = "Email inválido.";
	$message_unsent  = "Mensagem não enviada. Tente de novo.";
	$message_sent    = "Obrigado! Sua mensagem foi enviada.";
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$tel = $_POST['message_tel'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	$machine = $_POST['message_machine'];
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Email enviado do site da ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .
		'Reply-To: ' . $email . "\r\n";
		$message = strip_tags("Nome: " . $name . "\r\n \r\n" . "Email: " . $email . "\r\n \r\n" . $tel . "\r\n \r\n" . "Mensagem: " . "\r\n" . $message . "\r\n \r\n" . $options . "\r\n \r\n \r\n" . "Obrigado!" );
	if(!$human == 0){
		if($human != $machine) my_contact_form_generate_response("error", $not_human); //not human!
		else {
			//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				my_contact_form_generate_response("error", $email_invalid);
			else //email is valid
			{
				//validate presence of name and message
				if(empty($name) || empty($message)){
					my_contact_form_generate_response("error", $missing_content);
				}
				else //ready to go!
				{
					$sent = wp_mail($to, $subject, strip_tags($message), $headers);
					if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
					else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
				}
			}
		}
	}
	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
get_header(); ?>

	<h1 class = "title">entre em contato com a gente</h1>

	<div class = "clearfix" style = "background-color: #EFEEEA">

		<div class = "box-contact col-xs-12 col-md-6" style = "padding: 4% 3% 3%; color: #6B6B6B" id = "respond">

			<div>
				<form action = "<?php the_permalink(); ?>" method = "post">
					<input class = "col-xs-12" type = "text" name = "message_name" value = "<?php echo esc_attr($_POST['message_name']); ?>" placeholder = "<?php echo $ph_name; ?>" />
					<input class = "col-xs-12" type = "text" name = "message_email" value = "<?php echo esc_attr($_POST['message_email']); ?>" placeholder = "<?php echo $ph_email; ?>" />
					<input class = "col-xs-12" type = "text" name = "message_tel" value = "<?php echo esc_attr($_POST['message_tel']); ?>" placeholder = "<?php echo $ph_tel; ?>" />
					<textarea class = "col-xs-12" type = "text" name = "message_text" rows = "2" placeholder = "<?php echo $ph_message; ?>"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
					
					<p>Digite&emsp;<strong><?php $Random_code=rand(10,99); echo$Random_code; ?></strong>&emsp;para enviar</p>
					<input id = "ph-human" type = "text" name = "message_human" placeholder = "<?php echo $ph_human; ?>" />
					<input type = "hidden" name = "message_machine" value = "<?php echo $Random_code; ?>" />
					<input type = "hidden" name = "submitted" value = "1">
					<button class = "btn" type = "submit" name = "send">enviar</button>
				</form>

				<?php echo $response; ?>

				<a class = "clearfix" style = "font-size: 1.2em; font-weight: 800" href = "mailto:contato@palaciodopao.com.br">Ou clique aqui e envie um e-mail</a>
			</div>
		</div>

		<div class = "box-contact payment col-xs-12 col-md-6">
			<div><img src = "<?php bloginfo('stylesheet_directory');?>/img/pagamento.png"></div>
		</div>

	</div>

	<div id = "map-canvas"></div>

<?php get_footer(); ?>

<script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/map.min.js"></script>