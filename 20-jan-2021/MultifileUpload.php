<html>
    <head>
       <style>
           img{
            margin:5px; 
            border:2px solid black;
           }
       </style>
    </head>
    <body>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
<?php 

$images = glob("image/*.{jpg,jpeg,gif,png}",GLOB_BRACE); 
if(count($images) > 0) 
{ 
    foreach($images as $image) 
    { 
       echo "<img src='".$image."' height='200' width='300'> ";
    } 
}
else{ echo "<div>Upload Any One Image</div>"; } 
    if(isset($_POST['submit']))
        {
            echo "<form method='post' action='MultifileUpload.php'>";               
            for($i=0;$i<count($_FILES['file']['name']);$i++)
            {
                $filename = $_FILES['file']['name'][$i];  
                if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'image/'.$filename))
                {
                    echo "<img src=".'image/'.$filename." height='200' width='300' />";
                    echo "<input type='checkbox' name='images[]' value='" .$filename ."'>";
                }
                else 
                {
                    echo "Image Not Upload !!";
                }
            }
            echo "<input type='submit' name='delete' value='Delete' >";
            echo "</form>";
        }
?>
<?php
    if(isset($_POST['delete']))
    {
        if(!empty($_POST['images']))
        {
            $checkedimg = $_POST['images'];
           foreach($checkedimg as $img)
            {
                unlink("image/".$img);
            }
        }

      /*  $dir_name = "image/".$filename;
        $images = glob($dir_name);
        
        foreach($images as $image) 
        {
            echo $image;
           //echo '<img src="'.$image.'" height="100" width="100" /><br />';
        }*/






        
        
    }
?>



