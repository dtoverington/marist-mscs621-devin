<style>
font-family:sans-serif;
</style>
<h1>Image Analyzer</h1>
<form name="image" action="index.php" method="post">
Image URL: <input type="text" name="imageurl">
<input type="submit" value="Analyze">
</form> <br><br>


<?php

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
  $imageurl = $_POST['imageurl'];
  
  $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_POST => true,
  CURLOPT_URL => "https://gateway.watsonplatform.net/visual-recognition/api/v3/classify?version=2018-03-19",
  CURLOPT_USERPWD => "apikey:vYILCr3wTIbsmMjfUNjSuvV_Voc3gO4kxgL5r-693eT1",
  CURLOPT_POSTFIELDS => "url=" . $imageurl,
  CURLOPT_RETURNTRANSFER => true
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $object = json_decode($response);
  echo "<img src='" . $object->images[0]->resolved_url . "' width=250px ><br>";
  echo "<h3>";
  foreach ($object->images[0]->classifiers[0]->classes as $result) {
	$int = (float)$result->score;
	echo $result->class . " - ";
	echo $int*100 . "%<br>";
 }
  echo "</h3>";
}
}
?>