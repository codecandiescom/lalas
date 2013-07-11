<?php $page = 'contact'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_subbanner.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
					
					<h2>Contact Us</h2>
					
					<p>Please, tell us how we are doing by filling out the form below.</p>
					
					<?php
						$to='info@lalassalon.com';
						$messageSubject='Test for Contacting LaLa\'s';
						$confirmationSubject='Thanks for Contacting LaLa\'s';
						$confirmationBody="Thanks for contacting us! We will get back with you within the next 24 hours.\r\n";
						$name='';
						$email='';
						$body='';
						$displayForm=true;	
						
					
									
						if ($_POST){
							
							
						// digitalbearmedia concatenation 						
							$body1 = "Name: " .	$_POST['name'] .  "Email: " . $_POST['email']  . "Phone: " . $_POST['phone']  . "Message: " . $_POST['message'];	
							
	$mailConcatenation = "Name: " .	$_POST['name'] . "\r\n" . "Email: " . $_POST['email'] . "\r\n" . "Phone: " . $_POST['phone'] . "\r\n" . "Message: " . $_POST['message'] . "\r\n";								
							//end concatenation	
					
							
							
							$email=stripslashes($_POST['email']);
							$body=stripslashes($body1);		
							
						
							
							// validate e-mail address
							$valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
							$crack=eregi("\r|\n)(to:|from:|cc:|bcc:)",$body);
						
							if ($email && $body && $valid && !$crack){
								$body = $mailConcatenation; //add carriage returns back to format mail after eregi check 
								
								if (mail ($to,$confirmationSubject,$body,'From: '.$email."\r\n")
									&& mail($email,$confirmationSubject,$confirmationBody.$body,'From: '.$to."\r\n")){
								$displayForm=false;
					?>
					
					<p>
						Your message was successfully sent.
					  In addition, a confirmation copy was sent to your e-mail address.
					  
					</p>
					
					<?php
						echo '<p>'&nbsp;'</p>';
						}else{ //the message could not be sent
					?>
					
					<p>
					  Something went wrong when the server tried to send your message.
					  This is usually due to a server error, and is probably not your fault.
					  We apologize for any inconvenience caused.
					</p>

					<?php
						}
						}else if ($crack) { //cracking attempt
					?>
					
					<p><strong>
					  Your message contained e-mail headers within the message body.
					  This seems to be a cracking attempt and the message has not been sent.
					</strong></p>
					
					<?php
						}else{ // form not complete
					?>
							
					<p><strong>
					  Your message could not be sent.
					  You must include both a valid e-mail address and a message.
					</strong></p>
					
					<?php
							}
						}
						if ($displayForm){
					?>

					<form action="contact.php" id="contact" method="post">
						
						<fieldset>
						
							<span>1. Your details</span>
							
							<ol>
							
								<li>
								
									<label for="name">Name</label>
									
									<input id="name" name="name" type="text" class="tk-museo" required autofocus />
									
								</li>
								
								<li>
								
									<label for="email">Email</label>
									
									<input id="email" name="email" class="tk-museo" type="text" />
									
								</li>
								
								<li>
								
									<label for="phone">Phone</label>
									
									<input id="phone" name="phone" class="tk-museo" type="text" />
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset>
							
							<span>2. How may we help you today?</span>
							
							<ol>
								
								<li>
								
									<label for="message">Your message</label>
									
									<textarea id="message" name="message" class="tk-museo"></textarea>
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset class="submitfield">
						
							<button type="submit" class="pink_large tk-museo">Send!</button>
							
						</fieldset>
						
					</form>
					
					<?php
					  }
					?>
					
					
				</div><!--/cwi_col_left-->
				
				<div class="cwi_col_right">
				
					<?php include 'sections/sections_hours.php'; ?>
					
					<?php include 'sections/sections_ads.php'; ?>
					
				</div><!--/cwi_col_right-->
				
			</div><!--/content_wrap_inner-->
			
		</section><!--/content_wrap-->
		
		<?php include 'sections/sections_map.php'; ?>
		
		<?php include 'sections/sections_foot.php'; ?>