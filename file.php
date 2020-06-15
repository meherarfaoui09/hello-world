<?php

$noti = $_POST['sites[]'];

     $pdo = Database::connect();
          $sql4 = "SELECT * FROM appartient  WHERE aempid = '$eid' ORDER BY ddate DESC ";
          foreach ($pdo->query($sql) as $row) {  echo '<tr>';
      
      $ligne=mysqli_fetch_assoc($sql4);
      if ($noti==$ligne['aempid,asite'])
      {
      $trouve=1
      }else{
         $pdo = Database::connect();
                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 $sql5= "INSERT $noti INTO notification (idnotif,aempid,asite,notif ) values(?,?,?,?)";
                 $q += $pdo->prepare($sql);
                 $q->execute(array($noti));

                 $sql5 = "INSERT *INTO notification  WHERE $noti = 'asite',  ORDER BY ddate DESC ";
                 alert    (log("admin vous a donné access au site"+ '$asite'));
                $sql6 = " UPDATE notification set notif = 1 WHERE  idnotif = $id_notif " ;
      
         

      }
        
      
      
      }
      

      }      
      ?>

                

        
