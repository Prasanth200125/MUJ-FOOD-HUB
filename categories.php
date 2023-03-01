
<?php include('partials-front/menu.php'); ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Trending Searches</h2>

            <a href="Zaika.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Zaika\Chicken biryani.JPG" alt="Butter Chicken" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white"> Zaika</h3>
            </div>
            </a>

            <a href="ChinaTown.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Chinatown\Chicken Noodles.JPG" alt=" Chicken Noodles" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">China Town</h3>
            </div>
            </a>

            <a href="Dialog.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\dialog\Exotica.JPG" alt="Pizza" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">Dialog</h3>
            </div>
            </a>

            <a href="Chatkara.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Chatkara\masaladosa.JPG" alt="Dosa" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">Chatkara</h3>
            </div>
            </a>

            <a href="ChinaTown.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Chinatown\Chilly Chicken.JPG" alt="Chilly Chicken" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">China Town</h3>
            </div>
            </a>

            <a href="Saras.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Saras\mojito.jfif" alt="Mojito" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">Saras</h3>
            </div>
            </a>

            <a href="Zaika.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Zaika\paneer butter masala.JPG" alt="Paneer" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">Zaika</h3>
            </div>
            </a>

            <a href="Saras.php">
            <div class="box-3 float-container">
                <img src="Restaurants_\Saras\ice cream coffee.jfif" alt="coffee" class="img-responsive img-curve" height="250" width="280">

                <h3 class="float-text text-white">Saras</h3>
            </div>
            </a>

            <?php 

                //Display all the cateories that are active
                //Sql Query
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether categories available or not
                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <?php include('partials-front/footer.php'); ?>