<?php
    // echo "Delete Page";
    //check whether the id and image_name value is set or not
    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        //get the value and delete\
        // echo "Get the value and delete"
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //remove the physical file
        if($image_name !="")
        {
            //image is available so remove it
            $path = "../images/category/".$image_name;
            //remove the image
            $remove = uplink($path);
            
            //if failed to remove image then add erro message and stop the process
            if($remove==false)
            {
                //Set the session message
                $_SESSION['remove'] = "<div class='error'>Failed to remove category imagge.</div>";
                //Redirect to manage category page
                header('loacation:'.SITEURL.'admin/manage-category.php');
                //Stop the process
                die();
            }
        }

        // Delete Data from Database
        // SQL Query to Delete Data from Database
        $sql = "DELETE FROM tbl_category WHERE id=$id";
        // Execute the Query
        $res = mysqli_query($conn, $sql);
        // Check whether the data is delete from database or not
        if($res == true)
        {
        // set Success Message and Redirect
        $_SESSION['delete'] = "<div class='success'>Category Deleted successfully.</div>";
        // Redirect to Manage Category
        header('location: ' .SITEURL.'admin/manage-category.php');
        }
        else
        {
        // SEt Fail Message and Redirecs
        $_SESSION['delete'] = "<div class= 'error'>Failed to Delete Category.</div>";
        // Redirect to Manage Category
        header('location:' .SITEURL.'admin/manage-category.php');
        }
    }
    else
    {
        //redirect to manage category page
        header('location:'.SITEURL.'admin/manage-category.php');
    }
?>