<?php
            require_once 'conn.php';
        $u=$_GET['id'];
require_once 'conn.php';
         $l = "INSERT INTO `dbhsm`.`cart`(`itemid`, `itemname`, `catagory`, `sub1`, `sub2`, `sub3`, `rate`) SELECT   `itemid`, `itemname`, `catagory`, `sub1`, `sub2`, `sub3`, `rate` FROM `dbhsm`.`items` where itemid='$u'";
               if(($con->query($l)==TRUE))
               {
                    echo "<script>window.location='index.php'</script>";
               }
               else{
                 echo "<script>window.location='index.php'</script>";
                 
               }
?>