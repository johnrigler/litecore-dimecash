  <!-- Begin Body -->
<?php

if($sections[$thispage])
{
echo "<div class=bodyframe>";


$before = array("[0m","[40;31;01m","[01;32m","[01;34m","[01;36m" );
$after = array("</span>","<span class=color40_31_01>","<span class=color32>","<span class=color34>","<span class=color36>");
$colors = array();
$target = array();

$colors[0] ="";
$colors[31]="[31m";
$colors[32]="[32m";
$colors[33]="[33m";
$colors[99]="[00m";
$target[31]="<span class=color31>";
$target[32]="<span class=color32>";
$target[33]="<span class=color33>";
$target[99]="</span>";

foreach ($sections[$thispage] as $file)
  {
  list($prefix,$postfix) = explode(".",$file);
  list($page,$section) = explode("-",$prefix);
  if($page == $thispage)
  {
    if($postfix == "ts")
      {
      echo "<pre>";
			$lines = file($file);
      foreach ($lines as $line)
        {
				//typescript_color(4,5);
        $line = str_replace($before,$after,$line);
        $line = str_replace($colors,$target,$line);
 				echo "$line<span class=normal>";
        }
      echo "</pre>";
      echo "<hr>";
      }

    if($postfix == "php")
        { 
        echo "<pre>";
        echo "<div class=spacing><span class=section>$section</span>";
        include "$file";
        echo "</pre>";
        }
    if($postfix == "png")
        echo "
<div class=spacing><span class=section>$section</span>
  <div>
   <img src=$file>
  </div>
</div>
";
   }
  }
 }


?>
   </div>
 </div>
</body>
</html>
