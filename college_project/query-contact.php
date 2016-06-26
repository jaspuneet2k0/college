<?php

		//print_r($_REQUEST);
									
			
		$email=$_POST['email'];
		$name=$_POST['name'];
		
		$phone=$_POST['phone'];
		
		$lname=$_POST['lname'];
		
	
		$msg=$_POST['msg'];
  
		$to="info@grtextiles.com";
		
		$sub="Enquiry mail";
		
		
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= "From: ".$to."\r\n";
		
		
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers1 .= "From: ".$email."\r\n";
		
	
			$mail='<table cellspacing="0" cellpadding="20" border="0" width="100%" height="100%" style="background-color:#F9F9F9" id="ecxbodyTable">
            	<tbody><tr>
                	<td align="center" valign="top">
                    	
                        <table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#F9F9F9" class="ecxrounded6" id="ecxtemplateContainer">
                        	<tbody><tr>
                            	<td align="center" valign="top">
                                	
                                    <table cellspacing="0" cellpadding="0" border="0" width="600">
                                    	<tbody>
                                    	  <tr>
                                    	    <td bgcolor="#fff">&nbsp;</td>
                                  	    </tr>
                                    	  <tr>
                                        	<td bgcolor="#fff">
                                            	<h1 style="font-size:24;margin-bottom:15px;padding:0"><div style="text-align:left"><a target="_blank" style="color:#006600" href="http://grtextiles.com"><img src="http://grtextiles.com/images/logo.png" style="margin: 7px 0 0 28px;" width="230"  border="0"></a></div>
                                            	</h1>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                	
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	
                                	<table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#FFFFFF" class="ecxrounded6" id="ecxtemplateBody">
                                    	<tbody><tr>
                                        	<td align="left" valign="top" style="line-height:150%;font-family:Arial;font-size:12px;color:#6B6B6B;padding:20px" class="ecxbodyContent">
                                                    
                                              
                                              <p style="padding:0 0 10px 0">For your records, here is a copy of the Enquiry you submitted to us...</p>
<ul style="display:block;padding:0;list-style:none;border-top:1px solid #eee" class="ecxprofile-list">


<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>First Name:</strong> '.$name.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Last Name:</strong> '.$lname.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Email Address:</strong> '.$email.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Phone:</strong> '.$phone.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Message:</strong> '.$msg.'</li>

<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Date:</strong> '.date("Y-M-d").'</li>
</ul>
<p style="padding:0 0 10px 0">If at any time you wish to stop receiving our emails, you can call us at: <span class="style2"> +91 95019 99879 </span><br>
    </p>
<p style="padding:0 0 10px 0">You may contact us at:<br>
<a style="color:#006600" href="mailto:info@grtextiles.com">info@grtextiles.com</a></p>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        	
                        </tbody></table>
                        
                    </td>
                </tr>
            </tbody></table>';
			
			
			// this mail will be sent to owner of the website
			$mail1='<table cellspacing="0" cellpadding="20" border="0" width="100%" height="100%" style="background-color:#F9F9F9" id="ecxbodyTable">
            	<tbody><tr>
                	<td align="center" valign="top">
                    	
                        <table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#F9F9F9" class="ecxrounded6" id="ecxtemplateContainer">
                        	<tbody><tr>
                            	<td align="center" valign="top">
                                	
                                    <table cellspacing="0" cellpadding="0" border="0" width="600">
                                    	<tbody>
                                    	  <tr>
                                    	    <td bgcolor="#fff">&nbsp;</td>
                                  	    </tr>
                                    	  <tr>
                                        	<td bgcolor="#fff">
                                            	<h1 style="font-size:24;margin-bottom:15px;padding:0"><div style="text-align:left"><a target="_blank" style="color:#006600" href="http://grtextiles.com/"><img src="http://grtextiles.com/images/logo.png" style="margin: 7px 0 0 28px;" width="230"  border="0"></a></div>
                                            	</h1>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                	
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	
                                	<table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#FFFFFF" class="ecxrounded6" id="ecxtemplateBody">
                                    	<tbody><tr>
                                        	<td align="left" valign="top" style="line-height:150%;font-family:Arial;font-size:12px;color:#6B6B6B;padding:20px" class="ecxbodyContent">
                                                    
                                              
                                              <p style="padding:0 0 10px 0">A new Enquiry.</p>
<ul style="display:block;padding:0;list-style:none;border-top:1px solid #eee" class="ecxprofile-list">


<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>First Name:</strong> '.$name.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Last Name:</strong> '.$lname.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Email Address:</strong> '.$email.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Phone:</strong> '.$phone.'</li>
<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Message:</strong> '.$msg.'</li>

<li style="display:block;padding:5px 0;border-bottom:1px solid #eee"><strong>Date:</strong> '.date("Y-M-d").'</li>
</ul>

<p style="padding:0 0 10px 0">You may contact us at:<br>
<a style="color:#006600" href="mailto:info@grtextiles.com">info@grtextiles.com</a></p>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        	
                        </tbody></table>
                        
                    </td>
                </tr>
            </tbody></table>';
			
			
			
			
			
			if(@mail($to,$sub,stripslashes($mail1),$headers1))

			{
						
					mail($email,$sub,stripslashes($mail),$headers);
					echo '<table cellspacing="0" cellpadding="20" border="0" width="100%" height="100%" style="background-color:#F9F9F9" id="ecxbodyTable">
            	<tbody><tr>
                	<td align="center" valign="top">
                    	
                        <table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#F9F9F9" class="ecxrounded6" id="ecxtemplateContainer">
                        	<tbody><tr>
                            	<td align="center" valign="top">
                                	
                                    <table cellspacing="0" cellpadding="0" border="0" width="600">
                                    	<tbody>
                                    	  <tr>
                                    	    <td bgcolor="#fff">&nbsp;</td>
                                  	    </tr>
                                    	  <tr>
                                        	<td bgcolor="#fff">
                                            	<h1 style="font-size:24;margin-bottom:15px;padding:0"><div style="text-align:left"><a target="_blank" style="color:#006600" href="http://grtextiles.com/"><img src="http://grtextiles.com/images/logo.png" style="margin: 7px 0 0 28px;" width="230" alt="" border="0"></a></div>
                                            	</h1>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                	
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	
                                	<table cellspacing="0" cellpadding="0" border="0" width="600" style="border-radius:6px;background-color:#FFFFFF" class="ecxrounded6" id="ecxtemplateBody">
                                    	<tbody><tr>
                                        	<td align="left" valign="top" style="line-height:150%;font-family:Arial;font-size:12px;color:#6B6B6B;padding:20px" class="ecxbodyContent">
                                                    
                                              
                                              <p style="padding:0 0 10px 0">Thanks a lot, Your Enquiry has been Submitted and we will get back to you soon.<br />
                                                <br />
                                               </p>
                                              <p style="padding:0 0 10px 0">
                                                Team - G.R. Textiles                                    
                                              <FORM METHOD="LINK" ACTION="index.php">
												<INPUT TYPE="submit" VALUE="Go Back">
												</FORM>
                                              </p>
</td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        	
                        </tbody></table>
                        
                    </td>
                </tr>

            </tbody></table>';	
			}
			else
			{
					echo '<div class="e_msg">Error Please try later..</div>';	
			}

?>
