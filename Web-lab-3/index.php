<?php
$string = file_get_contents('index.html');
$count = preg_match_all("/<p>.+<\/p>/", $string, $match);
echo "Число <b>&lt;p&gt;...&lt;/p&gt;</b> в документе: " . $count . "<br>";
echo "<br>Линии: <br>";
for ($i=0; $i < $count; $i++) { 
    echo strip_tags($match[0][$i]) . "<br>";
}
?>