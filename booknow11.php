<?php $page = 'booknow'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_subbanner.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
				
					<h2>A new you awaits. Let the transformation begin!</h2>
					
					<p>Fill out our brief form below. Please fill in all required fields*.</p>
					
					<?php
						$to='chrisporter@nowthatsgenius.com';
						$messageSubject='New booking';
						$confirmationSubject='Booking confirmation with LaLa\'s';
						$confirmationBody="This message is to confirm your appointment with LaLa's.\r\n";
						$name='';
						$email='';
						$body='';
						$displayForm=true;	
						
					
									
						if ($_POST){
							
							
						// digitalbearmedia concatenation 						
							$body1 = "Name: " .	$_POST['name'] .  "Phone: " . $_POST['phone']  . "Date: " . $_POST['datepicker']  . "Time: " . $_POST['time-hour'] . " : " . $_POST['time-min']  . "Service: " . $_POST['service'] . "Private Room: " .  $_POST['privateroom'] . "Additional Details: " . $_POST['body'];	
							
	$mailConcatenation = "Name: " .	$_POST['name'] . "\r\n" . "Phone: " . $_POST['phone'] . "\r\n" . "Date: " . $_POST['datepicker'] . "\r\n" . "Time: " . $_POST['time-hour'] . ":" . $_POST['time-min'] . "\r\n" . "Service: " . $_POST['service'] . "\r\n" . "Private Room: " .  $_POST['privateroom'] . "\r\n" . "Additional Details: " . $_POST['body'] . "\r\n";								
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
					  Your message is shown below.
					</p>
					
					<?php
						echo '<p>'.htmlspecialchars($body).'</p>';
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

					<form action="booknow11.php" id="booknow" method="post">
						
						<fieldset>
						
							<span class="section_title">1. Your details</span>
							
							<ol>
							
								<li>
								
									<label for="name">Name*</label>
									
									<input id="name" name="name" type="text" class="tk-museo" required autofocus />
									
								</li>
								
								<li>
								
									<label for="email">Email</label>
									
									<input id="email" name="email" class="tk-museo" type="text" value="<?php echo htmlspecialchars($email); ?>" />
									
								</li>
								
								<li>
								
									<label for="phone">Phone*</label>
									
									<input id="phone" name="phone" class="tk-museo" type="text" />
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset>
							
							<span class="section_title">2. Scheduling</span>
							
							<ol>
								
								<li>
								
									<ol>
									
										<li>
								
											<label for="datepicker">Day*</label>
											
											<input id="datepicker" name="datepicker" type="text" class="tk-museo" />
											
										</li>
										
										<li>
										
											<label for="time">Time*</label>
											
											<select id="time-hour" name="time-hour" class="tk-museo select_time">
									
												<option value="9">9</option>
												
												<option value="10">10</option>
												
												<option value="11">11</option>
												
												<option value="12">12</option>
												
												<option value="1">1</option>
												
												<option value="2">2</option>
												
												<option value="3">3</option>
												
												<option value="4">4</option>
												
												<option value="5">5</option>
												
												<option value="6">6</option>
												
											</select>
											&nbsp;:&nbsp;
											<select id="time-min" name="time-min" class="tk-museo select_time">
									
												<option value="00">00</option>
												
												<option value="15">15</option>
												
												<option value="30">30</option>
												
												<option value="45">45</option>
												
											</select>
											
										</li>
										
									</ol>
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset>
						
							<span class="section_title">3. Choice of Service</span>
							
							<ol>
							
								<li>
								
									<label for="service">What service would you like to select?*</label>
											
									<select id="service" name="service" class="tk-museo">
									
										<option>Service 1</option>
										
										<option>Service 2</option>
										
									</select>
									
								</li>
								
								<li>
								
									<label for="privateroom">Private Room?* (Add $20 service charge for private room)</label>
											
									<input type="radio" value="Yes" name="privateroom" id="privateroom" class="privateroom" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="privateroom" id="privateroom" class="privateroom" /> <span class="pr_text">No</span>
									
								</li>
								
								<li>
								
									<label for="message">Any additional details for the stylist?</label>
									
									<textarea id="message" name="body" class="tk-museo"><?php echo htmlspecialchars($body); ?></textarea>
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset class="submitfield">
						
							<button type="submit" class="pink_large tk-museo">Book Now</button>
							
						</fieldset>
						
					</form>
					
					<?php
					  }
					?>

				</div><!--/cwi_col_left-->
				
				<div class="cwi_col_right">
				
					<?php include 'sections/sections_hours.php'; ?>
					
					<div id="internal_ad" class="ad_box">
					
					</div><!--/ad_box-->
					
				</div><!--/cwi_col_right-->
				
			</div><!--/content_wrap_inner-->
			
		</section><!--/content_wrap-->
		
		<?php include 'sections/sections_map.php'; ?>
		
		<?php include 'sections/sections_foot.php'; ?>