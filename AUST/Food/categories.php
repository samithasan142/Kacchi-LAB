<?php include('partials-front/menu.php'); ?>

<!-- Categories Section Starts Here -->
<section class="categories">
    <div class="container">
        <h2 class="text-center">আমাদের পরিবেশন সমূহ</h2>

        <?php 
            $sql = "SELECT * FROM category_table WHERE active='Yes'";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res); //Count Rows

            if($count>0)
            {
                //Categories Available
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
                                    echo "<div class='error'>Image not found.</div>";
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
                echo "<div class='error'>খাবারটি আমাদের মেন্যু তালিকায় নেই</div>";
            }       
        ?>
        
        <div class="clearfix"></div>
    </div>
</section>
<!-- Categories Section Ends Here -->

<?php include('partials-front/footer.php'); ?>