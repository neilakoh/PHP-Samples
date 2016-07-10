<?php
session_start();
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Registration</title>

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"  src="js/jquery-1.3.2.min.js"></script>

<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/simpleCal.js"></script>

<script language="javascript" type="text/javascript">

function validation()
{
	var formName=document.frm;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

	var urlExp = /^(((ht|f){1}(tp:[/][/]){1})|((www.){1}))[-a-zA-Z0-9@:%_\+.~#?&//=]+$/;

	if(formName.fullname.value == "")
	{
		document.getElementById("fullname_label").innerHTML='Please Enter First Name';
		formName.fullname.focus();
		return false;
	}
	else
	{
		document.getElementById("fullname_label").innerHTML='';
	}


	if(formName.email.value == "")
	{
		document.getElementById("email_label").innerHTML='Please Enter Email';
		formName.email.focus();
		return false;
	}
	else
	{
		document.getElementById("email_label").innerHTML='';
	}


	if(!(formName.email.value).match(emailExp))
	{
		document.getElementById("email_label").innerHTML='Please Enter Valid Email';
		formName.email.focus()
		return false;
	}
	else
	{
		document.getElementById("email_label").innerHTML='';
	}


	if(formName.dob.value == "")
		{
			document.getElementById("dob_label").innerHTML='Please Enter Date of Birth';
			formName.dob.focus();
			return false;
		}
		else
		{
			document.getElementById("dob_label").innerHTML='';
		}




		if(formName.company.value == "")
		{
			document.getElementById("company_label").innerHTML='Please Enter Company';
			formName.company.focus();
			return false;
		}
		else
		{
			document.getElementById("company_label").innerHTML='';
		}


		if(formName.designation.value == "")
		{
			document.getElementById("designation_label").innerHTML='Please Enter Designation';
			formName.designation.focus();
			return false;
		}
		else
		{
			document.getElementById("designation_label").innerHTML='';
		}


		if(formName.address.value == "")
		{
			document.getElementById("address_label").innerHTML='Please Enter Address';
			formName.address.focus();
			return false;
		}
		else
		{
			document.getElementById("address_label").innerHTML='';
		}



		if(formName.city.value == "")
		{
			document.getElementById("city_label").innerHTML='Please Enter City';
			formName.city.focus();
			return false;
		}
		else
		{
			document.getElementById("city_label").innerHTML='';
		}



		if(formName.state.value == "")
		{
			document.getElementById("state_label").innerHTML='Please Enter State';
			formName.state.focus();
			return false;
		}
		else
		{
			document.getElementById("state_label").innerHTML='';
		}



		if(formName.zip.value == "")
		{
			document.getElementById("zip_label").innerHTML='Please Enter Zip Code';
			formName.zip.focus();
			return false;
		}
		else
		{
			document.getElementById("zip_label").innerHTML='';
		}


		if(formName.phone.value == "")
		{
			document.getElementById("phone_label").innerHTML='Please Enter Phone Number';
			formName.phone.focus();
			return false;
		}
		else
		{
			document.getElementById("phone_label").innerHTML='';
		}


		if(formName.fax.value == "")
		{
			document.getElementById("fax_label").innerHTML='Please Enter Fax Number';
			formName.fax.focus();
			return false;
		}
		else
		{
			document.getElementById("fax_label").innerHTML='';
		}




		if(formName.website.value == "")
			{
				document.getElementById("website_label").innerHTML='Please Enter Website';
				formName.website.focus();
				return false;
			}
			else
			{
				document.getElementById("website_label").innerHTML='';
			}


			if(!(formName.website.value).match(urlExp))
			{
				document.getElementById("website_label").innerHTML='Please Enter Valid Website';
				formName.website.focus()
				return false;
			}
			else
			{
				document.getElementById("website_label").innerHTML='';
	}




	if(formName.password.value == "")
	{
		document.getElementById("password_label").innerHTML='Please Enter Password';
		formName.password.focus();
		return false;
	}
	else
	{
		document.getElementById("password_label").innerHTML='';
	}


	if(formName.cpassword.value == "")
	{
		document.getElementById("cpassword_label").innerHTML='PleaseEnterConfirmPassword';
		formName.cpassword.focus();
		return false;
	}
	else
	{
		document.getElementById("cpassword_label").innerHTML='';
	}


	if(formName.password.value != formName.cpassword.value)
	{
		document.getElementById("cpassword_label").innerHTML='Passwords Missmatch';
		formName.cpassword.focus()
		return false;
	}
	else
	{
		document.getElementById("cpassword_label").innerHTML='';
	}



	if(formName.code.value == "")
			{
				document.getElementById("code_label").innerHTML='Please Enter Code';
				formName.code.focus();
				return false;
			}
			else
			{
				document.getElementById("code_label").innerHTML='';
		}





	if($('input:radio[name=gender]:checked').length==0){
			$('#gender_label').html('Please Choose option');
			return false;
		}
		if($('input:radio[name=gender]:checked').val()==1){
			if($('#gender').val()==''){
				$("#gender_label").html('Enter Your gender');
				return false;
			}else{
				$("#gender_label").html('');
			}
		}

	}

	$(function(){
		$('input:radio[name=gender]').click(function(){

		$('#gender_label').html('');
		});
		$('#gender').click(function(){
			$('#gender').val('');
		});
});




function Phone(evt)
{
	 var charCode = (evt.which) ? evt.which : event.keyCode

	 if ((charCode >= 97 && charCode <=122) || ((charCode >= 65 && charCode <=90)))
	 {
		return false;
	 }
	 else if((charCode>=48 && charCode <=57) || charCode==43 || charCode==32 || charCode==45 || charCode==40 || charCode==41 || charCode==8)
	 {
		return true;
	 }
	 else
	 {
		return false;
	 }
}



</script>


</head>


<script>

$(document).ready(function() {

	 $('#Send').click(function() {

			$.post("post.php?"+$("#MYFORM").serialize(),
			{

			},

			function(response)
			{
		});

		return false;
	 });

	 // refresh captcha
	 $('img#refresh').click(function() {

			change_captcha();
	 });

	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="get_captcha.php?rnd=" + Math.random();
	 }

	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#message").val('');
	 }
});



