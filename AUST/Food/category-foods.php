<?php include('partials-front/menu.php'); ?>

<?php 
    
    if(isset($_GET['category_id'])) //Check the id is passed or not
    {
        //Category id is set and get the id
        $category_id = $_GET['category_id'];
        
        $sql = "SELECT title FROM category_table WHERE id=$category_id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);
        //Get the TItle
        $category_title = $row['title'];
    }
    else
    {
        header('location:'.SITEURL);
    }
?>

<!-- Food Search Section Starts Here -->
<section class="food-search text-center">
    <div class="container">       
        <h2><a href="#" class="text-white">"<?php echo $category_title; ?>"</a> এর তালিকা </h2>
    </div>
</section>
<!-- Food Search Section Ends Here -->


<!-- Food Menu Section Starts Here -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">খাবার তালিকাঃ</h2>

        <?php 
        
            $sql2 = "SELECT * FROM food_table WHERE category_id=$category_id";

            
            $res2 = mysqli_query($conn, $sql2); //Execute the Query          
            $count2 = mysqli_num_rows($res2); //Count the Rows

            if($count2>0)
            {
                while($row2=mysqli_fetch_assoc($res2))
                {
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $image_name = $row2['image_name'];
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