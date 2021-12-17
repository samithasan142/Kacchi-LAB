<?php include('partials-front/menu.php'); ?>

<!-- Food Search Section Starts Here -->
<section class="food-search text-center">
    <div class="container">
        
        <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
            <input type="search" name="search" placeholder="খাবার খোঁজ করুন..." required>
            <input type="submit" name="submit" value="অনুসন্ধান" class="btn btn-primary">
        </form>

    </div>
</section>
<!-- Food Search Section Ends Here -->

<?php 
    if(isset($_SESSION['order']))
    {
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
?>

<!-- Categories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">আমাদের পরিবেশন সমূহ</h2>

        <?php 
            $sql = "SELECT * FROM category_table WHERE active='Yes' AND featured='Yes' LIMIT 3";

            $res = mysqli_query($conn, $sql);
            
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                //Categories Available
                while($row=mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    ?>
                    
                    <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                        <div class="box-3 float-container">
                            <?php
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not Available</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Kacchi" class="img-responsive img-curve">
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
                echo "<div class='error'>Category not Added.</div>";
            }
        ?>

        <div class="clearfix"></div>
    </div>

    <p class="text-center">
        <a href="<?php echo SITEURL; ?>categories.php">সকল পরিবেশন সমূহ দেখুন...</a>
    </p>
</section>
<!-- Categories Section Ends Here -->


<!-- Food Menu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">খাবার তালিকাঃ</h2>

        <?php 

        $sql2 = "SELECT * FROM food_table WHERE active='Yes' AND featured='Yes' LIMIT 6";

        $res2 = mysqli_query($conn, $sql2);

        $count2 = mysqli_num_rows($res2);

        if($count2>0)
        {
            while($row=mysqli_fetch_assoc($res2))
            {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $description = $row['description'];
                $image_name = $row['image_name'];
                ?>

                <div class="food-menu-box">
                    <div class="food-menu-img">
                        <?php 
                            if($image_name=="")
                            {
                                echo "<div class='error'>Image not available.</div>";
                            }
                            else
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicken Biriyani" class="img-responsive img-curve">
                                <?php
                            }
                        ?>
                        
                    </div>

                    <div class="food-menu-desc">
                        <h4><?php echo $title; ?></h4>
                        <p class="food-price">৳<?php echo $price; ?></p>
                        <p class="food-detail">
                            <?php echo $description; ?>
                        </p>
                        <br>

                        <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">অর্ডার করুন</a>
                    </div>
                </div>

                <?php
            }
        }
        else
        {
            echo "<div class='error'>Food not available.</div>";
        }
        
        ?>      

        <div class="clearfix"></div>

    </div>

    <p class="text-center">
        <a href="<?php echo SITEURL; ?>foods.php">সকল খাবার দেখুন...</a>
    </p>
</section>
<!-- Food Menu Section Ends Here -->

<?php include('partials-front/footer.php'); ?>