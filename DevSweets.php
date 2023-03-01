<?php include('partials-front/menu.php'); ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Food at  <a href="#" class="text-white">Dev Sweets</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\blackforestcake.JPG" alt="Black Forest cake" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Black Forest Cake</h4>
                    <p class="food-price">Rs. 40</p>
                    <p class="food-detail">
                       
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\cold coffee.JPG" alt="Cold Coffee" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Cold Coffee</h4>
                    <p class="food-price">Rs. 50</p>
                    <p class="food-detail">
                       
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\Iced tea.JPG" alt="Iced Tea" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Iced Tea</h4>
                    <p class="food-price">Rs. 45</p>
                    <p class="food-detail">
                      
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\sandwich.JPG" alt="sandwich" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Grilled Sandwich</h4>
                    <p class="food-price">Rs. 55</p>
                    <p class="food-detail">
                       
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\strawberry pastry.JPG" alt="Strawberry Pastry" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Strawberry Pastry</h4>
                    <p class="food-price">Rs. 40</p>
                    <p class="food-detail">
                       
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="Restaurants_\Dev sweets\VeggieMaggie.JPG" alt="Veg Maggie" class="img-responsive img-curve" height="250" width="250">
                </div>

                <div class="food-menu-desc">
                    <h4>Classic Veg Maggie</h4>
                    <p class="food-price">Rs. 40</p>
                    <p class="food-detail">
                      
                    </p>
                    <br>

                    <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php'); ?>

</body>
</html>