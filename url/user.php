<?php





echo "Username: ". preg_replace('#[^0-9a-z]#i', '', $_GET['u']);

echo "<a href=\"?u=abc\" '>test</a> ";

echo " <br><a href=\"article\" '>tes1t</a> ";

?>