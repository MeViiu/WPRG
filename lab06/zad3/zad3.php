<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
    
<h1>Przesyłanie obrazka</h1>
    <form action="zad3.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Prześlij obrazek" name="submit">
    </form>

<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Plik ". basename( $_FILES["fileToUpload"]["name"]). " został przesłany.";
        } else {
            echo "Wystąpił problem podczas przesyłania pliku.";
        }
    } else {
        echo "Przesłany plik nie jest obrazkiem.";
    }
}


?>

<img src="<?php echo $target_file; ?>" alt="Obrazek">


</body>
</html>