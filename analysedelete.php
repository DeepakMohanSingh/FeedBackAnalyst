<?php
$flag=0;
if(isset($_POST["submit"]))
{
	require(__DIR__ . '/vendor/paralleldots/apis/autoload.php');
	require('apikey.php');
	
	$filepath = "files/".$_FILES['file']['name'];
	$fileExtensions = ['csv'];
	$fileName = $_FILES['file']['name'];
	$fileSize = $_FILES['file']['size'];
	$tmp = explode('.', $fileName);
        $fileExtension = end($tmp);
	
	if (!in_array($fileExtension,$fileExtensions)) 
	{
	   echo "This file extension is not allowed. Please upload a CSV file";
	}
	else
	{
  	 if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
	 {
	  $flag=1;
	  $file = fopen($filepath,"r");
	  $line = fgetcsv($file);
	  $result=""; $positive=0; $neutral=0; $negative=0; $nofeedback=0; $color=0;
	  $request="[";
      while (($line = fgetcsv($file)) !== FALSE) {
      //$line is an array of the csv elements
	  
	  if(!isset($line[2]))
	  {
   	    $nofeedback++;
		echo "Hi";
	    continue;
	  }
	  $request.="\"";
	  $request.=$line[2];
	  $request.="\"";
	  $request.=",";
          }
	$req= rtrim($request, ',');
	$req.="]";
	echo "<br>";
	echo $req;
	echo "<br>";
        fclose($file);
        $response = sentiment_batch($req);
	$result = json_decode($response);
	  foreach($result->sentiment as $sentiment)
	  {
	   if(isset($sentiment->positive) && isset($sentiment->neutral) && isset($sentiment->negative))
           {
	    $ar = array("POSITIVE"=>$sentiment->positive, "NEUTRAL"=>$sentiment->neutral, "NEGATIVE"=>$sentiment->negative);
  	    $keyOfhighestVal = array_keys($ar,max($ar));
	    $res = $keyOfhighestVal[0];
	    if(strcmp($res,"POSITIVE")==0)
		$positive++;
	    else if(strcmp($res,"NEUTRAL")==0)
		$neutral++;
	    else
		$negative++;
	   }
	  }
	}
	else
	{
		echo "File upload failed.";
	}
      }
}
else
{
	echo "error";
}
if($flag==1)
{
	echo $response;
	echo '<br>';
  echo "POSITIVE: ".$positive.'<br>';   
  echo "NEGATIVE: ".$negative.'<br>';
  echo "NEUTRAL: ".$neutral.'<br>';
  echo "NO FEEDBACK: ".$nofeedback.'<br>';
}
?>