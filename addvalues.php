<?php

require('connect.php');

//$sql = "SELECT * FROM users WHERE username='$username'";
//$result = mysqli_query($conn, $sql);
//$row = mysqli_num_rows($result); 
echo '
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
';
       


?>