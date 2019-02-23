<!DOCTYPE v>
<!-- saved from url=(0055)file:///home/user/login.html?bg=select&btnSubmit=Submit -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    
    <div id="logo">
					<a href="search.html"><img src="images/sssss.jpg" height="112" width="118"></a>
				</div>
    <hr>
    
    <div id="left">
        <ul>
            <form id="ch1" action="logout.php"><input type=submit value="logout" name="logout" width="90px" ></form>

        </ul> 
    </div>
    <?php
        include "conn.php";
    
    ?>
    
<form id="dona" action="keyword.php" method="post" >
    <fieldset>
        <legend>Enter Patient Details</legend>
<table cellspacing="1" cellpadding="3" width="70%" align="center" id="1">
<tbody>
  
    
<tr>
<td>
	<label for="pat_name"><strong>Full Name</strong></label>
</td>
<td width="30">
	<strong>:</strong>
	</td>

	<td>
		<input type="text" name="fname" maxlenght="30" width="30" required>
	</td>	
	</tr>
	<tr>
<td>
	<label for="pat_age"><strong>Age</strong></label>
</td>
<td width="30">
	<strong>:</strong>
	</td>

	<td>
		<input type="text" name="age" maxlenght="10" width="30" required>
	</td>
	</tr>
      <tr>
<td>

	<label for="pat_det"><strong>Gender </strong></label>
	</td>
	<td width="30">
	<strong>:</strong>
	</td>
	<td>
	<select name="state">
                <option value="0">--Select--</option>
                <option value="MALE">MALE</option>
        <option value="FEMALE">FEMALE</option></select>
	</td>	
</tr>
    <tr>
        <td>
            <label for="state"><strong>STATE</strong></label>
        </td>
        <td width="30">
	<strong>:</strong>
	</td>
            <td>
            <select name="state" required >
                <option value="0">--Select--</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Pondicherry">Pondicherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="dist"><strong>District</strong></label>
        </td>
        <td width="30">
	<strong>:</strong>
	</td>
            <td>
            <input type="text" name="distr" maxlenght="50" width="30" required>
    </tr>
		
	<tr>
  <td>
	<label for="bg"><strong>BLOOD GROUP</strong></label>
	</td>
	<td width="30">
	<strong>:</strong>
	</td>
	<td>
        
            <input type="text" name="bg" maxlenght="9" width="30">
       
	</td>
	</tr>
		<tr>
<td>
	<label for="pat_age"><strong>When Blood Needed</strong></label>
</td>
<td width="30">
	<strong>:</strong>
	</td>

	<td>
		<input type="date" name="dat" required>
	</td>
	</tr>
		
	
	<tr>
	<td>
	<label for="mon_no"><strong>MOBILE NUMBER</strong></label>
	</td>
	<td width="30">
	<strong>:</strong>
	</td>
	<td>
		<input type="text" name="number" maxlenght="50" width="30" required>
		</td>
		
 </tr><tr>
        <td>
            <label for="hspt"><strong>Hospital Name</strong></label> 
        </td>
        <td><strong>:<strong></strong></strong></td>
        <td>
        	<input type="text" name="hspt" maxlength="50" width="30" required>
		</td>
    </tr>
     <tr>
        <td>
            <label for="loc"><strong>Location</strong></label> 
        </td>
        <td><strong>:</strong></td>
        <td>
        	<input type="text" name="loc" maxlength="50" width="30" required>
		</td>
    </tr>
        
   <tr>
      <td>
      	<label for="add"><strong>Address</strong></label>
      	</td>
      	<td width="30"><strong>:</strong></td>
      	<td>
      	<textarea name="add" rows="4" cols="50" form="dona"></textarea>
      	</td>
    </tr>
   <tr>
    <td colspan="3" height="30">
    <div align="center">
     &nbsp;
<input type="submit"  value="Submit" >
</div>
    </td>
    </tr>
    </tbody>
      </table>
    
    
</fieldset>
</form>
    <?php
    
    $mysqli->close();
    ?>
       

<div class="footer">
        
       <div id="connect">
           Contact(via):
					<a href="http://pinterest.com/" target="_blank" class="pinterest"><img src="images/logotype-p-logo-pinterest-icon.png" width="40px" height="40px"></a>
                    <a href="http://facebook.com" target="_blank" class="facebook"><img src="images/images.jpg" width="40px" height="40px"></a> <a href="http://www.twitter.com" target="_blank" class="twitter"><img src="images/69172344e262354e7440898e0320f3d7--photo-tricks-portfolio-site.jpg" width="40" height="40"></a> <a href="http://googleplus.com" target="_blank" class="googleplus"><img src="images/black-google-plus-logo-png.png" width="40" height="40" ></a>
				</div>
			</div>
    </body>
			
</html>