<?php 
if(isset($_POST['SubmitInfo'])){ 
    
    $EmailFrom = $_REQUEST['email']; 
    $EmailTo = "Sales@apnaenergy.com ";//Your email address here
    $Subject = "Commercial Form";

    $businessName = Trim(stripslashes($_POST['businessName'])); 
    $contactName = Trim(stripslashes($_POST['contactName']));
    $telephone = Trim(stripslashes($_POST['telephone']));

    $email = Trim(stripslashes($_POST['email']));
    $radio1 = Trim(stripslashes($_POST['radio1']));
    $radio2 = Trim(stripslashes($_POST['radio2']));
    $NumberMembers = Trim(stripslashes($_POST['NumberMembers']));

    $ServicesAddress1 = Trim(stripslashes($_POST['ServicesAddress1']));
    $ZipCode1 = Trim(stripslashes($_POST['ZipCode1']));
    $ElectricService1 = Trim(stripslashes($_POST['ElectricService1']));

    $ServicesAddress2 = Trim(stripslashes($_POST['ServicesAddress2']));
    $ZipCode2 = Trim(stripslashes($_POST['ZipCode2']));
    $ElectricService2 = Trim(stripslashes($_POST['ElectricService2']));

    $ServicesAddress3 = Trim(stripslashes($_POST['ServicesAddress3']));
    $ZipCode3 = Trim(stripslashes($_POST['ZipCode3']));
    $ElectricService3 = Trim(stripslashes($_POST['ElectricService3']));

    $ServicesAddress4 = Trim(stripslashes($_POST['ServicesAddress4']));
    $ZipCode4 = Trim(stripslashes($_POST['ZipCode4']));
    $ElectricService4 = Trim(stripslashes($_POST['ElectricService4']));

    $ServicesAddress5 = Trim(stripslashes($_POST['ServicesAddress5']));
    $ZipCode5 = Trim(stripslashes($_POST['ZipCode5']));
    $ElectricService5 = Trim(stripslashes($_POST['ElectricService5']));

    $BrokerName = Trim(stripslashes($_POST['BrokerName']));
    $ExistingAccountNumber = Trim(stripslashes($_POST['ExistingAccountNumber']));
    $NotesAdditionalInfo = Trim(stripslashes($_POST['NotesAdditionalInfo']));
   
    // validation
    $validationOK=true;
    if (!$validationOK) {
      echo "Error";
      exit;
    }

    // prepare email body text
    $Body = "";
    $Body .= "Business Name: ";
    $Body .= $businessName;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Contact name: ";
    $Body .= $contactName;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Contact Phone Number: ";
    $Body .= $telephone;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Email address: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "radio1: ";
    $Body .= $radio1;
    $Body .= "\n";

    $Body .= "radio2: ";
    $Body .= $radio2;
    $Body .= "\n";

    $Body .= "Number of Members ";
    $Body .= $NumberMembers;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Services Info ";
    $Body .= "\n";
    $Body .= "\n";
    $Body .= "Line 1 ";
    $Body .= "\n";
    $Body .= "Services Address: ";
    $Body .= $ServicesAddress1;
	$Body .= "/ Services ZipCode: ";
    $Body .= $ZipCode1;
    $Body .= "/ Electric Service: ";
    $Body .= $ElectricService1;
    $Body .= "\n";
    $Body .= "Line 2 ";
    $Body .= "\n";
    $Body .= "Services Address: ";
    $Body .= $ServicesAddress2;
    $Body .= "/ Services ZipCode: ";
    $Body .= $ZipCode2;
    $Body .= "/ Electric Service: ";
    $Body .= $ElectricService2;
    $Body .= "\n";
    $Body .= "Line 3 ";
    $Body .= "\n";
    $Body .= "Services Address: ";
    $Body .= $ServicesAddress3;
    $Body .= "/ Services ZipCode: ";
    $Body .= $ZipCode3;
    $Body .= "/ Electric Service: ";
    $Body .= $ElectricService3;
    $Body .= "\n";
    $Body .= "Line 4 ";
    $Body .= "\n";
    $Body .= "Services Address: ";
    $Body .= $ServicesAddress4;
    $Body .= "/ Services ZipCode: ";
    $Body .= $ZipCode4;
    $Body .= "/ Electric Service: ";
    $Body .= $ElectricService4;
    $Body .= "\n";
    $Body .= "Line 5 ";
    $Body .= "\n";
    $Body .= "Services Address: ";
    $Body .= $ServicesAddress5;
    $Body .= "/ Services ZipCode: ";
    $Body .= $ZipCode5;
    $Body .= "/ Electric Service: ";
    $Body .= $ElectricService5;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Broker Name: ";
    $Body .= $BrokerName;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Existing Account Number: ";
    $Body .= $ExistingAccountNumber;
    $Body .= "\n";
    $Body .= "\n";

    $Body .= "Notes or Additional Info: ";
    $Body .= $NotesAdditionalInfo;
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
		<title>Energy Services For Your Business Texas Commercial Power and Energy | Apna Energy Texas</title>
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
			<img class="img-responsive" src="images/commercialBannerConctact.png" alt="How May I Help You? Contact our Customer Care Specialists. It is our pleasure to server you! Call Today: (877) 999-APNA" />
		</div><!--CLOSE TOP BANNER-->
		
		<div class="row">
			<div class="col-md-6 contactDetail">
				<h3>Energy Services for your Business Texas Commercial Power and Energy</h3>
				<p><strong>Reduce your costs and boost your bottom line!</strong> Everyone could use a reduction in their electricity bill. The reality is that very few businesses have the time, knowledge or resources to obtain the best energy savings that are so badly needed.</p>
				<p><strong>Hire us and weʼll help you save money.</strong> APNA Energy specializes on helping Texas businesses reduce their energy rates over the long term. Stop wasting money on fly by night electricity providers. Get a proven solution for a change!</p>
				<p><strong>How APNA Energy can help you:</strong></p>
				<ul id="listCommercial">
					<li><span>Dedicated to You.</span> We provide you with a personal Account Manager to administer your project from end to end.</li>
					<li><span>Custom Tailored Plan.</span> We take the time to best understand your needs by analyzing your previous energy consumption. This enables us to best propose short and long term solutions.</li>
					<li><span>Low Prices that Stick.</span> Our energy market experts pre-purchase bulk volumes of electricity at the lowest rates. This insures you excellent prices that will not change with the trends. All of our contracts include Nodal & RUC charges.</li>
					<li><span>Energy Efficiency Tips.</span> We will provide special consultation on how to optimize your energy consumption.</li>
					<li><span>No Customer is too Big or too Small.</span> We have accumulated years of experience working with companies of various sizes, types and specialized needs.</li>
					<li><span>Proven Track Record.</span> Our “A” rating at the Better Business Bureau and thousands of commercial customers will attest to our commitment to excellence.</li>
					<li><span>Youʼll Want to Keep Coming Back</span> We make sure to always offer you a reliable service, friendly assistance and competitive contract renewal rates. Thatʼs the APNA Energy way.</li>
				</ul>
				
				<p>Get your FREE, no obligation Commercial Quote Today!</p>
				
			</div><!--CLOSE CONTACT DETAIL-->
  			<div id="contact-form" class="col-md-6 contactAccess">
  			<h3>Request your FREE Commercial Quote Today!</h3>
  			<p>Please fill in all of the details with valid information to get your FREE, no obligation quote. If you need more space to add in addresses, please feel free to indicate that in the space “Notes or Additional Info”. A friendly Customer Care Specialist will contact you in a timely manner.</p>
			<form role="form" action="<?=$PHP_SELF?>" method="post" name="Contact_Form">
			
				<ul class="boxContact row">
					<li class="col-md-6">
						<label for="businessName"><span class="required">*</span>Business Name:</label>
						<input type="text" id="businessName" name="businessName" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['businessName'] : '' ?>" placeholder="company name" required autofocus />
							
		
					</li>
					<li class="col-md-6">
						 <label for="contactName"><span class="required">*</span>Contact name: </label>
    					<input type="text" id="contactName" name="contactName" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['contactName'] : '' ?>" placeholder="Contact name" required autofocus />
					</li>
					<li class="col-md-6">				
						<label for="telephone"><span class="required">*</span>Contact Phone Number:</label>
               			<input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" required autofocus />
                
					</li>
					<li class="col-md-6">
						 <label for="email"><span class="required">*</span>Email address:</label>
                			<input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johndoe@example.com" required />
                
					</li>
				</ul>
				
				<div class="boxContact">
					<h6>Please select one of the following:</h6>
						<input class="radioCustom" type="radio" name="radio1" id="Radio1" value="Switch - Currently have electric service at the service location with another provider." />
						<label class="radio" for="Radio1"<?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['enquiry'] == 'General') ? "selected='selected'" : '' ?>>Switch - Currently have electric service at the service location with another provider.</label>
						<input class="radioCustom" type="radio" name="radio2" id="Radio2" value="Move-in - Currently do not have service in your name at the service location." />
						<label class="radio" for="Radio2">Move-in - Currently do not have service in your name at the service location.</label>
							<div class="numberBox">
								<label for=""> <span>*</span>Number of Meters</label>
									<input class="numberMeter" type="text" name="NumberMembers" />
							</div><!--CLOSE NUMBER BOX-->
				</div><!--CLOSE BOX CONTACT-->
				
				<div class="boxContact row">
					<ul class="col-md-4 line1">
						<li>
							<h3>Full Service Address</h3>
						</li>
						<li>
							<input type="text" name="ServicesAddress1" />
						</li>
						<li>
							<input type="text" name="ServicesAddress2" />
						</li>
						<li>
							<input type="text" name="ServicesAddress3" />
						</li>
						<li>
							<input type="text" name="ServicesAddress4" />
						</li>
						<li>
							<input type="text" name="ServicesAddress5" />
						</li>
					</ul>
					
					<ul class="col-md-4 zip">
						<li>
							<h3>Zip Code</h3>
						</li>
						<li>
							<input type="text" name="ZipCode1"/>
						</li>
						<li>
							<input type="text" name="ZipCode2"/>
						</li>
						<li>
							<input type="text" name="ZipCode3"/>
						</li>
						<li>
							<input type="text" name="ZipCode4"/>
						</li>
						<li>
							<input type="text" name="ZipCode5"/>
						</li>
					</ul>
					
					<ul class="col-md-4 line1">
						<li>
							<h3>Electric Service Identifier (ESI)</h3>
						</li>
						<li>
							<input type="text" name="ElectricService1"/>
						</li>
						<li>
							<input type="text" name="ElectricService2"/>
						</li>
						<li>
							<input type="text" name="ElectricService3"/>
						</li>
						<li>
							<input type="text" name="ElectricService4"/>
						</li>
						<li>
							<input type="text" name="ElectricService5"/>
						</li>
					</ul>
					
					
					
				</div><!--CLOSE BOX CONTACT-->
				
				<div class="boxContact lastBox">
					<label class="col-md-8" for="BrokerName">Broker Name (if applicable)</label>
					<input class="col-md-4" type="text" name="BrokerName"/>
					<label class="col-md-8" for="ExistingAccountNumber">Existing Account Number (if applicable)</label>
					<input class="col-md-4" type="text" name="ExistingAccountNumber"/>
					<label class="col-md-4" for="NotesAdditionalInfo">Notes or Additional Info </label>
					<textarea class="col-md-8" name="NotesAdditionalInfo" id=""></textarea>
					
					
				</div><!--CLOSE BOX CONTACT-->
				
				<input class="submitBtnLast btn2" type="submit" value="Submit" name="SubmitInfo"/>

				
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


				
			</form><!--CLOSE COMMERCIAL CONTACT-->

					
					
  			</div><!--CLOSE CONTACT ACCESS-->
  		
			
		</div><!--ROW CONTACT-->
	</div><!--CLOSE CONTACT-->

</div><!--CLOSE MAIN-->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="_/js/plugins.js"></script>
	<!--<script src="_/js/modernizr-1.7.min.js"></script>-->


<?php
include "_/components/php/footer.php";
?>