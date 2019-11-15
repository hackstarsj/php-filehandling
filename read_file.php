<?php
echo "<br>==========================Reading a file Using readfile() function======<br>";
$data=readfile("data.txt");


echo "<br>========================Reading file using fopen==========<br>";

//r means only for read

//in both new file be created if file not exist
//w means open for write cursor start at beginning of file (Previous data will be deleted)
//a means open for write but start cursor at end of data in file (Previous Data is Preserver)


//x open file for write only if file not exist display error
$file=fopen("data.txt","r") or die("Unable to Open");
$data=fread($file,filesize("data.txt"));
//after file work complete close the file
fclose($file);
echo $data;


echo "<br>=======================Reading file line by line reading only single line======<br>";
//let's read file line by line
$file=fopen("data.txt","r") or die("Unable to Open");
$data=fgets($file);
echo $data;
fclose($file);


echo "<br>=======================Reading file line by line reading ALl Line======<br>";
//let's read file line by line
$file=fopen("data.txt","r") or die("Unable to Open");
$data="";
//feof check cursor reached to end of file
while(!feof($file)){
	$data.=fgets($file)."<br>";
}
echo $data;
fclose($file);


echo "<br>=======================Reading file Charcter by Charcter reading ALl Character======<br>";
//let's read file line by line
$file=fopen("data.txt","r") or die("Unable to Open");
$data="";
//feof check cursor reached to end of file
while(!feof($file)){

	//fgetc read file character by character
	$data.=fgetc($file);
}
echo $data;
fclose($file);


echo "<br>===============Now Writing Data in File===================<br>";

$file=fopen("data.txt","w");
$dummy_data="Demo Data";
fwrite($file,$dummy_data);
fclose($file);

echo "<br>===============Now Writing Data in File Preserved Prevous Data===================<br>";

$file=fopen("data.txt","a");
$dummy_data="Appending Demo Data";
fwrite($file,$dummy_data);
fclose($file);