</script>

<?php
if($_REQUEST["action"]=='register')
{


	if(strtolower($_REQUEST['code']) == strtolower($_SESSION['random_number']))
	{
		$sql="select * from employee where 	email ='$_REQUEST[email]'";
		$sql_row=mysql_query($sql);
		$num=mysql_num_rows($sql_row);
		if($num>0)
		{
			echo "<script>window.location.href='registration.php?msg=exist'</script>";
			exit;
		}
		else
		{

	$str="insert into employee set fullname='$_REQUEST[fullname]',email='$_REQUEST[email]',dob='$_REQUEST[dob]',gender='$_REQUEST[gender]',company='$_REQUEST[company]',designation='$_REQUEST[designation]',address='$_REQUEST[address]',city='$_REQUEST[city]',state='$_REQUEST[state]',zip='$_REQUEST[zip]',phone='$_REQUEST[phone]',fax='$_REQUEST[fax]',website='$_REQUEST[website]',country='$_REQUEST[country]',password='$_REQUEST[password]'";
	mysql_query($str);
	$mesg="Success";
	echo "<script>window.location.href='welcome.php'</script>";
	//exit;
		}
	}
	else
	{
		echo "<script>window.location.href='registration.php?msg=invalid&fullname=$_REQUEST[fullname]&email=$_REQUEST[email]&dob=$_REQUEST[dob]&company=$_REQUEST[company]&designation=$_REQUEST[designation]&address=$_REQUEST[address]&city=$_REQUEST[city]&state=$_REQUEST[state]&zip=$_REQUEST[zip]&phone=$_REQUEST[phone]&fax=$_REQUEST[fax]&website=$_REQUEST[website]'</script>";
		exit;

	}
}

