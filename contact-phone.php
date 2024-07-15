<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Cache-control" content="puplic">
<title>Beautiful Clock Radio</title>
<link href="contact/style.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.title {
	font-size: 16px;
}
.subtitle {
	font-size: 16px;
}
a:link {
	color: #AB5310;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #AB5310;
}
a:hover {
	text-decoration: none;
	color: #333;
}
a:active {
	text-decoration: none;
}
a.imgbord:link {color: #C5C5C5;}
a.imgbord:active {color: #C5C5C5;}
a.imgbord:visited {color: #C5C5C5;}
a.imgbord:hover {color: #00FFDE;}
div {}
div.one {padding: 5px;}
.youtube-player
{
	float: left;
	padding: 10px;
}
.container1{
padding-left: 2em !important;
}
</style>
<script type="text/javascript" src="http://beautifulclockradio.com/jquery.min.js"></script>
<script type="text/javascript" src="fadeslideshow_phone.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25157611-1']);
  _gaq.push(['_trackPageview']);


  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    <script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-xxxxx-y']);
_gaq.push(['_trackPageview']);
(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">

myvar = getURLParameter('send');
if(myvar == 'ok')
{
	alert('Thanks. We will get back to you shortly. ');
}

function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null
}

function check_email(e) {
	var x = e;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		alert("Not a valid e-mail address");
        return false;
    }
	return true;
}

function check_form(f) { // f is the form (passed using the this keyword)

	/*if(!check_security(f)){
		return false;
	}*/
	
	
	if(f.name.value.length < 1){
		alert("You entered less than one character in the name field.");
		f.name.focus(); // put the prompt in the name field
		// if the browser is Netscape 6 or IE
		if(document.all || document.getElementByID){
		// change the color of text field
		f.name.style.background = "yellow";
		}
		// make sure the form is not submitted
		return false;
	}
	
	// check the first email address ( the exclamation means "not" )
	if(!check_email(f.email.value)){
	f.email.focus();
	// if the browser is Netscape 6 or IE
	if(document.all || document.getElementByID){
	// change the color of text field
	f.email.style.background = "yellow";
	}
		// make sure the form is not submitted
		return false;
	}
	
	if(f.Message.value.length < 1){
		alert("You entered less than one character in the Message field.");
		f.Message.focus(); // put the prompt in the name field
		// if the browser is Netscape 6 or IE
		if(document.all || document.getElementByID){
		// change the color of text field
		f.Message.style.background = "yellow";
		}
		// make sure the form is not submitted
		return false;
	}

	return true;
}
</script>

<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

</script>
<meta content="Beautiful Clock Radio for the iPad and iPhone" name="description" />
<meta content="clock radio, alarm, iPad, iPhone, app, application" name="keywords" /><!-- overlayed element -->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>
<body>
<div class="apple_overlay" id="overlay"><!-- the external content is loaded inside this tag -->
<div class="contentWrap"></div>
</div>

<div class="container1">
<div class="top">
<div class="sidebar">
<p><img alt="Space" border="0" height="75" src="images/100Space.png" width="20" /></p>

<p><a href="index.php"><img alt="" border="0" height="" src="images/logo.png" width="" /></a></p>

<p></p>

<p></p>
&nbsp;

<p><a href="http://itunes.apple.com/us/artist/i-hate-my-clock-radio/id382749598" target="_new"><img alt="App Store link" height="" longdesc="http://appstor link" src="images/App-store-button.png" width="" /></a></p>

<p></p>
<!--
<p><a href="mailto:support@beautifulclockradio.com">support@beautifulclockradio.com</a></p> -->

<p></p>

<p><a href="demo.php"><img alt="Youtube, ipad" border="0" height="" src="images/BCRVideo-button.png" width="" /></a></p>

<p></p>

<p><a href="iphone_demo.php"><img alt="Youtube, iphone" border="0" height="" src="images/BestCRVideo-button.png" width="" /></a></p>

<p></p>

<p><a href="contact-phone.php"><img alt="Contact" border="0" height="" src="images/Support-button.png" width="" /></a></p>

<p></p>

<div class="one">&nbsp;

</div>
</div>

<div class="slideshow">
<div class="holder"><!--
<div id="fadeshow1"></div> -->
<div id="fadeshow2"></div>
</div>
</div>
</div>

<div class="bottom" style="padding-left: 0px;padding-top: 720px;">

<style>
.image:hover{
opacity:0.6;
filter:alpha(opacity=60); /* For IE8 and earlier */
}
</style>
<center>
<p class="title">QUESTIONS/SUPPORT</p>

<div class="one"><br />


<form name="review" action="verify-phone.php" method="post" onsubmit="return check_form(this)" style="padding: 8">
<p><input id="name" name="name" placeholder="Name" onblur="if(this.value==''){this.style.color='#3F3F3F';}" onfocus="if(this.value==''){this.style.color='#000';}else{this.select();}" style="color: #3F3F3F; width: 250px; height: 20px" title="name" type="text" /></p>

<p><input id="email" name="email" placeholder="Email" onblur="if(this.value==''){this.style.color='#3F3F3F';}" onfocus="if(this.value==''){this.style.color='#000';}else{this.select();}" style="color: #3F3F3F; width: 250px; height: 20px" title="email" type="text" /></p>

<p><textarea cols="20" id="Message" name="Message" placeholder="Message" onblur="if(this.value==''){this.style.color='#3F3F3F';}" onfocus="if(this.value==''){this.style.color='#000';}else{this.select();}" rows="20" style="color: #3F3F3F; width: 250px" title="Message"></textarea></p>

<p>
<?php
          require_once('recaptchalib.php');
          $publickey = "6LewC_wSAAAAAPYfzRRGdo-GQtIlhhCrKuovgbK0"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
</p>

<p style="text-align: center">Please <strong>double check your email address</strong> so we will be able to contact you</p>
<input class="submit-button" name="submit" type="submit" value="Submit" /></form>

<p></p>
</center>
<script type="text/javascript" src="slideshow_phone.js"></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25157611-3', 'auto');
  ga('send', 'pageview');

</script>
<script id="hiddenlpsubmitdiv" style="display: none;"></script>
<script>try{for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ d.innerText=i; } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }}catch(e){}</script>
</div>

<script type="text/javascript">
	function check_security(theform){
		var why = "";
		if(theform.txtInput.value == ""){
		why += "Security code should not be empty.\n";
		}
		if(theform.txtInput.value != ""){
			if(ValidCaptcha(theform.txtInput.value) == false){
			why += "Security code did not match.\n";
			}
		}
		if(why != ""){
			alert(why);
			return false;
		}
		return true;
	}

	// Validate the Entered input aganist the generated security code function
	function ValidCaptcha(v){
		var str1 = removeSpaces(document.getElementById("txtCaptcha").value);
		var str2 = removeSpaces(v);
		
		if (str1 == str2){
		return true;
		}else{
		return false;
		}
	}

	// Remove the spaces from the entered and generated code
	function removeSpaces(string){
		return string.split(' ').join('');
	}

	//Generates the captcha function
	var a = Math.ceil(Math.random() * 9)+ '';
	var b = Math.ceil(Math.random() * 9)+ '';
	var c = Math.ceil(Math.random() * 9)+ '';
	var d = Math.ceil(Math.random() * 9)+ '';
	var e = Math.ceil(Math.random() * 9)+ '';
	var code = a + b + c + d + e;
	
   
	document.getElementById("txtCaptcha").value = code;
	document.getElementById("txtCaptchaDiv").innerHTML = code;
</script>
</body>
</html>
