<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>

        <br> <br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['uplaod']);
            }
            ?>
        <!--Add Category Form Starts -->
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="category Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> NO
                    </td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
        <!-- Add Category Form Ends -->
        <?php
        // check whether the submit btn is clicked
        if(isset($_POST['submit']))
        {
            //echo "Clicked";
            //1. get value from category form
            $title = $_POST['title'];
            // for radio input type we need to check whether the btn is selected or not
            if(isset($_POST['featured']))
            {
                //get the value from form
            }
            else
            {
                //set the default value
                $featured = "No";
            }
            if(isset($_POST['active']))
            {
                $active = $_POST['active'];
            }
            else
            {
                $active = "No";
            }
            //check whether the image is selected or not and set the valu for image name accordingly
            // print_r($_FILES['image']);
            // die();//break the code here
            if(isset($_FILES['image']['name']))
            {
                //upload the image
                //to upload the image we need image name, source path and destination path
                $image_name = $_FILES['image']['name'];

                //Auto rename our image
                //get the extension of our image
                $ext = end(explode('.', $image_name));

                //rename the image
                $image_name = "Food_Category_".rand(000,999).'.'.$ext;
                


                $source_path = $_FILES['image']['tmp_name'];
                $destination_path="../images/category/".$image_name;
                //finally upload the image
                $upload = move_upload_file($source_path, $destination_path);

            }
            else
            {
                // dont upload the image and set the image name value as blank
                $image_name="";
            }
            // 2. create SQL query to insert category into databse
            $sql = "INSERT INTO tbl_category SET
            title='$title',
            image_name='$image_name',
            featured='$featured',
            active='$active'
            ";
            //3. execute the query and save in the database
            $res = mysqli_query($conn,$sql);

            //4. check whether the query executed or not and data added or not
            if($res==true)
            {
                ///query executed and category added
                $_SESSION['add'] = "<div class='success'>category Added Successfully.</div>";
                //redirect to manage category page
                header('location: '.SITEURL.'admin/manage-category.php');
            }
            else
            {
                //failed to Add category
            }
        }
        
    ?>
    </div>
</div>

<?php include('partials/footer.php'); ?>