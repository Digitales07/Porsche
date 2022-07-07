 

$pid = mysqli_insert_id($conn);
		$target_dir = "C:/xampp/htdocs/Porsche/images/";
		$temp = explode(".", $_FILES["image"]["name"]);
		$newfilename = $pid . '.' . end($temp);
		$target_file = $target_dir . $newfilename;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		
		
		if ($_FILES["image"]["size"] > 10000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				 
                                ?>
                                <script type="text/javascript">
			window.location.href = '../pages/producer.php';
			</script>
                        <?php
			} else {
				echo "Sorry, there was an error uploading your file.";
                }}}