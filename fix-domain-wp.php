<?php
$source = $_GET['source'];
$dest = $_GET['dest'];
$dbName = $_GET['db'];

$fileContent = file_get_contents(dirname(__FILE__) . '/' . $dbName . '.sql');

//http://localhost/vber2018/fix-domain-wp.php?source=localhost/vber&dest=localhost/vber2018&db=vber
$pattern = '/(s:)(\d+):\\\"http:\/\/' .(str_replace('/', '\\/', $source)). '/';
//$pattern = '/(s:)(\d+):\\\"http:\/\/localhost\/vber/';

$delta = strlen($dest) - strlen($source);
preg_match_all($pattern, $fileContent, $matches);
$searchList = $replacementList = $serializedList = [];
//---------------
foreach($matches[0] as $index=>$match){
	$count = $matches[2][$index];
	$replaceStr = str_replace(['s:' . $count, 'http://' . $source], ['s:' . ($count+$delta), 'http://' . $dest], $match);
	$searchList[] = $match;
	$serializedList[] = md5($match);
	$replacementList[] = $replaceStr;
}
//---------------
$searchList = array_unique($searchList);
$serializedList = array_unique($serializedList);
$replacementList = array_unique($replacementList);
//---------------
$newFileContent1 = str_replace($searchList, $serializedList, $fileContent);
$newFileContent1 = str_replace($source, $dest, $newFileContent1, $count1);
$newFileContent1 = str_replace($serializedList, $replacementList, $newFileContent1, $count2);
//---------------
$newFileContent2 = str_replace($searchList, $replacementList, $fileContent, $count3);

file_put_contents(dirname(__FILE__) . '/' . $dbName . '-replaced-all.sql', $newFileContent1);
file_put_contents(dirname(__FILE__) . '/' . $dbName . '-replaced.sql', $newFileContent2);

echo 'Replace successfully!<br>';
echo 'replaced-all.sql: ' .($count1+$count2). ' replacements<br>';
echo 'replaced.sql: ' .$count3. ' replacements<br>';

?>