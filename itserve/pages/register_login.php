
 
<!DOCTYPE html>
<html >
<head>
<meta charset=utf-8" />
<title>Itserve</title>

<link href="../css/itserve.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div id="apDiv3">
  <p class="itserve">&nbsp;</p>
  <form id="form3" name="form1" method="post" action="">
    <div id="apDiv4">
      <table width="20%" border="0">
        <tr>
          <td>&nbsp;</td>
          <td ><p>
            <?php require("../include/login.php");
	error_reporting(E_ALL ^ E_NOTICE);
echo $login;

 ?>
          </p></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input name="user" type="text" class="textfield" id="username" value = "Email" /></td>
          <td><input name="pass" type="password" class="textfield" id="password" value ="Password"/></td>
          <td align="right"><input name="donelogin" type="submit" class="button" id="donelogin" value="LogIn" /></td>
        </tr>
      </table>
    </div>
    <p>&nbsp;</p>
  </form>
  <p class="itserve">It Serve</p>
</div>

<div id="apDiv5">
  <form action=""  method="post" enctype="multipart/form-data" name="form2" id="form2">
    
    <center>
      </center>
    
    <table width="20%" border="0" align="center">
      <tr>
        <td align="right" bgcolor="#999966"   ><a href="#"><span class="don">Register</span></a></td>
      </tr>
      <tr>
        <td align="right"  class="warning"><p>
          <?php require("../include/done_registering.php");
	error_reporting(E_ALL ^ E_NOTICE);
echo $ss;

 ?>
        </p></td>
      </tr>
      <tr>
        <td align="right"><table width="20%" border="0" align="right">
          <tr>
            <td align="right"><span class="regirster_text">First Name</span><br/>
              <input required name="firstname" type="text" class="textfield" id="form" placeholder="First Name" size="21"  value="<?php echo $firstname; ?>"/></td>
            <td align="right"><span class="regirster_text">Last Name</span><br/>
              <input name="lastname" type="text" class="textfield" id="form"  placeholder="Last Name" value="<?php echo $lastname; ?>"/></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="right"><span class="regirster_text">Email</span><br/>
          <input required name="email" type="email" class="textfield" id="form1" placeholder="Email eg.itserve@yahoo.com"  value="<?php echo $email; ?>" size="44"/></td>
      </tr>
      <tr>
        <td align="right"><span class="regirster_text">Password</span><br/>
          <input name="password" type="password" class="textfield" id="textfield2" placeholder="Password" size="44"  /></td>
      </tr>
      <tr>
        <td align="right"><span class="regirster_text">Occupation</span><br/>
          <input name="occupation" type="text" class="textfield" id="textfield89" size="44"   /></td>
      </tr>
      <tr>
        <td align="right"><table width="30%" border="0" align="right">
          <tr>
            <td><span class="regirster_text">Male</span><br/>
              <input name="sex" type="radio" class="textfield" id="sex_0" value="Male" /></td>
            <td align="right"><span class="regirster_text">Female</span><br/>
              <input name="sex" type="radio" class="textfield" id="sex_1" value="Female" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="right"><span class="regirster_text">
          <input name="age" type="checkbox" class="textfield" id="checkbox" value="Above 18"/>
          Are you at least 18 of age or above?</span>
          <label for="checkbox"></label></td>
      </tr>
      <tr>
        <td align="right"><input name="done" type="submit" class="button" id="done" value="Done" /></td>
      </tr>
    </table>
    
  </form>
</div>
<div id="apDiv6"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p></p>
<p>&nbsp;</p>
<div class="footer">Copyright © 2012 itserve. All Rights Reserved<center>Powered by stecks</center></div>
<p>
  <script src="../javascript/login.js"></script>

</body>
</html>