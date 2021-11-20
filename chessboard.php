<!DOCTYPE html>
<html>
<head>
  <title>Layout Chess Board</title>
</head>
<body>
<table style="margin: outo;" border="4">
    <?php
    echo"<tr>";
       $CHB=array("","A","B","C","D","E","F","G","H");

       for($row=8;$row>=1;$row--)

       {
         for($colum=1;$colum<=8;$colum++){

         $a=$row + $colum ;

         if($a%2==1)
         { 
            echo"<td height=90px; width =50px; bgcolor=white>$CHB[$colum].$row</td>";
         }
            else{
                echo"<td height=50px; width =90px; bgcolor=gray>$CHB[$colum].$row</td>";
                 }
            }
              echo"</tr>";
       }
       ?>
   </table>
    </body>
    </html>