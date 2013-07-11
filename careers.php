<?php $page = 'careers'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_subbanner.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
				
					
					
					<?php
						$to='ashleysteele@nowthatsgenius.com';
						$messageSubject='Application for Hire';
						$confirmationSubject='Application Submission for LaLa\'s';
						$confirmationBody="This message is to confirm your application submition to LaLa's.\r\n";
						$name='';
						$email='';
						$body='';
						$displayForm=true;	
						
					
									
						if ($_POST){
							
							
						// digitalbearmedia concatenation 						
							$body1 = "Name: " .	$_POST['name'] .  "Email: " . $_POST['email']   .  "Phone: " . $_POST['phone']   . "Drivers License: " . $_POST['driverslicense']   . "Transportation: " . $_POST['transportation'] . "Criminal Record: " .  $_POST['criminalrecord'] . "Positive Record: " . $_POST['positiverecord']
                                                                . "Start Date: " . $_POST['datepicker'] . "Desired Position: " . $_POST['desiredposition'] . "Employment Time Frame: " .  $_POST['employmenttimeframe'] . "Work Days: " . $_POST['workdays']   . "School: " . $_POST['school'] . "Major: " .  $_POST['major']  . "Graduate: " . $_POST['graduate']     . "Cosmetology: " . $_POST['cosmetology']
                                                                . "Licensed: " . $_POST['licensed']     . "Skill Set: " . $_POST['skillset']      . "Management Skills: " . $_POST['managementskills'] . "Business Tools: " . $_POST['businesstools']   . "Employed: " . $_POST['employed'] . "Company: " . $_POST['company']    . "Company Address: " . $_POST['companyaddress']
                                                                . "Job Titles: " . $_POST['jobtitles']   . "Supervisor: " . $_POST['supervisorsname'] . "Phone Number: " . $_POST['phonenumber']    . "Reason for Leaving: " . $_POST['reasonforleaving']   . "Message: " . $_POST['message'];
							
	
                                                        
                                                        
                                                        $mailConcatenation = "Name: " .	$_POST['name'] . "\r\n" . "Email: " . $_POST['email'] . "\r\n"  . "Phone: " . $_POST['phone'] . "\r\n"  . "Drivers License: " . $_POST['driverslicense'] . "\r\n" . "Transportation: " . $_POST['transportation'] . "\r\n" . "Criminal Record: " .  $_POST['criminalrecord'] . "\r\n" . "Positive Record: " . $_POST['positiverecord'] . "\r\n" . "Start Date: " . $_POST['datepicker'] . "\r\n" 								
							.   "Desired Position: " . $_POST['desiredposition'] . "\r\n" . "Employment Time Frame: " .  $_POST['employmenttimeframe'] . "\r\n" . "Work Days: " . $_POST['workdays'] . "\r\n" . "School: " . $_POST['school'] . "\r\n" . "Major: " .  $_POST['major'] . "\r\n" . "Graduate: " . $_POST['graduate'] . "\r\n" . "Cosmetology: " . $_POST['cosmetology'] . "\r\n" . "Licensed: " . $_POST['licensed'] . "\r\n" . "Skill Set: " . $_POST['skillset']  . "\r\n"
                                                        .   "Skill Set: " . $_POST['skillset'] . "\r\n" . "Management Skills: " . $_POST['managementskills'] . "\r\n" . "Business Tools: " . $_POST['businesstools'] . "\r\n" . "Employed: " . $_POST['employed'] . "\r\n" . "Company: " . $_POST['company'] . "\r\n" . "Company Address: " . $_POST['companyaddres'] . "\r\n" . "Job Title: " . $_POST['jobtitle'] . "\r\n" . "Supervisor: " . $_POST['supervisorsname']  . "\r\n"	
                                                        .   "Phone Number: " . $_POST['phonenumber'] . "\r\n" . "Reason for Leaving: " . $_POST['reasonforleaving'] . "\r\n" . "Message: " . $_POST['message'] . "\r\n";

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
						Your application was successfully sent.
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
					
					<h2>Become a cutting-edge stylist at Lala's!</h2>
					
					<p>Please ﬁll out the application in its entirety. Applications are taken
on a continual basis and do not imply that positions are available at the time of application.
Incomplete applications will not be considered.</p>

					<form action="careers.php" id="booknow" method="post">
						
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
                                                                
                                                                <li>
								
									<label for="driverslicense">Do you have a valid drivers license?</label>
											
									<input type="radio" value="Yes" name="driverslicense" id="driversLicense" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="driverslicense" id="driversLicense" class="radio" /> <span class="pr_text">No</span>
									
								</li>
                                                                
                                                                <li>
								
									<label for="transportation">Do you have reliable transportation?</label>
											
									<input type="radio" value="Yes" name="transportation" id="transportation" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="transportation" id="transportation" class="radio" /> <span class="pr_text">No</span>
									
								</li>
                                                                
                                                                <li>
								
									<label for="criminalrecord">Have you ever been charged with or convicted of a crime, including a major motor vehicle
violation?</label>
											
									<input type="radio" value="Yes" name="criminalrecord" id="criminalrecord" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="criminalrecord" id="criminalrecord" class="radio" /> <span class="pr_text">No</span>
									
								</li>
                                                                
                                                                
								<li>
								
									<p>If yes, explain number of charges/conviction(s), nature of offense(s) leading to charges/
                                                                        conviction(s), how recently such offense(s) was/were committed, sentence(s) imposed,
                                                                        and/or types(s) of rehabilitation:
                                                                        </p>
									
									<textarea id="positiverecord" name="positiverecord" class="tk-museo"><?php echo htmlspecialchars($body); ?></textarea>
									
								</li>
								
							</ol>
							
						</fieldset>
						
						<fieldset>
							
							<span class="section_title">2. Employment Options</span>
							
							<ol>
								
								<li>
								
									<ol>
									
									 <li>
                                                                            <label for="startdate">What is the earliest you're available to work?</label>
                                                                            
                                                                           
								
                                    					<input id="datepicker" name="datepicker" type="text" class="tk-museo" />
											
										</li>
										
																			
									</ol>
                                                                    
                                                                    <li>
								
									<label for="service_main_select">What position would you like to apply for?*</label>
											
									<select id="service_main_select" name="desiredposition" class="tk-museo service_select_menu" multiple="multiple">
		
                                                                                <optgroup label="Desired Position">	
                                                                        <option value="stylist">Hair Stylist</option>
                                                                        <option value="assistant">Stylist Assistant</option>
                                                                        <option value="receptionist">Salon Receptionist</option>
                                                                                                                                             
                                                                        </optgroup>

                                                                        </select>
        
                                                                    </li>
                                                                    
                                                                            <li>
								
									<label for="employmenttimeframe">Are you interested in full time or part time or employment?</label>
											
									<input type="radio" value="Full Time" name="employmenttimeframe" id="employmenttimeframe" class="radio" /> <span class="pr_text">Full Time</span>
									<input type="radio" value="Seasonal" name="employmenttimeframe" id="employmenttimeframe" class="radio" /> <span class="pr_text">Seasonal</span>
									
                                                                        </li>
                                                                        
                                                                        <li>
								
									<label for="workDays">What days are you available to work?</label>
											
                                                                    <select id="service__select" name="workdays" class="tk-museo service_select_menu" multiple="multiple">
                                                                    <optgroup label="Management Skills">
                                                                            <option value="monday" name="workdays[]">Monday</option>
                                                                            <option value="tuesday"name="workdays[]">Tuesday</option>
                                                                            <option value="wednesday" name="workdays[]">Wednesday</option>
                                                                            <option value="thursday" name="workdays[]">Thursday</option>
                                                                            <option value="friday" name="workdays[]">Friday</option>
                                                                            <option value="saturday" name="workdays[]">Saturday</option>
                                                                            <option value="sunday" name="workdays[]">Sunday</option>
                                                                           </optgroup>									</select>
                                                                                                                                    </li>
							
									
							
								
							</ol>
							
						</fieldset>
						
						<fieldset>        
						
							<span class="section_title">3. Education Information</span>
							
							<ol class="sect_serv_sele">
                                                            
                                                            
                                                            
                                                                <li>
								
									<label for="school">School Attended</label>
									
									<input id="school" name="school" class="tk-museo" type="text" />
									
								</li>
                                                                
                                                                 <li>
								
									<label for="major">Major</label>
									
									<input id="major" name="major" class="tk-museo" type="text" />
									
								</li>
                                                                
                                                                <li>
								
									<label for="graduate">Did you graduate?</label>
											
									<input type="radio" value="Yes" name="graduate" id="graduate" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="graduate" id="graduate" class="radio" /> <span class="pr_text">No</span>
									
								</li>
                                                                
                                                                 <li>
								
									<label for="cosmetology">Cosmetology School Attended</label>
									
									<input id="cosmetology" name="cosmetology" class="tk-museo" type="text" />
									
								</li>
                                                                
                                                                 <li>
								
									<label for="licensed">Are you licensed?</label>
											
									<input type="radio" value="Yes" name="licensed" id="licensed" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="licensed" id="licensed" class="radio" /> <span class="pr_text">No</span>
									
								</li>
                                                                
                                                                 <li>
								
									<label for="skillets">Please check all skills that apply:</label>
											
                                                                        <select id="service__select" name="skillset" class="tk-museo service_select_menu" multiple="multiple">
                                                                            
                                                                            <optgroup label="Skill Set">
                                                                                    <option value="sewin">Sew-in</option>
                                                                                    <option value="microbraiding">Microbraiding</option>
                                                                                    <option value="lacefrontapplication">Lace Front Application</option>
                                                                                    <option value="Fusion">Fusion</option>
                                                                                    <option value="microlinks">Micro Links</option>
                                                                                    <option value="braidlesssewin">Braidless Sew-in</option>
                                                                                    <option value="cornrows">Corn Rows</option>
                                                                                    <option value="kinkytwists">Kinky Twists</option>
                                                                                    <option value="clipins">Clip Ins</option>
                                                                                    <option value="flatiron">Flat Iron</option>
                                                                                    <option value="spiralcurls">Spiral Curls</option>
                                                                                    <option value="extensionremoval">Extension Removal</option>
                                                                                    <option value="invisibletractbond">Invisible Tract Bond</option>
                                                                                    <option value="haircutting">Hair Cutting</option>
                                                                                    <option value="sewinponytail">Sew-in Ponytail</option>
                                                                                    <option value="weaveclosure">Weave Closure</option>
                                                                                    <option value="relaxer">Relaxer</option>
                                                                                    <option value="permanenthaircolor">Permanent Hair Color</option>
                                                                                    <option value="highlights">Highlights</option>
                                                                                    <option value="invisibleparts">Invisible Parts</option>
                                                                                     <option value="braiding">Braiding</option>
                                                                                    <option value="customwigs">Custom Wigs</option>
                                                                                    <option value="lacefronts">Lace Fronts</option>
                                                                                    <option value="microlinks">Micro Links</option>
                                                                                    <option value="shampooing">Shampooing</option>
                                                                                    <option value="tightenup">Tighten Up</option>
                                                                                    
                                                                                    
                                                                                    
                                                                                    

                                                                                </optgroup>									</select>


                                                                             
                                                                         
                                                                    
								</li>
							
                                                                <li>
								
    <label for="managementSkills">Management skills - Please check all that apply:</label>
                                                                     
                                                                         
        
    <select id="service__select" name="managementskills" class="tk-museo service_select_menu" multiple="multiple">
       	<optgroup label="Management Skills">
	        <option value="book_keeping">Bookkeeping</option>
	        <option value="merchandising">Merchandising</option>
	        <option value="ordering_supplies">Ordering Supplies</option>
	        <option value="preparing_payroll">Preparing Payroll</option>
	        <option value="booking_appointments">Booking Appointments</option>
	        <option value="training">Training</option>
	        <option value="promotions">Promotions</option>
	        <option value="advertising">Advertising</option>
	    </optgroup>									</select>
									
																				                                                                    
								</li>
                                                                <li>
							
	<label for="businesstools">Business Tools - Please check the following tools you are comfortable operating:</label>
                                                                        
                                                                         
	<select id="service__select" name="businesstools" class="tk-museo service_select_menu" multiple="multiple">
       	<optgroup label="Business Tools">
	        <option value="cashregister">Cash Register</option>
	        <option value="computerpc">Computer/PC</option>
	        <option value="creditcardterminal">Credit Card Terminal</option>
	        <option value="telephone">Telephone</option>
	        <option value="voicemail">Voicemail</option>
	        
	    </optgroup>									</select>
									
																				                                                                    
								</li>
                                                                    
                                                                    
								
								

								
							</ol>
							
						</fieldset>
                                            
                                            	<fieldset>
							
							<span class="section_title">4. Employment History</span>
							
							<ol>
								
								<li>
								
                                                                       					
									<label for="employed">Are you currently employed?</label>
											
									<input type="radio" value="Yes" name="employed" id="license" class="radio" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="employed" id="license" class="radio" /> <span class="pr_text">No</span>
									
                                                                        </li>
                                                                
								                                                                   
                                                                        
								<li>
								
									<label for="company">Most recent place of employment </label>
									
									<input id="company" name="company" type="text" class="tk-museo" />
									
								</li>
                                                                
                                                                <li>
								
									<label for="companyaddress">Address </label>
									
									<input id="companyaddress" name="companyaddress" type="text" class="tk-museo" />
									
								</li>
                                                                
                                                                
                                                                <li>
								
									<label for="jobtitle">Job Title</label>
									
									<input id="jobtitle" name="jobtitle" type="text" class="tk-museo" />
									
								</li>
                                                                
                                                                
                                                                <li>
								
									<label for="supervisorsname">Supervisor's Name </label>
									
									<input id="supervisorsname" name="supervisorsname" type="text" class="tk-museo" />
									
								</li>
                                                                
                                                                
                                                                <li>
								
									<label for="phonenumber">Phone Number </label>
									
									<input id="phonenumber" name="phonenumber" type="text" class="tk-museo" />
									
								</li>
                                                                
                                                                 <li>
								
									<label for="reasonforleaving">Reason for Leaving </label>
									
									<input id="reasonforleaving" name="reasonforleaving" type="text" class="tk-museo" />
									
								</li>
                                                                        
                                                                        
                                                                        
                                                                        <li>
								
									<label for="message">Please tell us any additional information you'd like us to consider.</label>
									
									<textarea id="message" name="message" class="tk-museo"><?php echo htmlspecialchars($body); ?></textarea>
									
                                                                        </li>
                                                                        </ol>
                                                                
                                                </fieldset>
						
						<fieldset class="submitfield">
						
							<button type="submit" class="pink_large tk-museo">Submit</button>
							
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