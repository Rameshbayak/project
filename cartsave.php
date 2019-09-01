<?php

 if (isset($_POST['done'])) 
            require_once 'conn.php';
        $u=$_POST['id'];
        $bid=$_POST['qty'];
   require_once 'conn.php';
          $l = "INSERT INTO `dbhsm`.`myorder`(`itemid`, `itemname`, `catagory`, `sub1`, `sub2`, `sub3`, `rate`) SELECT  `itemid`, `itemname`, `catagory`, `sub1`, `sub2`, `sub3`, `rate` FROM `dbhsm`.`cart` where itemid='$u'";
             $y = "UPDATE `myorder` SET `quantity` ='$bid' where itemid='$u'";
               if(($con->query($l)==TRUE) && ($con->query($y)==TRUE))
               {
                    echo "<script>window.location='index.php'</script>";
               }
               else{
                 echo "<script>window.location='index.php'</script>";
                 
               }
?>