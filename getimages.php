<?php
	//PHP SCRIPT: getimages.php
	Header("content-type: application/x-javascript");

	$dirname = "./last_study_data/".$_POST['imageDir'];
	$dirvar = "./last_study_data/anger_autumn";
	// echo "DIRECTORY is: ./last_study_data/".$_POST['imageDir'];
	//This function gets the file names of all images in the current directory
	//and ouputs them as a JavaScript array
	function returnimages($dirname="./last_study_data/anger_autumn") {

		echo 'DDDDDDDDDDD'.$dirname;

		$pattern="(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)"; //valid image extensions
		$files = array();
		$curimage=0;
		if($handle = opendir($dirname)) {
			while(false !== ($file = readdir($handle))){
				if(eregi($pattern, $file)){ //if this file is a valid image
					//Output it as a JavaScript array element
					echo ' galleryarray['.$curimage.']="'.$file .'";';
					$curimage++;
				}
			}

			closedir($handle);
		}	
		return($files);
	}

	echo 'var galleryarray=new Array();'; //Define array in JavaScript

	// $pattern="(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)"; //valid image extensions
	// $files = array();
	// $curimage=0;
	// if($handle = opendir($dirname)) {
	// 	while(false !== ($file = readdir($handle))){
	// 		if(eregi($pattern, $file)){ //if this file is a valid image
	// 			//Output it as a JavaScript array element
	// 			echo 'galleryarray['.$curimage.']="'.$file.'";';
	// 			$curimage++;
	// 		}
	// 	}

	// 	closedir($handle);
	// }	
	
	// returnimages("./last_study_data/".$_POST['imageDir']); //Output the array elements containing the image file names
	returnimages();
?> 