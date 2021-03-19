<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data" >
    Select image :
        <input type="file" name="file"><br/>
        <input type="submit" value="Upload" name="Submit1"> <br/>
    </form>
</body>
</html>
<?php
        if(isset($_POST['Submit1']))
        { 
            $img = "images/" . $_FILES["file"]["name"];
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $img)) 
            {
                echo "<img src=".$img." height=200 width=300 />";
            } 
            else 
            {
                echo "Image Not Upload !!";
            }
        } 
?>