<?php
$source = $_GET['source'];
$dest = $_GET['dest'];
$dbName = $_GET['db'];

$fakeSource = "sourcewearevberkakkakakkakakakakakakakakakakakakakaakaka";
$fakeDest = "destwearevberkakkakakkakakakakakakakakakakakakakaakaka";

$fileContent = file_get_contents(dirname(__FILE__) . '/' . $dbName . '.sql');
$fileContent = str_replace($source, $fakeSource, $fileContent);

//http://localhost/vber/fix-domain-wp.php?source=localhost/vber&dest=vber.ou.edu.vn/vber2018-private-only&db=vber
//http://localhost/vber/fix-domain-wp.php?source=vber.ou.edu.vn&dest=vber2017.ou.edu.vn&db=vber_ou_edu_vn
//update wp_posts set post_content = REPLACE(post_content, 'localhost/vber', 'banxehoi.top');

$pattern = '/(s:)(\d+):\\\"http:\/\/' .(str_replace('/', '\\/', $fakeSource)). '/';
//$pattern = '/(s:)(\d+):\\\"http:\/\/localhost\/vber/';

$delta = strlen($dest) - strlen($source);
preg_match_all($pattern, $fileContent, $matches);
$searchList = $replacementList = $serializedList = [];

// Debug
echo '<pre>';
print_r($matches);
exit;
//---------------
foreach($matches[0] as $index=>$match){
	$count = $matches[2][$index];
	$replaceStr = str_replace(['s:' . $count, 'http://' . $fakeSource], ['s:' . ($count+$delta), 'http://' . $fakeDest], $match);
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
$newFileContent1 = str_replace($fakeSource, $fakeDest, $newFileContent1, $count1);
$newFileContent1 = str_replace($serializedList, $replacementList, $newFileContent1, $count2);
$newFileContent1 = str_replace($fakeSource, $source, $newFileContent1);
$newFileContent1 = str_replace($fakeDest, $dest, $newFileContent1);
//---------------
$newFileContent2 = str_replace($searchList, $replacementList, $fileContent, $count3);
$newFileContent2 = str_replace($fakeSource, $source, $newFileContent2);
$newFileContent2 = str_replace($fakeDest, $dest, $newFileContent2);

file_put_contents(dirname(__FILE__) . '/' . $dbName . '-replaced-all['.str_replace('/', '-', $dest).'].sql', $newFileContent1);
file_put_contents(dirname(__FILE__) . '/' . $dbName . '-replaced['.str_replace('/', '-', $dest).'].sql', $newFileContent2);

echo 'Replace successfully!<br>';
echo 'replaced-all.sql: ' .($count1+$count2). ' replacements<br>';
echo 'replaced.sql: ' .$count3. ' replacements<br>';

?>