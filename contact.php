<?php 
if(isset($_POST['submitform'])){ 
    
    $EmailFrom = $_REQUEST['email']; 
    $Subject = "Contact Us";

    $name = Trim(stripslashes($_POST['name'])); 
    $lastname = Trim(stripcslashes($_POST['lastname'])); 
    $email = Trim(stripslashes($_POST['email'])); 
    $telephone = Trim(stripcslashes($_POST['telephone']));
    $company = Trim(stripslashes($_POST['company']));
    $enquiry = Trim(stripcslashes($_POST['enquiry']));
    $message = Trim(stripcslashes($_POST['message']));

    if ($enquiry == 'CustomerCare') {
    	$EmailTo = 'customercare@apnaenergy.com'; // Your email address here
    }
    if ($enquiry == 'Sales') {
    	$EmailTo = 'sales@apnaenergy.com'; // Your email address here
    }
    if ($enquiry == 'Suggestions') {
    	$EmailTo = 'suggestions@apnaenergy.com'; // Your email address here
    }
    if ($enquiry == 'ApnaCaresProjects') {
    	$EmailTo = 'wecare@apnaenergy.com'; // Your email address here
    }
    if ($enquiry == 'Complaints') {
    	$EmailTo = 'suggestions@apnaenergy.com'; // Your email address here
    }
    if ($enquiry == 'Jobs') {
    	$EmailTo = 'hr@apnaenergy.com'; // Your email address here
    }
    
    
    // validation
    $validationOK=true;
    if (!$validationOK) {
      echo "Error";
      exit;
    }

    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";

    $Body .= "Last Name: ";
    $Body .= $lastname;
    $Body .= "\n";

    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";

    $Body .= "Phone: ";
    $Body .= $telephone;
    $Body .= "\n";

    $Body .= "Company: ";
    $Body .= $company;
    $Body .= "\n";

    $Body .= "Enquiry: ";
    $Body .= $enquiry;
    $Body .= "\n";

    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";

    // send email 
    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    ?> 
        <script language="javascript">
            window.onload = function() {
            document.getElementById("success").style.display="block";; 
            }
        </script>
    <?php
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact Apna Energy Texas</title>
		<link href="_/css/contact.css" rel="stylesheet" media="screen">
		
<?php
include "_/components/php/head-subpages.php";
?>

<?php
include "_/components/php/header.php";
?>


<div id="main" class="container">
	<div class="contact row">
		<div class="topBanner">
			<img class="img-responsive" src="images/bannerContact.png" alt="How May I Help You? Contact our Customer Care Specialists. It is our pleasure to server you! Call Today: (877) 999-APNA" />
		</div><!--CLOSE TOP BANNER-->
		
		<div class="row">
			<div class="col-md-6 contactDetail">
				<h3>Who Turned off the Lights? <br /> 24-hour Power Outage Contact </h3>
					<p>In the event you experience an outage, please call the 
corresponding Transmission and Distribution Utility (TDU) your service area. If you have any questions regarding your service area, call us at <strong>1-877-999-2762.</strong>
</p>
			<ul class="row contactNumbers">
				<li>
					<h5>ONCOR Delivery Company Dallas & Fort Worth Service Area:</h5>
					<p><a target="_blank" href="http://stormcenter.oncor.com/default.html">View Current Outage Map</a></p>
					<span class="num">1-888-313-4747</span>
				</li>
				<li>
					<h5>CenterPoint Houston Area: </h5>
					<p><a target="_blank" href="http://gis.centerpointenergy.com/outagetracker/index.html">View Current Outage Map</a></p>
					<span class="num">1-800-332-7143</span>
				</li>
				<li>
					<h5>AEP Central CPL Service Area:</h5>
					<p><a target="_blank" href="https://www.aeptexas.com/outages/report/">View Current Outage Map &amp; Report</a></p>
					<span class="num">1-866-223-8508</span>
				</li>
				<li>
					<h5>Texas-New Mexico Power Company TNMP Service Area: </h5>
					<p><a target="_blank" href="http://www.tnmp.com/customers/power-outages.htm?source=m0tl2">View Current Outage Map & Report</a></p>
					<span class="num">1-888-866-7456</span>

				</li>
				<li>
					<h5>AEP North Texas WTU Service Area:</h5>
					<p><a target="_blank" href="https://www.aeptexas.com/outages/report/">View Current Outage Map & Report</a></p>
					<span class="num">1-866-223-8508</span>
				</li>
				<li>
					<h5>Sharyland Mission/McAllen:</h5>
					<h5>Brady, Celeste, Colorado City, and Stanton:</h5>
					<span class="num">1-956-668-9551</span>
					<span class="num num2">1-800-442-8688</span>
				</li>
			</ul>
			
			
			</div><!--CLOSE CONTACT DETAIL-->
  			 <div id="contact-form" class="col-md-6 contactAccess">
  				<h3><br />Contact by email </h3>
 
  				<p>Thank you for taking an interest in APNA Energy. We welcome all questions
					comments and feedback that you make have. Experience the total quality 
					customer care service that you deserve! </p>
					
					<form class="row" method="post" action="<?=$PHP_SELF?>">
						<ul class="col-md-6 oneIn">
							<li>
								<label for="name"><span class="required">*</span>Your first name:</label>
								<input type="text" id="name" name="name" placeholder="John" required autofocus tabindex="1"required autofocus />
							</li>
							<li>
								<label for="telephone"><span class="required">*</span>Your phone number:</label>
               					 <input type="tel" id="telephone" name="telephone" tabindex="3"required autofocus />
                
                
							</li>
							<li>
								<label for="company"><span class="required">*</span>Your company name:</label>
								<input type="text" id="company" name="company" placeholder="company" required autofocus tabindex="5"required autofocus />
							</li>
						</ul>
						
						<ul class="col-md-6 oneIn">
							<li>
						        <label for="lastname"><span class="required">*</span>Your Last name: </label>
                					<input type="text" id="lastname" name="lastname" placeholder="Doe" required autofocus tabindex="2"required autofocus />
                
							</li>
							<li>
								 <label for="email"><span class="required">*</span>Your email address:</label>
                					<input type="email" id="email" name="email" placeholder="johndoe@example.com" required tabindex="4"required autofocus />
                
							</li>
							<li>
								<label for="enquiry"><span class="required">*</span>In regards to</label>
								 <select id="enquiry" name="enquiry" required>
							     	<option value="CustomerCare">Customer Care</option>
                    				<option value="Sales">Sales</option>
                   					<option value="Suggestions">Suggestions</option>
                   					<option value="ApnaCaresProjects">Apna Cares Projects</option>
                   					<option value="Complaints">Complaints</option>
                   					<option value="Jobs">Jobs</option>
            					</select>
							</li>
						</ul>
						
						<div class="message">
							 <label for="message">Message: <span class="required">*</span></label>
                				<textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"></textarea>
                
							<input class="submitBtnLast" type="submit" name="submitform" id="submit-button" value="submit" />
						</div><!--CLOSE MESSAGE-->

						<div class="errorBox">
						<?php
							//init variables
							$cf = array();
							$sr = false;
							
							if(isset($_SESSION['cf_returndata'])){
								$cf = $_SESSION['cf_returndata'];
							 	$sr = true;
							}
							 ?>
				            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
				                <li id="info">There were some problems with your form submission:</li>
				                <?php 
								if(isset($cf['errors']) && count($cf['errors']) > 0) :
									foreach($cf['errors'] as $error) :
								?>
				                <li><?php echo $error ?></li>
				                <?php
									endforeach;
								endif;

								?>
				            </ul>	          
								<p id="success">Thanks for your message! We will get back to you ASAP!</p>
						</div><!--CLOSE ERROR BOX-->
							
					</form>

					 <?php unset($_SESSION['cf_returndata']); ?>
  			</div><!--CLOSE CONTACT ACCESS-->
  			
		</div><!--ROW CONTACT-->
		<div class="address row">
  				<div class="col-md-6">
					<h5>Corporate Address:</h5>
					<p>7322 Southwest Freeway Arena Tower# 1 Suite 730 <br />Houston, TX  77074. </p>
					<h5>Mailing Address:</h5>
					<p>P.O. Box 4728 Houston, TX 77210-4728</p>
					<h5>Hour Of Operation:</h5>
					<p>Monday-Friday 8:00 a.m to 6:00p.m</p>
  				</div>
  				<div class="col-md-6">
  					<h5>Telephone:</h5>
  					<p>Local: 713-270-5333
  					<br />Toll Free: 1-877-999-APNA (2762)</p>
  					<h5>FAX:</h5>
  					<p>Toll Free: 1-8777-728-APNA (2762)</p>
  				</div>
  			
				
			</div><!--CLOSE ADDRESS-->
			

	</div><!--CLOSE CONTACT-->

</div><!--CLOSE MAIN-->

	
	<script src="_/js/plugins.js"></script>
	<!--<script src="_/js/modernizr-1.7.min.js"></script>-->
	

<?php
include "_/components/php/footer.php";
?>
