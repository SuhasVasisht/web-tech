<!DOCTYPE html>
<html>
  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing:border-box;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 2px solid #070707;
  margin-bottom: 25px;
}

button {
  border-radius: 25px;
  background-color: #070707;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
  background-color: lightblue; 
  color: black;
}

.dropbtn {
  background-color: #070707;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  width:100%;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #070707;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width:100%;
}

.dropdown-content a {
  color: #f9f9f9;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: lightblue;
color: black;}

.dropdown:hover .dropdown-content {display: block;}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.checkmark:hover {
  background-color: #ccc;
}

.checkmark:checked {
  background-color: #2196F3;
}

.termsx {
overflow-y: scroll;
height: 300px;
width: 100%;
border: 1px solid #DDD;
padding: 10px;
}

button.bt{
  width: 20%;
}

.left {
  float: left;
}

.terms {
  text-align: left;
}

.signupbtn {
  float: left;
  width: 50%;
}

.center{
    margin: auto;
    width: 25%;
}

.container {
  width: 600px;
  background: linear-gradient(black,rgb(20, 20, 20);
  margin: 8% auto 0;
  padding: 20px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
.signupbtn {
     width: 50%;
  }
}
</style>
<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="Homepagestyle.css">
  </head>
  <body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));">
  <?php include('connect.php') ?>
  <?php include("includes/header.php"); ?>



    <div class="container" style="margin-top: 100px" id="start">
      </div><div class="text-center">
      <h1 class="same-line" id="heading">Create an Account</h1></div>
      <br><br>
      </div>

<form name="register" method='post' onsubmit="return valid()" action="thankyou.php">
  <div class="container text1 text-center">
    <label for="email">Enter email id</label><br>
    
    <input type="text" placeholder="Enter Email" name="email"  required
    ><br>

    <label for="user">Username</label><br>
    <input type="text" placeholder="Username" name="username" required
    ><br>

    <label for="psw">Set password</label><br>
    <input type="password" placeholder="Password" name="password" required><br>

    <label for="psw-repeat">Re-Enter Password</label><br>
    <input type="password" placeholder="Repeat Password" name="password-r" required><br>
    </div>
    
    <hr>
    <p class='text2'>Please review the agreement(s) below and agree by selecting the checkbox(es) at the bottom of the page. You must agree with the terms of these agreements to continue.</p>
    <div class="terms text2">
    <div class="termsx">
      <p><h2>TERMS AND CONDITIONS </h2></p>
      <p><h3>Introduction</h3>
        <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.<br>
        These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.<br>
        Minors or people below 13 years old are not allowed to use this Website.<br>
        
        <p><h3>Intellectual Property Rights</h3>
        Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.
        
        You are granted limited license only for purposes of viewing the material contained on this Website.</p>
        
        <p><h3>Restrictions</h3>
        You are specifically restricted from all of the following:
        <ul>
        <li>publishing any Website material in any other media;</li>
        <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
        <li>performing and/or showing any Website material;</li> 
        <li>using this Website in any way that is or may be damaging to this Website;</li>
        <li>using this Website in any way that impacts user access to this Website;</li>
        <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li>
        </ul></p>
        <p><h3>Your Content</h3>
        In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.<br>
        Your Content must be your own and must not be invading any third-party's rights. Company Name reserves the right to remove any of Your Content from this Website at any time without notice.
        </p>
        <p><h3>No warranties</h3>
        This Website is provided “as is,” with all faults, and Company Name express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.
        </p>
        <p><h3>Limitation of liability</h3>
        In no event shall Company Name, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Company Name, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.
        </p>
        <p> <h3>Assignment</h3>
        The Company Name is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.
        </p>
        <p><h3>Entire Agreement</h3>
        These Terms constitute the entire agreement between Company Name and you in relation to your use of this Website, and supersede all prior agreements and understandings.
        </p>
        <p> <h3>Governing Law & Jurisdiction</h3>
        These Terms will be governed by and interpreted in accordance with the laws of the State of Country, and you submit to the non-exclusive jurisdiction of the state and federal courts located in Country for the resolution of any disputes.</p>
        <p>
          <label> <input name="again" type="checkbox" required>
            <span class="checkmark"></span>I accept the terms and conditions. </label>
        </p>
    </div>


    <div class="clearfix">
      <div class="center">
      <button name="sub" type="submit" class="signupbtn">Sign Up</button></div>
    </div>
  </div>
</form>


<script>
function valid() {
    var problems="";
    var flag=0;
    var x = document.forms["register"]["email"].value;
    var n=x.endsWith(".com");
    var p = document.forms["register"]["password"].value;
    var pr = document.forms["register"]["password-r"].value;
    
    var problems="";
    if(!n){
      problems+="Invalid email address \n";
      flag=1;
    }
    if(p!=pr)
    {
        problems+="Passwords do not match \n";
        flag=1;
    }
    if(flag)
    {
        alert(problems);
        return false;
    }
    
  }
</script>

</body>
</html>