?>

<body>


<form method="post" id="frm" name="frm" action="registration.php?action=register" onSubmit="return validation();">
<table width="500" border="0">

<?php if($_REQUEST["msg"]=='invalid') {   ?>
    <tr>
      <td height="30">&nbsp;</td>
      <td class="redText2">Invalid captcha code </td>
    </tr>
  <?php } ?>

 <?php if($_REQUEST[msg]=='exist') { ?>
  <tr>
    <td height="30">&nbsp;</td>
    <td class="redText2">Email Address is already in use.Try with another. </td>
  </tr>
  <?php } ?>
   <?php if($_REQUEST[msg]=='success') { ?>
  <tr>
    <td height="30">&nbsp;</td>
    <td class="greenText">Registered Successfully </td>
  </tr>
  <?php } ?>

<tr>
 <td class="deepbluetextbold"><b>Employee Registration</b></td>
 </tr>

  <tr>
    <td class="colouredCell">Name*</td>
    <td>
      <input type="text"  name="fullname" id="fullname" autocomplete="off" value="<?php echo $_REQUEST[fullname]; ?>"/>&nbsp; <label id="fullname_label" class="level_msg"></label>    </td>
  </tr>

  <tr>
    <td class="colouredCell">Email*</td>
    <td><input type="text" name="email"  id="email" autocomplete="off" value="<?php echo $_REQUEST[email]; ?>"/>&nbsp; <label id="email_label" class="level_msg"></label></td>
  </tr>


