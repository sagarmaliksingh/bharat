<?php
//if "email" variable is filled out, send email
  //echo '<script> alert("hello"); </script>';
  if (isset($_REQUEST['submit']))  {
   
  //Email information
  $admin_email = "sagarmaliksingh@gmail.com";
  $email = $_REQUEST['name'];
  $subject = $_REQUEST['name1'];
  $comment = $_REQUEST['address'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
 echo '<script> alert("sagar"); </script>';
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <!--<form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form> -->
  
<?php
  }
?>