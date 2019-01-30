<?php
   $galleryDir = 'galerija/';
   foreach(glob("$galleryDir{*.jpg,*.gif,*.png,*.tif,*.jpeg}", GLOB_BRACE) as $photo) {
     $imgName = explode("/", $photo);
     $imgName = end($imgName);
     echo "<a href='$photo' title='$imgName'>";
     echo "<div style='float:left; border:1px solid black; width:100px; height:120px; padding:10px; margin:10px; text-align:center;'>";
     echo "<img src='$photo' style='max-height:100px; max-width:100px;'><br><span>$imgName</span>";
     echo "</div>";
     echo "</a>";
   }

   ?>