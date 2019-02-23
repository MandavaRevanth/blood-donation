<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<center>
<body>
     <h1><strong>Register</strong></h1>
    <hr>
    <div id="left">
        <ul>
            <li><a href="home.php">Home</a></li>
       <li> <a href="search.php">Search</a></li>
        <li><a href="about.php">Aboutus</a></li>
          <li>  <a href="why.php">Why Blood Donation</a></li>
            <li><a href="feedback.php">FeedBack</a></li>
        </ul> 
    </div>
    
    <?php
        include "conn.php";
    ?>
   
<form name="reg" action="add_to_db.php" method="post" >
 <table cellspacing="1" cellpadding="3" width="70%" align="center">
<tr>
  <td>
	<label for="first_name">FIRST NAME </label>
	</td>
    	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="first_name" maxlength="50" size="30"  placeholder="Enter first name" required>
	 </td>
	</tr>
	<tr>
  <td>
	<label for="last_name">LAST NAME </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="last_name" maxlength="50" size="30" placeholder="Enter last name" required>
	 </td>
	</tr>
	<tr>
  <td>
	<label for="dob">DATE OF BIRTH </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="date"name="dob" placeholder="dd/mm/yyyy">
	 </td>
	</tr>
    <tr>
  <td>
	<label for="bg">BLOOD GROUP</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
       <input type="text" name="bg" maxlength="30" width="30" placeholder="Enter city" required>
	 </td>
	</tr>
    <tr>
  <td>
	<label for="mn">MOBILE NUMBER </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="mn" maxlength="10" size="20">
	 </td>
	</tr>
         
    <tr>
        <td>
            <label for="state">STATE</label>
        </td>
        	<td width="10"><strong>:</strong></td>
            <td>
           <select name="state">
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
            <label for="state">District</label>
        </td>
          	<td width="10"><strong>:</strong></td>
            <td>
             <input type="text" name="dist" maxlength="30" width="30" placeholder="Enter District" required>
        </td>
    </tr>
    <tr>
  <td>
	<label for="city">CITY </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text" name="city" maxlength="30" width="30" placeholder="Enter city" required>
	 </td>
	</tr>
	<tr>
        <td>
            <label for="email">Email</label>
        </td>
        	<td width="10"><strong>:</strong></td>
        <td>
            <input name="email" maxlength="50" width="30" placeholder="Valid id" required>
        </td>
    </tr>	
        <tr>
            <td>
        <label for="pass">PASSWORD</label>
        </td>
            	<td width="10"><strong>:</strong></td>
            <td>
                <input type="password" name="pass" maxlength="50" width="30" placeholder="enter password" required>
            </td>
     </tr>
  
               <tr>
                         <td >
                        </td>
                     <td >
             <input type="checkbox" id="chkTermsAndCondition" name="chkTermsAndCondition">
                
                         <p> I authorise the website to display my information</p>  
                     </td>
</tr>
         <tr>
            <td colspan="3" height="30">
                <div align="center">
         <input name="hidDistrict" type="hidden" id="hidDistrict" />
         <input type="submit"  value="Submit" >
        <input name="hidCity" type="hidden" id="hidCity" />
                </div>
            </td>
        </tr>          
    </table>
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
    <? php
    
    
    ?>



    </center>
</html>
