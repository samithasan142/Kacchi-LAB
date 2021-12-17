<?php include('partials-front/menu.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AboutUs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <style>
        .container.about_us .card {
            width: 50% !important;
            float: left;
            text-align: center !important;
            padding: 50px;
            box-sizing: border-box;
        }

        .sci,
        .sci li {
            text-align: center;
            display: inline-block;
            margin: 0 10px;
            font-size: 25px;
        }
        .sci li a{
            color: #ff6b81;
            font-size: 24px;
        }

        .container.about_us .card .content {
            background-color: #e3e3e3;
            border-radius: 10px;
            padding: 50px;
            box-sizing: border-box;
            opacity: 0.85;
            transition: 0.5s;
        }

        .container.about_us .card:hover .content{
            opacity: 1;
            transform: translateY(-20px);
        }

        .container.about_us .card img {
            width: 50% !important;
            border-radius: 1000px;
        }
        h3{
            color: black;
            padding: 20px;
            text-transform: uppercase;
        }
        h3 span{
            font-size: 18px;
            font-weight: 300;
            text-transform: initial;
        }

        @media only screen and (max-width: 981px) {
            .container.about_us .card {
                width: 100% !important
            }

        }
    </style>
    <section class="main-body">
        <div class="container about_us">
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="images/samit.jpg">
                    </div>
                    <div class="contentBx">
                        <h3>
                            S. M. Tasnimul Hasan<br>
                            <span>CEO, Kacchi LAB</span>
                        </h3>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="https://www.facebook.com/tasnimulhasan.samit/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="https://www.linkedin.com/in/s-m-tasnimul-hasan-samit-ba0aa61b2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="https://github.com/samithasan142"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="images/zahid.jpg">
                    </div>
                    <div class="contentBx">
                        <h3>
                            Md. Zahidul Haque<br>
                            <span>CEO, Kacchi LAB</span>
                        </h3>
                    </div>

                    <ul class="sci">
                        <li style="--i:1">
                            <a href="https://www.facebook.com/zahidul.haque.136/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:2">
                            <a href="https://www.linkedin.com/in/mohammad-zahidul-haque-71624015b/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li style="--i:3">
                            <a href="https://github.com/ZahidHaque"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php include('partials-front/footer.php'); ?>