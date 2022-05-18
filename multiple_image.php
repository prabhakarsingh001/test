



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiple-images</title>
</head>
<body>
<form action="multiple_image_upload.php" method="post" enctype="multipart/form-data">
itemid:<input type="text" name="item_id"/><br>

Image:<input type="file" name="image[]"multiple/><br>

<input type="submit" name="submit"/><br>

</form> 



</body>
</html>