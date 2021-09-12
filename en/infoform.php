<!DOCTYPE html>
<html>
<head>
	 <link rel="shortcut icon" href="../images/familytreeEN.jpg" />
	<meta charset="UTF-8">
	<meta name="description" content="موقع ال دمشقية,عائلة دمشقيه,Demachkieh Website,Demashkieh family" />
	<meta name="keywords" content="موقع ال دمشقية,عائلة دمشقيه,Demachkieh Website,Demashkieh family" />
	<meta name="author" content="Marwan Mahmoud Demachkieh"/>
	
	<title>Demachkieh - Forms</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<div id="header">
<div class="language" align="right">
<a href="../infoform.php" style="font-size:18px"> عربي</a>

</div>

		<div class="genealogy">
		<a href="genealogy.html"> Genealogy</a>


</div>
						
		<div class="section">
			<a href="index.html"><img src="../images/logo.png" width="250px" height="100px" alt="Image"></a>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="policy.html">Policy</a>
				</li>
				<li>
					<a href="legal.html">Legal Certificate</a>
				</li>
				<li>
					<a href="history.html">History</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
			<ul>	<li>
					<a href="membersnumber.html">Members/Number</a>
				</li>
				<li>
					<a href="membersname.html">Members/A-z</a>
				</li>
				
				<li>
					<a href="familytree.html">Family Tree</a>
				</li>
				<li class="current">
					<a href="infoform.php">Register/Update</a>
				</li>
				<li>
					<a href="donation.html">Donations</a>
				</li>
			</ul>
		</div>
		
		
		<span></span>
	</div>
	<div id="body">
		<div>
			<div>
				<div>
					<div id="content">
						
						<h2>Info Form</h2>
						<div>
							
							<?php
								$errors = array();
								$missing = array();
								$i = 0;
								if (isset($_POST['send'])) {
									$to = 'marwandim@hotmail.com';
									$subject = 'Demachkieh Family Information Form Submission';
									$expected = array('requestType','name','father','mother','sijil','birthDate','birthPlace','email','gender','profession','workAddress','homeAddress','fax','workPhone','homePhone','kids','maritalStatus','spouseName','spouseWork','help','captcha');
									$required = array('requestType','name','father','mother','sijil','birthDate','birthPlace','captcha');
									$headers = "From: infoform@demachkieh.org\r\n";
									$headers .= "Content-type: text/plain; charset=utf-8";
									$authenticate = null;
									require '../includes/mail_process.php';
									if ($mailSent) {
										echo '<h3> Information Submitted Successfully</h3>
											 <p>We will get back to you once we review your request.</p>';
									}
								}
								if(!isset($_POST['send']) || !$mailSent)
								{
							?>
								<h3>Association Registration / Information Update</h3>
								
								<p>
									<strong>You would like to join the Demachkieh Family Association or you are an existing member and would like to update some information?</strong>
								</p>
								<p>
									Please fill out the form below and complete all the fields if possible. Don't forget to fill out your email address or phone number so we can get back to you once your information is processed.
								</p>
								<form name="infoform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<table>
										<tr>
											<td>Request Type:
												<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
											</td>
											<td>
													<select name="requestType">
														<option value=""  selected> -- select a request type -- </option>
														<option value="Register"
														<?php
															if (($errors || $missing) ) {
																if (isset($$expected[$i]) && $$expected[$i] == "Register" )
																{
																	echo 'selected';
																	
																}
															}
														?>>New Member Registration</option>
														<option value="Update"
														<?php
															if (($errors || $missing) ) {
																if (isset($$expected[$i]) && $$expected[$i] == "Update" )
																{
																	echo 'selected';
																	
																}
															}
														?>>Member Information Update</option>
														<?php
														
												$i++;
												?>
													</select>
												</td>
											</tr>
										<tr>
										<td>Name:
											<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										<td>
										 <input type="text" name="name"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Father's Name:
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										<td><input type="text" name="father"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										 <br>
										</td>
										</tr>
										<tr>
										<td>Mother's Name:
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										<td><input type="text" name="mother"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>ID Number and Place:
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										</td>
										<td><input type="text" name="sijil"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Birth Date:
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										</td>
										<td><input type="text" name="birthDate"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												> 
										 <br>
										</td>
										</tr>
										<tr>
										<td>Place of Birth:
										 <?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										</td>
										<td><input type="text" name="birthPlace"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Email:
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning">Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning">Invalid!</span>
												<?php } ?>
										</td>
										<td><input type="text" name="email"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										 <br>
										</td>
										</tr>
										<tr>
										<td>Male/Female:
										
										</td>
										<td><input type="radio" name="gender" value="Male"
												<?php
												if (($errors || $missing) ) {
													if (isset($$expected[$i]) && $$expected[$i] == "Male" )
													{
														echo 'checked="checked"';
														
													}
												}
												?>> Male
										<input type="radio" name="gender" value="Female"
												<?php
												if (($errors || $missing) ) {
													if (isset($$expected[$i]) && $$expected[$i] == "Female" )
													{
														echo 'checked="checked"';
														
													}
													$i++;
												}
												?>> Female
										
										</td>
										</tr>
										
										<tr>
										<td>Profession:
										
										</td>
										<td><input type="text" name="profession"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												> 
										<br>
										</td>
										</tr>
										<tr>
										<td>Job Address:
										
										</td>
										<td><textarea cols="20" rows="2" name="workAddress">
												<?php
												if ($errors || $missing) {
													echo htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8');
												}
												?>
												</textarea>
										<br>
										</td>
										</tr>
										<tr>
										<td>Residence Address:
										
										</td>
										<td><textarea cols="20" rows="2" name="homeAddress">
												<?php
												if ($errors || $missing) {
													echo htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8');
												}
												?>
												</textarea>
										<br>
										</td>
										</tr>
										<tr>
										<td>Fax:
										
										</td>
										<td><input type="text" name="fax"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Job Phone:
										
										</td>
										<td><input type="text" name="workPhone"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Home Phone:
										
										</td>
										<td><input type="text" name="homePhone"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Children Names:
										
										</td>
										<td><input type="text" name="kids"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												> 
										<br>
										</td>
										</tr>
										<tr>
										<td>Marital Status:
										
										</td>
										<td><input type="radio" name="maritalStatus" value="Married" <?php
												if (($errors || $missing) ) {
													if (isset($$expected[$i]) && $$expected[$i] == "Married" )
													{
														echo 'checked="checked"';
													}
												}
												?>
												>  Married
										<input type="radio" name="maritalStatus" value="Divorced" <?php
												if (($errors || $missing) ) {
													if (isset($$expected[$i]) && $$expected[$i] == "Divorced" )
													{
														echo 'checked="checked"';
													}
												}
												?>
												> Divorced
										<input type="radio" name="maritalStatus" value="Single" <?php
												if (($errors || $missing) ) {
													if (isset($$expected[$i]) && $$expected[$i] == "Single" )
													{
														echo 'checked="checked"';
													}
													$i++;
												}
												?>
												> Single
										</td>
										</tr>
										<tr>
										<td>Spouse Name:
										
										</td>
										<td><input type="text" name="spouseName"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Spouse Job:
										
										</td>
										<td><input type="text" name="spouseWork"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												>
										<br>
										</td>
										</tr>
										<tr>
										<td>Donation:
										
										</td>
										<td><input type="text" name="help"
												<?php
												if ($errors || $missing) {
													echo 'value="' . htmlentities($$expected[$i++], ENT_COMPAT, 'utf-8') . '"';
												}
												?>
												> 
										<br>
										</td>
										</tr>
										
										<tr>
										<td><strong> Annual Fees:</strong>
										
										</td>
										<td><strong>75,000 L.L.</strong>
										
										</td>
										
										</tr>
										<tr><td><br><br><br></td></tr>
										<tr>
										<td>Verification Code: 
										<?php if ($missing && in_array($expected[$i], $missing)) { ?>
												<span class="warning"> Required*</span>
												<?php } elseif ($errors && isset($errors[$expected[$i]])) { ?>
												<span class="warning"> No Match!</span>
												<?php } ?>
										</td>
										<td>		  
											<p>
											 <img id="captcha" src="../includes/captcha.php" width="160" height="45" border="1" alt="CAPTCHA">
												  <small><a href="#" onclick="
													document.getElementById('captcha').src = '../includes/captcha.php?' + Math.random();
													document.getElementById('captcha_code').value = '';
													return false;
												  ">refresh</a></small>
											</p>
											<input id="captcha_code" class="captcha" type="text" size="6" maxlength="5" name="captcha" value="">
										 <br>
										</td>
										</tr>
										
										<tr>
											 
											<td></td>
											<td>
												<input type="submit" value="Send" name="send">
											</td>
										</tr>
										</p>
									</table>
								</form>
						<?php
							}
						?>
						</div>
					</div>
					<div id="sidebar">
						<h3>Family News and Updates</h3>
						<ul>
							<li id="yellowbox">
								<h2>Brand New Website</h2>
								<img src="../images/logo.png" alt="image"/>
								<p>
									<br>
									New and Updated <br><span>Family website</span><br>
								</p>
							</li>
							<li id="pinkbox">
								<h2>Marwan Mahmoud Dimachkieh</h2>
								<p>
									All Information has been gathered, verified, stored, and published by me.
									<br><br><span><span><span>Stay tuned for updates.</span></span></span>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		
		<div>
			<p class="footnote">
				&copy; 2019 Marwan Mahmoud Demachkieh. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>
