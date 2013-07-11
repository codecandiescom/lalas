<?php $page = 'booknow'; include("sections/sections_head.php"); ?>

	<?php include 'sections/sections_masthead.php'; ?>
		
		<?php include 'sections/sections_subbanner.php'; ?>
		
		<section id="content_wrap">
			
			<div id="content_wrap_inner">
			
				<div class="cwi_col_left">
				                            
					<?php
						$to='info@lalassalon.com';
						$messageSubject='New booking';
						$confirmationSubject='Booking confirmation with LaLa\'s';
						$confirmationBody="This message is to confirm your appointment with LaLa's.\r\n";
						$name='';
						$email='';
						$body='';
						$displayForm=true;	
						
					
									
						if ($_POST){
							
							
						// digitalbearmedia concatenation 						
							$body1 = "Name: " .	$_POST['name'] .  "Phone: " . $_POST['phone']  . "Date: " . $_POST['datepicker']  . "Time: " . $_POST['time-hour'] . " : " . $_POST['time-min']  . "Service: " . $_POST['service_main_select'] . "s: " . $_POST['service__select']  . "Private Room: " .  $_POST['privateroom'] . "Additional Details: " . $_POST['body'];	
							
	$mailConcatenation = "Name: " .	$_POST['name'] . "\r\n" . "Phone: " . $_POST['phone'] . "\r\n" . "Date: " . $_POST['datepicker'] . "\r\n" . "Time: " . $_POST['time-hour'] . ":" . $_POST['time-min'] . "\r\n" . "Service: " . $_POST['service_main_select'] . "\r\n" . "s: " . $_POST['service__select'] . "\r\n" . "Private Room: " .  $_POST['privateroom'] . "\r\n" . "Additional Details: " . $_POST['body'] . "\r\n";								
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
                                    
					<h2>Thanks for booking with us!</h2>
					
					
					<p>
					You're almost done completing the booking process! We will confirm your booking with you within the next 24 hrs. Thanks! 
					</p>
					
					<?php
						echo '<p>'&nbsp;'</p>';
						}else{ //the message could not be sent
					?>
					<h2>We're Sorry ...</h2>
					<p>
					  Something went wrong when the server tried to send your message.
					  This is usually due to a server error, and is probably not your fault.
					  We apologize for any inconvenience caused.
					</p>

					<?php
						}
						}else if ($crack) { //cracking attempt
					?>
					<h2>We're Sorry ...</h2>
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
                                        
                    <h2>A new you awaits. Let the transformation begin!</h2>
					
					<p>Fill out our brief form below. Please fill in all required fields*.</p>

					<form action="booknow.php" id="booknow" method="post">
						
						<fieldset>
						
							<span class="section_title">1. Your details</span>
							
							<ol>
							
								<li>
								
									<label for="name">Name*</label>
									
									<input id="name" name="name" type="text" class="tk-museo" required autofocus />
									
								</li>
								
								<li>
								
									<label for="email">Email*</label>
									
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
							
							<ol class="sect_serv_sele">
							
								<li>
								
									<label for="service_main_select">What service would you like to select?*</label>
											
									<select id="service_main_select" name="service_main_select" class="tk-museo service_select_menu" multiple="multiple">
		
			<optgroup label="Hair-Weaving Services">	
	        <option value="hws_quick_weave_45">Quick Weave: $45.00</option>
	        <option value="hws_super_style_50">Super Style: $50.00</option>
	        <option value="hws_deluxe_style_99.99">Deluxe Style: $99.99</option>
	        <option value="hws_supreme_style_85">Supreme Style: $85.00</option>
	        <option value="hws_ultimate_style_75">Ultimate Style: $75.00</option>
	        <option value="hws_extreme_style_65">Extreme Style: $65.00</option>
	        </optgroup>
	        
	        </select>
        
						        </li>
						        
						        <li>
								
									<label for="service__select">Any s?</label>
        
    <select id="service__select" name="service_select" class="tk-museo service_select_menu" multiple="multiple">
      <optgroup label="A La Carte Services">
	        <option value="lcs_shampoo_blowdry_15">Shampoo &amp; Blow Dry: $15.00</option>
	        <option value="lcs_partial_relaxer_17">Partial Relaxer (hairline only): $17.00</option>
	        <option value="lcs_partial_color_10">Partial Color Rinse (hairline only): $10.00</option>
	        <option value="lcs_razor_cut_20">Razor Cut: $20.00</option>
	        <option value="lcs_basic_layerred_cut_15">Basic Layered Cut (Medium to Long Length): $15.00</option>
	        <option value="lcs_designer_cut_25">Designer Cut (Asymmetrical, A-line Bob, etc): $25.00</option>
	        <option value="lcs_extension_straigtening_15">Extension Straightening: $15.00</option>
	        <option value="lcs_body_curls_20">Body Curls: $20.00</option>
	        <option value="lcs_spiral_curls_25">Spiral Curls: $25.00</option>
		  </optgroup>

		<optgroup label="Specialty Weave Styles">
	        <option value="sws_ponytail_40">Ponytail: $40.00</option>
	        <option value="sws_sewin_ponytail_45">Sew-in Ponytail: $45.00</option>
	        <option value="sws_27piece_quickweave_80">27 Piece Quick-Weave (includes Designer Cut &amp; Style): $80.00</option>
	        <option value="sws_invisible_part_22">Invisible Part (bonded with glue protect): $22.00</option>
	        <option value="sws_fullhead_retighten_25">Full-Head Retighten: $25.00</option>
	        <option value="sws_single_track_sew_10">Single Track Sew: $10.00</option>
	        <option value="sws_single_track_bond_5">Single Track Bond: $5.00</option>
	        <option value="sws_weave_removal_25">Weave Removal: $25.00</option>
	    </optgroup>
		
		<optgroup label="Wig Services">
	        <option value="wig_sewon_49">Wig Sew On: $49.00</option>
	        <option value="wig_trim_49">Wig Trim: $10.00</option>
	        <option value="wig_trim_straighten_25">Wig Trim &amp; Straighten: $25.00</option>
	        <option value="wig_trim_curl_30">Wig Trim &amp; Curl: $30.00</option>
	        <option value="wig_braided_wig_prep_10">Braided Wig Preparation: $10.00</option>
	        <option value="wig_lace_frontal_app_35">Lace Frontal Application: $35.00</option>
	        <option value="wig_full_lace_wig_49">Full Lace Wig Application (human hair): $49.00</option>
	        <option value="wig_full_lace_wig_synth_45">Full Lace Wig Application (synthetic): $45.00</option>
		</optgroup>
		
		<optgroup label="Braids">
	        <option value="braids_cornrows"_15>Cornrows (front): $15.00</option>
	        <option value="braids_wo_hair_25">Full Braids (w/o Hair) &raquo; Regular: $25.00</option>
	        <option value="braids_wo_hair_beads_40">Full Braids (w/o Hair) &raquo; With beads: $40.00</option>
	        <option value="braids_with_hair_45">Full Braids (Hair Added) &raquo; Regular: $45.00</option>
	        <option value="braids_with_hair_60">Full Braids (Hair Added) &raquo; With beads: $60.00</option>
	        <option value="braids_kids_30">Full Braids &raquo; For kids: $30.00</option>
		</optgroup>
		
		<optgroup label="Styling Services">		
			<option value="sty_sham_mois_cond_stra_25">Shampoo, Moisturizing Conditioner &amp; Straighten $25.00</option>
	        <option value="sty_sham_inte_reco_cond_stra_35">Shampoo, Intensive Reconstructing Conditioner, &amp; Straighten $35.00</option>
	        <option value="sty_rela_cond_stra_39">Relaxer, Conditioner &amp; Straighten $39.99</option>
	        <option value="sty_designer_cut_long_15">Designer Cut &raquo; Long $15.00</option>
	        <option value="sty_designer_cut_short_20">Designer Cut &raquo; Short $20.00</option>
	        <option value="sty_ceramic_press_30">Ceramic Press $30.00</option>
	        <option value="sty_crimps_10">Crimps $10.00</option>
        </optgroup>
        
        <optgroup label="Conditioning Services">
	        <option value="con_deep_mois_cond_7">Deep Moisturizing Conditioner $7.00</option>
	        <option value="con_hot_oil_treatment_10">Hot Oil Treatment $10.00</option>
	        <option value="con_prot_trea_10">Protein Treatment $10.00</option>
	        
	        <option value="che_virg_rela_55">Virgin Relaxer $55.00</option>
	        <option value="che_part_10">Partial (black & sides) $10.00</option>
	        <option value="che_colo_rins_15">Color Rinse $15.00</option>
	        <option value="che_sing_proc_colo_20">Single Process Color $20.00</option>
	        <option value="che_doub_proc_colo_30">Double Process Color $30.00</option>
	        <option value="che_highlights_30">Highlights $30.00</option>
	    </optgroup>
	    
	    <optgroup label="Lash and Brow Bar">
	        <option value="lbb_eyeb_wax_8" class="highlight">Eyebrow &raquo; Wax $8</option>
	        <option value="lbb_eyeb_razo_7">Eyebrow &raquo; Razor $7</option>
	        <option value="lbb_chin_wax_5">Chin Wax $5</option>
	        <option value="lbb_lip_wax_5">Lip Wax $5</option>
	        <option value="lbb_eye_brow_tint_7">Eye Brow Tint $7</option>
	        <option value="lbb_huma_hair_eyel_stri_12">100% Human Hair Eyelashes &raquo; Strip $12</option>
	        <option value="lbb_huma_hair_eyel_indi_20">100% Human Hair Eyelashes &raquo; Individuals $20</option>
		</optgroup>								
									</select>
									

									
								</li>
								
								<li>
								
									<label for="privateroom">Private Room?* (Add $20 service charge for private room)</label>
											
									<input type="radio" value="Yes" name="privateroom" id="privateroom" class="privateroom" /> <span class="pr_text">Yes</span>
									<input type="radio" value="No" name="privateroom" id="privateroom" class="privateroom" /> <span class="pr_text">No</span>
									
								</li>
								
								<li>
								
									<label for="message">Any additional details for the stylist?</label>
									
									<textarea id="message" name="body" class="tk-museo"></textarea>
									
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
					
					<?php include 'sections/sections_ads.php'; ?>
					
				</div><!--/cwi_col_right-->
				
			</div><!--/content_wrap_inner-->
			
		</section><!--/content_wrap-->
		
		<?php include 'sections/sections_map.php'; ?>
		
		<?php include 'sections/sections_foot.php'; ?>