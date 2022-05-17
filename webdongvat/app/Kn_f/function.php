<?php 
 function subMenu($data,$cat_p = 2,$str='---')
        {
            echo "<ul>";
            foreach ($data as $key => $val) {
              $id = $val["id"];
              $name = $val["name"];
              $cat_p2 = $val["cat_p"];
              if ($val["cat_p"] == $cat_p) {
                  echo "<li><a>$str $name</a></li>";
                  subMenu($data,$id);
                
                  

              }
          }
          echo "</ul>";

      }

 ?>