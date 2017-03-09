<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="/pie/style/mystyle.css">
<script type="text/javascript">

function validateForm()
{

if(document.getElementById("mr").checked == false &&document.getElementById("ms").checked == false &&
document.getElementById("mrs").checked == false &&document.getElementById("mdm").checked == false )
	{document.getElementById("errSal").innerHTML="No salutation selected";

	}
else document.getElementById("errSal").innerHTML=" ";


if(ContactForm.Name.value=="")
	{
		document.getElementById("errName").innerHTML="Please enter your name ";
		ContactForm.Name.focus();

	}
	else
	document.getElementById("errName").innerHTML=" ";




	var emailID = document.ContactForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

      if (atpos < 1 || ( dotpos - atpos < 2 ))
      {
        document.getElementById("errEmail").innerHTML="Please enter a valid email ";
		ContactForm.email.focus();

         }
	 else
		document.getElementById("errEmail").innerHTML=" ";


	 if( document.ContactForm.phone.value == "" )
        {
        document.getElementById("errPhone").innerHTML="Please enter phone number ";
		ContactForm.phone.focus();

         }
		 else
		document.getElementById("errPhone").innerHTML=" ";

	if( document.ContactForm.enquiry.value == "-1" )
         {
        document.getElementById("errEnquiry").innerHTML="Please enter the subject of the enquiry ";
		ContactForm.enquiry.focus();

		}
		 else document.getElementById("errEnquiry").innerHTML=" ";


	if( document.ContactForm.subject.value == "" )
         {
        document.getElementById("errSubject").innerHTML="Please enter the subject of the enquiry ";
		ContactForm.subject.focus();

		}
		else document.getElementById("errSubject").innerHTML=" ";

	if( document.ContactForm.comment.value == "" )
         {
        document.getElementById("errComment").innerHTML="Please enter the comment ";
		ContactForm.comment.focus();

		}
		else document.getElementById("errComment").innerHTML=" ";

}

</script>

</head>
<body>

  <?php include('../include/header.php');?>
  <?php include('../include/navigation.php');?>

<!--
post is to save data without showing
get is to show
-->
<body>
<h1> Contact Us</h1>
<form name="ContactForm" action="contact/post-message.php"  method="post">
 <fieldset>
 Salutation:<br>
 <input type="radio" id="mr" name="salute" value="Mr" >Mr <br>
 <input type="radio" id="ms" name="salute" value="Ms" >Ms <br>
 <input type="radio" id="mrs" name="salute" value="Mrs" >Mrs <br>
 <input type="radio" id="mdm" name="salute" value="Mdm" >Mdm <br>

 <font color="red"><div id="errSal"> </div></font>
 <br><br>
   Name:<br>
   <input type="text" id="Name" name="Name"  placeholder="your name" >
   <span style=color:red ID="errName"> </span>
    <br><br>

   Email Address:<br>
   <input type="text" id="txtEmail" name="email" placeholder="your email" >
 <span style=color:red ID="errEmail"> </span>
   <br><br>

 Phone Number:<br>
 <input type="text" name="phone" placeholder="your phone number" >
 <span style=color:red ID="errPhone"> </span>
  <br><br>
  Type of enquiry:<br>
  <select name="enquiry">
 <option value="-1"> Choose type of enquiry</option>
 <option value="1"> General Enquiry</option>
 <option value="2"> Complaints</option>
 <option value="3"> Suggestions</option>
 </select>
 <span style=color:red ID="errEnquiry"> </span>
 <br><br>

 Subject:<br>
 <input type="text" name="subject" placeholder="enter the subject" >
 <span style=color:red ID="errSubject"> </span>
   <br><br>
 Comment:<br>
 <textarea rows="4" cols="50" name="comment" placeholder="enter your comment" ></textarea>
 <span style=color:red ID="errComment"> </span>
 <br><br>
 <font color='red'> <DIV id="une"> </DIV> </font>

 <input type="button" value="Send" onclick="validateForm()">
 <input type="reset" value="Reset">

</fieldset>
</form>

<?php include('../include/footer.php');?>

</body>
</html>
