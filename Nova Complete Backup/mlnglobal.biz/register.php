<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
select.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm">
  <center><img src="https://demo.novasolutions.co.in/images/mln-logo.png" height="30%" width="30%"/></center>
  <h1>Enroll @ MLN GLOBAL BIZ</h1>
  <!-- One "tab" for each step in the form: -->
  
  <div class="tab">Source Code:
    <p><input placeholder="Source Code..." oninput="this.className = ''" name="sourcecode" id="sourcecode"></p>
    <input type="button" name="Submit" value="Add" onclick="test()">

  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="First Name" oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last Name..." oninput="this.className = ''" name="lname"></p>
    <p><input type="date" oninput="this.className = ''" name="phone"></p>
    <p><select name="state" oninput="this.className = ''" name="phone">
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
      				<option value="Assam">Assam</option>
      				<option value="Bihar">Bihar</option>
      				<option value="Chhattisgarh">Chhattisgarh</option>
			        <option value="Goa">Goa</option>
  			        <option value="Gujurat">Gujurat</option>
   			        <option value="Haryana">Haryana</option>
   			        <option value="Himachal Pradesh">Himachal Pradesh</option>
   			        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
   			        <option value="Jharkhand">Jharkhand</option>
   			        <option value="Karnataka">Karnataka</option>
   			        <option value="Kerala">Kerala</option>
   			        <option value="Madhya Pradesh">Madhya Pradesh</option>
   			        <option value="Maharashtra">Maharashtra</option>
   			        <option value="Manipur">Manipur</option>
   			        <option value="Meghalaya">Meghalaya</option>
   			        <option value="Mizoram">Mizoram</option>
   			        <option value="Nagaland">Nagaland</option>
   			        <option value="Odisha">Odisha</option>
   			        <option value="Punjab">Punjab</option>
   			        <option value="Rajasthan">Rajasthan</option>
   			        <option value="Sikkim">Sikkim</option>
   			        <option value="Tamil Nadu">Tamil Nadu</option>
   			        <option value="Tripura">Tripura</option>
   			        <option value="Uttar Pradesh">Uttar Pradesh</option>
   			        <option value="Uttarakhand">Uttarakhand</option>
   			        <option value="West Bengal">West Bengal</option>
   			        <option value="Telangana">Telangana</option> 
    </select></p>
    <p><input placeholder="Contact Details One..." oninput="this.className = ''" name="contact1"></p>
    <p><input placeholder="Contact Details Two..." oninput="this.className = ''" name="contact2"></p>
    <p><input placeholder="Correspondence Address..." oninput="this.className = ''" name="address"></p>
    <p><input placeholder="Pan no...." oninput="this.className = ''" name="panno"></p>
  </div>
  <div class="tab">Loan Info:
    <p><input placeholder="Bank Name/Financial Institution..." oninput="this.className = ''" name="bankname"></p>
    <p><input placeholder="Loan A/C No..." oninput="this.className = ''" name="loanacno"></p>
    <p><input type="date" oninput="this.className = ''" name="fname"></p>
    <p><select name="loantype" oninput="this.className = ''" name="phone">
      <option value="Home Loan">Home Loan</option>
      				<option value="Personal Loan">Personal Loan</option>
      				<option value="Loan Against Property">Loan Against Property</option>
      				<option value="Unsecured Business Loan">Unsecured Business Loan</option>
      				<option value="Over Draft Loan">Over Draft Loan</option>
			        <option value="Cash Credit Loan">Cash Credit Loan</option>
  			        <option value="Car Loan">Car Loan</option>
   			        <option value="Car Refinance">Car Refinance</option>
   			        <option value="Gold Loan">Gold Loan</option>
   			        <option value="Two Wheeler Loan">Two Wheeler Loan</option>
   			        <option value="Credit Card EMI Loan">Credit Card EMI Loan</option>
   			        <option value="Request Monotorium Extension">Request Monotorium Extension</option>
   			        <option value="Construction Loan">Construction Loan</option>
   			        <option value="Debt Restructing Loan">Debt Restructing Loan</option>
   			        <option value="Request Balance Transfer Loan">Request Balance Transfer Loan</option>
   			        <option value="FCNR Loan">FCNR Loan</option>
   			        <option value="Export Credit Loan">Export Credit Loan</option>
   			        <option value="Buyer's Credit Loan">Buyer's Credit Loan</option>
   			        <option value="Bank Gaurantee">Bank Gaurantee</option> 
    </select></p>
    <p><input placeholder="Current EMI..." oninput="this.className = ''" name="currentemi"></p>
    <p><input placeholder="ROI %..." oninput="this.className = ''" name="roi"></p>
    <p><input placeholder="Total Tenure..." oninput="this.className = ''" name="totaltenure"></p>
    <p><input placeholder="Approx Outstanding..." oninput="this.className = ''" name="approxoutstanding"></p>
    <p><input placeholder="Loan Amount..." oninput="this.className = ''" name="loanamt"></p>
  </div>
  <div class="tab"><h2>General Terms & Conditions:</h2><br/>
    KEY THINGS YOU SHOULD KNOW:<br/>
    <ol>
    <li>Our service is to offer representation and negotiation on behalf of our client with their lending  Bank/financial institution and provide acceptable solutions .</li>
    <li>Our services are available only for the regular loan account holders with pre covid (till March 2020).</li>
    <li>Once the client gets Enrolled  and Hire  M/s MLN Globalbiz Pvt.Ltd. for it services the client will keep M/s. MLN Globalbiz pvt.Ltd.  well informed  & timely posted  on email I'd  negotiator@mlnglobal.biz on any correspondence done via any medium of communication for a time frame of Max.90 days from their Enrollment.MLN Globalbiz will have a right to terminate & forfiet Enrollment without any  refund, the purpose of this Act is to maintain Zero Communication Gap.</li>
  </ol>
