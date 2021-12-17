<html>
    <head>
        <title>Kacchi LAB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <?php include('partials-front/menu.php'); ?>
    
    <style>
        li a {
            color: #ff6b81;;
            font-size: 17px;
        }

        li a:hover {
            color: #ff6b81;;
            text-decoration: none;
        }

    </style>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>যোগাযোগ, Kacchi LAB</a></h1>

                    <p class="lead">আপনাদের মূল্যবান মতামত দিয়ে আমাদের পাশে থাকুন I নিচের ফর্মে আপনার নাম , ইমেইল , ফোন নম্বর এবং মূল্যবান মতামত প্রদান করুন </p>


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">নামের প্রথম অংশ *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="এখানে নামের প্রথম অংশ লিখুন *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">নামের শেষ অংশ *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="এখানে নামের শেষ অংশ লিখুন *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">ইমেইল *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="এখানে ইমেইল লিখুন *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">ফোন নম্বর</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="এখানে ফোন নম্বর লিখুন">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">আপনাদের মূল্যবান মতামত *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="আমাদের জন্য আপনার বার্তা *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="প্রেরণ করুন ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> চিহ্নিত ঘরগুলো পূরণ করা আবশ্যক I আমাদের পক্ষ থেকে ধন্যবাদ সময় নিয়ে ফর্ম টি পূরণ করার জন্য, <a href=# target="_blank">Kacchi LAB</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
<?php include('partials-front/footer.php'); ?>