<tr>
      <td class="colouredCell">Date of Birth*</td>
      <td><input type="text" name="dob" id="dob" autocomplete="off" value="<?php echo $_REQUEST[dob]; ?>"/>&nbsp; <label id="dob_label" class="level_msg"></label>

      <a href="#" onclick="scwShow (document.getElementById('dob'), event); return false;" />
	  <img border="0"  alt="" src="images/calendar.png" />
      <span id="lbldob" style="color:Red;font-weight:bold;"></span>


      </td>


  </tr>

  <tr>
      <td class="colouredCell">Gender*</td>
      <td>
        <input name="gender" type="radio" value="male"/>Male
  	  <input name="gender" type="radio" value="female"/>Female
  	  &nbsp; <label id="gender_label" class="level_msg"></label>	</td>
  </tr>


  <tr>
      <td class="colouredCell">Company*</td>
      <td><input type="text" name="company" id="company" autocomplete="off" value="<?php echo $_REQUEST[company]; ?>"/>&nbsp; <label id="company_label" class="level_msg"></label></td>
  </tr>


  <tr>
      <td class="colouredCell">Designation*</td>
      <td><input type="text" name="designation" id="designation" autocomplete="off" value="<?php echo $_REQUEST[designation]; ?>"/>&nbsp; <label id="designation_label" class="level_msg"></label></td>
  </tr>


  <tr>
      <td class="colouredCell">Street Address*</td>
      <td><input type="text" name="address" id="address" autocomplete="off" value="<?php echo $_REQUEST[address]; ?>"/>&nbsp; <label id="address_label" class="level_msg"></label></td>
  </tr>



  <tr>
      <td class="colouredCell">City*</td>
      <td><input type="text" name="city" id="city" autocomplete="off" value="<?php echo $_REQUEST[city]; ?>"/>&nbsp; <label id="city_label" class="level_msg"></label></td>
  </tr>


  <tr>
        <td class="colouredCell">State*</td>
        <td><input type="text" name="state" id="state" autocomplete="off" value="<?php echo $_REQUEST[state]; ?>"/>&nbsp; <label id="state_label" class="level_msg"></label></td>
  </tr>


  <tr>
        <td class="colouredCell">Zip Code*</td>
        <td><input type="text" name="zip" id="zip" autocomplete="off" value="<?php echo $_REQUEST[zip]; ?>"/>&nbsp; <label id="zip_label" class="level_msg"></label></td>
  </tr>

  <tr>
        <td class="colouredCell">Phone*</td>
        <td><input type="text" name="phone" id="phone" autocomplete="off" onKeyPress="return Phone(event);" value="<?php echo $_REQUEST[phone]; ?>"/>&nbsp; <label id="phone_label" class="level_msg"></label></td>
  </tr>

  <tr>
        <td class="colouredCell">Fax*</td>
        <td><input type="text" name="fax" id="fax" autocomplete="off" onKeyPress="return Phone(event);" value="<?php echo $_REQUEST[fax]; ?>"/>&nbsp; <label id="fax_label" class="level_msg"></label></td>
  </tr>


  <tr>
          <td class="colouredCell">Website*</td>
          <td><input type="text" name="website" id="website" autocomplete="off" value="<?php echo $_REQUEST[website]; ?>"/>&nbsp; <label id="website_label" class="level_msg"></label></td>
  </tr>


  <tr>
          <td class="colouredCell">Country*</td>
          <td>

          <select class="" id="country" name="country" aria-required="true">
		                      <option value=""    selected="selected">Select One</option>
		                      <option value="af"   >Afghanistan</option>

		                      <option value="ax"   >Aland Islands</option>
		                      <option value="al"   >Albania</option>
		                      <option value="dz"   >Algeria</option>
		                      <option value="as"   >American Samoa</option>
		                      <option value="ad"   >Andorra</option>
		                      <option value="ao"   >Angola</option>

		                      <option value="ai"   >Anguilla</option>
		                      <option value="aq"   >Antarctica</option>
		                      <option value="ag"   >Antigua and Barbuda</option>
		                      <option value="ar"   >Argentina</option>
		                      <option value="am"   >Armenia</option>
		                      <option value="aw"   >Aruba</option>

		                      <option value="au"   >Australia</option>
		                      <option value="at"   >Austria</option>
		                      <option value="az"   >Azerbaijan</option>
		                      <option value="bs"   >Bahamas</option>
		                      <option value="bh"   >Bahrain</option>
		                      <option value="bd"   >Bangladesh</option>

		                      <option value="bb"   >Barbados</option>
		                      <option value="by"   >Belarus</option>
		                      <option value="be"   >Belgium</option>
		                      <option value="bz"   >Belize</option>
		                      <option value="bj"   >Benin</option>
		                      <option value="bm"   >Bermuda</option>

		                      <option value="bt"   >Bhutan</option>
		                      <option value="bo"   >Bolivia</option>
		                      <option value="ba"   >Bosnia and Herzegovina</option>
		                      <option value="bw"   >Botswana</option>
		                      <option value="bv"   >Bouvet Island</option>
		                      <option value="br"   >Brazil</option>

		                      <option value="io"   >British Indian Ocean Territory</option>
		                      <option value="vg"   >British Virgin Islands</option>
		                      <option value="bn"   >Brunei</option>
		                      <option value="bg"   >Bulgaria</option>
		                      <option value="bf"   >Burkina Faso</option>
		                      <option value="bi"   >Burundi</option>

		                      <option value="kh"   >Cambodia</option>
		                      <option value="cm"   >Cameroon</option>
		                      <option value="ca"   >Canada</option>
		                      <option value="cv"   >Cape Verde</option>
		                      <option value="ky"   >Cayman Islands</option>
		                      <option value="cf"   >Central African Republic</option>

		                      <option value="td"   >Chad</option>
		                      <option value="cl"   >Chile</option>
		                      <option value="cn"   >China</option>
		                      <option value="cx"   >Christmas Island</option>
		                      <option value="cc"   >Cocos (Keeling) Islands</option>
		                      <option value="co"   >Colombia</option>

		                      <option value="km"   >Union of the Comoros</option>
		                      <option value="cg"   >Congo</option>
		                      <option value="ck"   >Cook Islands</option>
		                      <option value="cr"   >Costa Rica</option>
		                      <option value="hr"   >Croatia</option>
		                      <option value="cu"   >Cuba</option>

		                      <option value="cy"   >Cyprus</option>
		                      <option value="cz"   >Czech Republic</option>
		                      <option value="cd"   >Democratic Republic of Congo</option>
		                      <option value="dk"   >Denmark</option>
		                      <option value="xx"   >Disputed Territory</option>
		                      <option value="dj"   >Djibouti</option>

		                      <option value="dm"   >Dominica</option>
		                      <option value="do"   >Dominican Republic</option>
		                      <option value="tl"   >East Timor</option>
		                      <option value="ec"   >Ecuador</option>
		                      <option value="eg"   >Egypt</option>
		                      <option value="sv"   >El Salvador</option>

		                      <option value="gq"   >Equatorial Guinea</option>
		                      <option value="er"   >Eritrea</option>
		                      <option value="ee"   >Estonia</option>
		                      <option value="et"   >Ethiopia</option>
		                      <option value="fk"   >Falkland Islands</option>
		                      <option value="fo"   >Faroe Islands</option>

		                      <option value="fm"   >Federated States of Micronesia</option>
		                      <option value="fj"   >Fiji</option>
		                      <option value="fi"   >Finland</option>
		                      <option value="fr"   >France</option>
		                      <option value="gf"   >French Guyana</option>
		                      <option value="pf"   >French Polynesia</option>

		                      <option value="tf"   >French Southern Territories</option>
		                      <option value="ga"   >Gabon</option>
		                      <option value="gm"   >Gambia</option>
		                      <option value="ge"   >Georgia</option>
		                      <option value="de"   >Germany</option>
		                      <option value="gh"   >Ghana</option>

		                      <option value="gi"   >Gibraltar</option>
		                      <option value="gr"   >Greece</option>
		                      <option value="gl"   >Greenland</option>
		                      <option value="gd"   >Grenada</option>
		                      <option value="gp"   >Guadeloupe</option>
		                      <option value="gu"   >Guam</option>

		                      <option value="gt"   >Guatemala</option>
		                      <option value="gn"   >Guinea</option>
		                      <option value="gw"   >Guinea-Bissau</option>
		                      <option value="gy"   >Guyana</option>
		                      <option value="ht"   >Haiti</option>
		                      <option value="hm"   >Heard Island and McDonald Islands</option>

		                      <option value="hn"   >Honduras</option>
		                      <option value="hk"   >Hong Kong</option>
		                      <option value="hu"   >Hungary</option>
		                      <option value="is"   >Iceland</option>
		                      <option value="India"    >India</option>
		                      <option value="id"   >Indonesia</option>

		                      <option value="ir"   >Iran</option>
		                      <option value="iq"   >Iraq</option>
		                      <option value="xe"   >Iraq-Saudi Arabia Neutral Zone</option>
		                      <option value="ie"   >Ireland</option>
		                      <option value="il"   >Israel</option>
		                      <option value="it"   >Italy</option>

		                      <option value="ci"   >Ivory Coast</option>
		                      <option value="jm"   >Jamaica</option>
		                      <option value="jp"   >Japan</option>
		                      <option value="jo"   >Jordan</option>
		                      <option value="kz"   >Kazakhstan</option>
		                      <option value="ke"   >Kenya</option>

		                      <option value="ki"   >Kiribati</option>
		                      <option value="kw"   >Kuwait</option>
		                      <option value="kg"   >Kyrgyz Republic</option>
		                      <option value="la"   >Laos</option>
		                      <option value="lv"   >Latvia</option>
		                      <option value="lb"   >Lebanon</option>

		                      <option value="ls"   >Lesotho</option>
		                      <option value="lr"   >Liberia</option>
		                      <option value="ly"   >Libya</option>
		                      <option value="li"   >Liechtenstein</option>
		                      <option value="lt"   >Lithuania</option>
		                      <option value="lu"   >Luxembourg</option>

		                      <option value="mo"   >Macau</option>
		                      <option value="mk"   >Macedonia</option>
		                      <option value="mg"   >Madagascar</option>
		                      <option value="mw"   >Malawi</option>
		                      <option value="my"   >Malaysia</option>
		                      <option value="mv"   >Maldives</option>

		                      <option value="ml"   >Mali</option>
		                      <option value="mt"   >Malta</option>
		                      <option value="mh"   >Marshall Islands</option>
		                      <option value="mq"   >Martinique</option>
		                      <option value="mr"   >Mauritania</option>
		                      <option value="mu"   >Mauritius</option>

		                      <option value="yt"   >Mayotte</option>
		                      <option value="mx"   >Mexico</option>
		                      <option value="md"   >Moldova</option>
		                      <option value="mc"   >Monaco</option>
		                      <option value="mn"   >Mongolia</option>
		                      <option value="ms"   >Montserrat</option>

		                      <option value="ma"   >Morocco</option>
		                      <option value="mz"   >Mozambique</option>
		                      <option value="mm"   >Myanmar</option>
		                      <option value="na"   >Namibia</option>
		                      <option value="nr"   >Nauru</option>
		                      <option value="np"   >Nepal</option>

		                      <option value="nl"   >Netherlands</option>
		                      <option value="an"   >Netherlands Antilles</option>
		                      <option value="nc"   >New Caledonia</option>
		                      <option value="nz"   >New Zealand</option>
		                      <option value="ni"   >Nicaragua</option>
		                      <option value="ne"   >Niger</option>

		                      <option value="ng"   >Nigeria</option>
		                      <option value="nu"   >Niue</option>
		                      <option value="nf"   >Norfolk Island</option>
		                      <option value="kp"   >North Korea</option>
		                      <option value="mp"   >Northern Mariana Islands</option>
		                      <option value="no"   >Norway</option>

		                      <option value="om"   >Oman</option>
		                      <option value="pk"   >Pakistan</option>
		                      <option value="pw"   >Palau</option>
		                      <option value="ps"   >Palestinian Territories</option>
		                      <option value="pa"   >Panama</option>
		                      <option value="pg"   >Papua New Guinea</option>

		                      <option value="py"   >Paraguay</option>
		                      <option value="pe"   >Peru</option>
		                      <option value="ph"   >Philippines</option>
		                      <option value="pn"   >Pitcairn Islands</option>
		                      <option value="pl"   >Poland</option>
		                      <option value="pt"   >Portugal</option>

		                      <option value="pr"   >Puerto Rico</option>
		                      <option value="qa"   >Qatar</option>
		                      <option value="re"   >Reunion</option>
		                      <option value="ro"   >Romania</option>
		                      <option value="ru"   >Russia</option>
		                      <option value="rw"   >Rwanda</option>

		                      <option value="sh"   >Saint Helena and Dependencies</option>
		                      <option value="kn"   >Saint Kitts & Nevis</option>
		                      <option value="lc"   >Saint Lucia</option>
		                      <option value="pm"   >Saint Pierre and Miquelon</option>
		                      <option value="vc"   >Saint Vincent and the Grenadines</option>
		                      <option value="ws"   >Samoa</option>

		                      <option value="sm"   >San Marino</option>
		                      <option value="st"   >Sao Tome and Principe</option>
		                      <option value="sa"   >Saudi Arabia</option>
		                      <option value="sn"   >Senegal</option>
		                      <option value="sc"   >Seychelles</option>
		                      <option value="sl"   >Sierra Leone</option>

		                      <option value="sg"   >Singapore</option>
		                      <option value="sk"   >Slovakia</option>
		                      <option value="si"   >Slovenia</option>
		                      <option value="sb"   >Solomon Islands</option>
		                      <option value="so"   >Somalia</option>
		                      <option value="za"   >South Africa</option>

		                      <option value="gs"   >South Georgia and the South Sandwich Islands</option>
		                      <option value="kr"   >South Korea</option>
		                      <option value="es"   >Spain</option>
		                      <option value="pi"   >Spratly Islands</option>
		                      <option value="lk"   >Sri Lanka</option>
		                      <option value="sd"   >Sudan</option>

		                      <option value="sr"   >Suriname</option>
		                      <option value="sj"   >Svalbard and Jan Mayen Islands</option>
		                      <option value="sz"   >Swaziland</option>
		                      <option value="se"   >Sweden</option>
		                      <option value="ch"   >Switzerland</option>
		                      <option value="sy"   >Syria</option>

		                      <option value="tw"   >Taiwan</option>
		                      <option value="tj"   >Tajikistan</option>
		                      <option value="tz"   >Tanzania</option>
		                      <option value="th"   >Thailand</option>
		                      <option value="tg"   >Togo</option>
		                      <option value="tk"   >Tokelau</option>

		                      <option value="to"   >Tonga</option>
		                      <option value="tt"   >Trinidad and Tobago</option>
		                      <option value="tn"   >Tunisia</option>
		                      <option value="tr"   >Turkey</option>
		                      <option value="tm"   >Turkmenistan</option>
		                      <option value="tc"   >Turks and Caicos Islands</option>

		                      <option value="tv"   >Tuvalu</option>
		                      <option value="ug"   >Uganda</option>
		                      <option value="ua"   >Ukraine</option>
		                      <option value="ae"   >United Arab Emirates</option>
		                      <option value="uk"   >United Kingdom</option>
		                      <option value="us"   >United States</option>

		                      <option value="um"   >United States Minor Outlying Islands</option>
		                      <option value="uy"   >Uruguay</option>
		                      <option value="vi"   >US Virgin Islands</option>
		                      <option value="uz"   >Uzbekistan</option>
		                      <option value="vu"   >Vanuatu</option>
		                      <option value="va"   >Vatican City</option>

		                      <option value="ve"   >Venezuela</option>
		                      <option value="vn"   >Vietnam</option>
		                      <option value="wf"   >Wallis and Futuna Islands</option>
		                      <option value="eh"   >Western Sahara</option>
		                      <option value="ye"   >Yemen</option>
		                      <option value="zm"   >Zambia</option>

		                      <option value="zw"   >Zimbabwe</option>
		                      <option value="rs"   >Serbia</option>
		                      <option value="me"   >Montenegro</option>
		                 </select>


          </td>
  </tr>


  <tr>
    <td class="colouredCell">Password*</td>
    <td><input type="password" name="password" id="password" autocomplete="off"/>&nbsp; <label id="password_label" class="level_msg"></td>
  </tr>



  <tr>
    <td class="colouredCell">Confirmpassword*</td>
    <td><input type="password" name="cpassword" id="cpassword" autocomplete="off"/>&nbsp; <label id="cpassword_label" class="level_msg"></td>
  </tr>


  <tr>
    <td class="colouredCell">Type the code shown*</td>
    <td>

	<table border="0" cellpadding="0" cellspacing="0" width="200" style="border-collapse:collapse;">
  <tr>
    <td width="152" align="left">

		<img src="get_captcha.php" alt="" id="captcha" /></td>
    <td width="48" align="left"><img src="images/refresh.jpg" width="25" alt="" id="refresh" style="cursor:pointer;"/></td>
  </tr>
  <tr>
    <td><input name="code" type="text" id="code" autocomplete="off"/></td>
    <td width="48"></td>
  </tr>



</table>
<label id="code_label" class="code_label">
	</td>
  </tr>
  <tr>
    <td>
      <input type="submit" name="Submit" value="Register" />   </td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