<br/>
FEES AND CHARGES:<br/>
<ol>
<li>A Fee of Rs.850/- fixed/floating.</li>
<li>After reprising/restructuring/reschedule request is approved by the client financial institution, client should pay Real Time Fees @ 20% of their savings to MLN Globalbiz as a success fee within _____ days.</li>
<li>If the proposal is Refused /declined by the Bank / Financial Institution the MLNGB will refund 50% of the enrolment Fees i.e. Net of G.S.T. & franking charges. (if any)</li>
<li>If the proposal is declined by the Bank / Financial Institution the MLNGB will refund 50% of the enrolment Fees ( Net of GST).</li>
<li>In case of default (as defined below) by the Client enrolment fees will be forfeited.</li> 
<li>Delay in payment of Real Time Fees amounts to penalty of 2% on daily basis.</li>
</ol>
<br/>
DEFAULT:<br/>
<ol>
<li>Default in payment of Real Time Fees will amount to litigation as per mentioned in agreement.
Your  Documents i.e. KYC and Bank/financial statement or information provided related to the loan history etc. are found to be untrue, fraudulent and forged immediate legal action will be initiated against you in addition enrolment fee shall be forfeited.</li>
</ol>

DISCLOSURES:<br/>
<ol>
<li>The Client acknowledges the right of the Company to provide details of his/her account to the agents / Lawyers for the purpose of availing of support services of any nature by the Company, without any specific consent or authorisation from him/her.</li>
</ol>
<br/>

KNOW YOUR CUSTOMER/DUE DILIGENCE REQUIREMENT:<br/>
<ol>
<li>In line with the requirements for registration, the Know Your Customer (KYC) documents along with other documentation need to be submitted online at the time of Registering.</li>
<li>All the KYC Documents to be uploaded should be self-attested by the Clients.</li>
</ol>
<br/>

RULES AND TERMS AND CONDITIONS:<br/>
<br/>
The Company reserves a right to terminate the Agreement if the information provided by the client is found to be untrue, fraudulent and registered with dishonest and malafide intention.
<br/>
<br/>
LIST OF DOCUMENTS TO BE SUBMITTED WHILE REGISTERING ONLINE:
<ol>
<li>Pan Card.</li>
<li>Aadhar Card.</li>
<li>Self-Certification of documents is mandatory.</li>
<li>Authority Letter</li>
<li>Self declaration letter to MLn Globalbiz.</li>
<li>Signature on per banks online formats and charges (if any).</li>
<li>Send mails through your registered email id to the bank as per MLN Globalbiz Representative Guidance given thorugh assist@mlnglobal.biz.</li>
</ol>

<br/>
<br/>
<p><input type="checkbox" oninput="this.className = ''" name="fname"><label>I Agree to the Terms and Conditions</label></p>


  </div>
  <div class="tab">Payment:<br/>
    <h3><center>Use UPI (apps like BHIM UPI, Google Pay) to Scan and Make Payment</center></h3>
    <p><center><img src="upiqr.jpeg" height="50%" width="50%" /></center></p>
    <h3><center>Fee of Rs.850 includes service tax</center></h3>
    <h3><center>NOTICE: Once payment is done go to the next section and complete your KYC.</center></h3>
  </div>
  <div class="tab">KYC:
    <p><form action="/action_page.php">
      <label>PAN</label>
      <input type="file" id="myFile" name="pan">
      <label>AADHAAR</label>
      <input type="file" id="myFile" name="aadhaar">
      <label>Loan Sanction Letter</label>
      <input type="file" id="myFile" name="loansanctionletter">
      <label>Selfie</label>
      <input type="file" id="myFile" name="selfie">
      <label>Authority Letter</label>
      <input type="file" id="myFile" name="authority">
      <label>Service Agreement</label>
      <input type="file" id="myFile" name="serviceagreement">
    </form></p>
  </div>
  <div class="tab">COMPLETED:
    <p><center><img src="20070.jpg" height="50%" width="50%" /></center></p>
    <h3>Thank you registering with us. We will get back to you soon.</h3>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function test(){
  var sourceCode = document.getElementsByClassName("sourcecode");
  var result = sourcecode.value
  console.log(sourcecode.value)
  // PHP
}

$.ajax({
  url: 'add.php',
  success: function(data) {
    $('.result').html(data);
  }
});


</script>
<?php 
  echo 'asdasda';
?>
</body>
</html>


