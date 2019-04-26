<?php
$text = file_get_contents('flatFileDB.txt');
$textArray = explode("\n", $text);
$randArrayIndexNum = array_rand($textArray);
$randPhrase = $textArray[$randArrayIndexNum];
?>
<html>
<body>
<h2><?php echo $randPhrase; ?></h2>
</body>
</html>