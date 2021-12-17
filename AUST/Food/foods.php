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


<!-- Food Menu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">খাবার তালিকাঃ</h2>

        <?php
            $sql = "SELECT * FROM food_table WHERE active='Yes'";

            $res=mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if($count>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $image_name = $row['image_name'];
                    ?>
                    
                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not Available.</div>";
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
                echo "<div class='error'>খাবারটি আমাদের মেন্যু তালিকায় নেই</div>";
            }
        ?>        

        <div class="clearfix"></div>

    </div>

</section>
<!-- Food Menu Section Ends Here -->

<?php include('partials-front/footer.php'); ?>