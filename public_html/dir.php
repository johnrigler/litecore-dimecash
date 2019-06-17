<?php

$cwd = getcwd();
$this_dir = substr($cwd,strlen($_SERVER[DOCUMENT_ROOT]));
$breadcrumbs = array();
$files = array();
$dirs = array();
$dh = opendir('.');

$breadcrumbs = explode("/", $this_dir);

while (($tmp = readdir($dh)) !== false) 
{
	if(is_dir($tmp))
		$dirs []= $tmp;
	else
		$files []= $tmp;

}
closedir($dh);

array_shift($dirs);
array_shift($dirs);

echo "<div class=breadcrumb>";

$menupath = "https://$_SERVER[SERVER_NAME]";

foreach($breadcrumbs as $crumb)
{
	if ($crumb == "")
	$crumb = "home";
	else
	$menupath = $menupath . "/" . $crumb;

	echo "<a href=$menupath/index.php> $crumb</a> |";
}

echo "<table>";
echo "$thisdir";
echo "</table>";

echo "</div>";

echo "<div class=menu>";
foreach ($dirs as $dir) 
{

			echo "<br><a href=$this_dir/$dir> $dir</a>\n";
}

echo "</div>";
?>
