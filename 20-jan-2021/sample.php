<html>
    <body>
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="file[]" multiple>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
    <?php 
    if(isset($_POST['submit']))
        {
            $countfiles = count($_FILES['file']['name']);
            echo "<form method='post' action='#'>";
            for($i=0;$i<$countfiles;$i++)
            {
                $filename = $_FILES['file']['name'][$i];  
                if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'image/'.$filename))
                {
                    echo "<img src=".'image/'.$filename." height='200' width='300' />";
                    echo $filename;
                    echo "<input type='checkbox' name='chkimg[]' value='" .$filename ."'>";
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
        if(!empty($_POST['chkimg']))
        {
            $checkedimg = $_POST['chkimg'];
           foreach($checkedimg as $img)
            {
                unlink("image/".$img);
            }
        }
     }
?>

