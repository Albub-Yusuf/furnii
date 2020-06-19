<!--test footer goes here -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Design</title>
    <!--<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        body{

            margin: 0px;
            padding: 0px;
            background-color: #FFFFFF;
        }

        a{
            text-decoration: none;
        }

        ul{

            list-style: none;
        }

        footer{

            background-color: #353745;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        .f-logo{

            color:#FFFFFF;
            font-family: bebas kai;
            letter-spacing: 2px;
            padding: 5px 10px;
            font-size: 25px;
        }
        .up-section , .down-section ul{

            font-family:calibri;
            margin:0px;
            padding:0px 20px;

        }
        .up-section h1 , .down-section h1{

            color:#9697a0;
            font-size: 20px;
            font-family: calibri;

        }

        .up-section ul li a , .down-section ul li a{

            font-size: 16px;
            color:#575a70;
        }
        .up-section ul li p{

            font-size: 14px;
            color:#575a70;
            line-height: 10px;

        }

        .up-section , .down-section{

            display: flex;
            justify-content: space-between;
            padding: 3% 0px;
            margin: 5px;
            width: 80%;
            flex-wrap: wrap;
        }

        .up-section{

            border-bottom: 1px solid #545562;
        }

        .social-icons {

            display: flex;
        }

        .social-icons a{

            width: 35px;
            height: 35px;
            margin: 0 5px;
            background-color: #424356;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .social-icons i{

            color:#FFFFFF;
            font-size: 14px;
        }



        .search input{

            height: 35px;
            width: 200px;
            text-align: center;
            border:none;
            outline: none;
        }

        .copyright{

            font-size: 12px;
            font-family: calibri;
            color:#b3b3b3;
        }

        .up-section ul li a:hover ,  .down-section ul li a:hover{

            color:#9697a0;
        }

        .social-icons a:hover{
            background-color: #9a9ff6;
            transition: all ease 1s;
        }

        .social-icons a:hover i{
            color:#424356;
        }


        @media(max-width:1024px){

            .search{

                margin:20px auto;
                display: flex;
                align-items: center;
                width:100%;
                justify-content: center;
            }
            .search h1{

                margin: 20px;
            }
        }
        @media(max-width: 720px){

            .up-section, .down-section{
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .flogo{
                display: none;
            }

            .up-section ul h1, .down-section ul h1{

                font-size: 25px;
            }
            .up-section ul li, .down-section ul li{
                text-align: center;
                margin: 10px;
            }
            .up-section ul li a, .down-section ul li a{
                font-size: 20px;
                align-items: center;
                text-align: center;

            }
            .search{
                display: block;
            }
        }
    </style>
</head>
<body>
<!--Footer Design--->
<footer>
    <!--top section-->
    <div class="up-section">
        <!--logo-->
        <div class="flogo col-md-4 col-sm-12 col-lg-4">
            <a style="text-decoration:none;"  href="#" class="f-logo">Teutons<sup>&reg</sup></a>
        </div>

        <!--Contact us List-->
        <!--l------>
        <div class="col-md-8 col-sm-10 col-lg-8" style="background-color: transparent;">
            <ul>
                <!--heading-->
                <h1>Who We Are</h1>
               <p style="color:#9697a0;">TEUTONS® was born in Germany, named after the famous Germanic tribe mentioned by some famous authors, conceptualized and created by technology experts who are artistic and innovative. Specialized in high-end designing, a manufacturing and marketing innovative memory product is its sole purpose. All TEUTONS® product’s research-development & designed in Spain.
                </p>

                <!--
                                <p style="color:#9697a0;">TEUTONS&reg; was born in Germany, named after the famous Germanic tribe mentioned by some famous authors, conceptualized and created by technology experts who are artistic and innovative. Specialized in high-end designing, a manufacturing and marketing innovative memory product is its sole purpose.</p>

                                <p style="color:#9697a0;">TEUTONS&reg; and the TEUTONS&reg; logo are registered trademarks of WABA Technologies SL, C/ Alcantara 50, 28006-Madrid, Spain. All TEUTONS&reg; product&rsquo;s research-development &amp; designed in Spain. Other companies&rsquo; product names or trademarks are used herein for identification purposes only and belong to their respective companies.</p>

                                <p style="color:#9697a0;">TEUTONS&reg; believes that giving the best technical, financial and social support to the employees is essential to achieve the company&rsquo;s goal. The team has a systematic culture that ensures providing innovative products and achieving customer satisfaction.</p>
                 -->
            </ul>
        </div>




    </div>

    <!--Bottom Section-->
    <div class="down-section">
        <!--l------>
        <ul>
            <!--heading-->
            <h1>Categories</h1>
            <li><a style="text-decoration:none;"  href="{{route('category.products',1)}}">Flash Drive</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',2)}}">Bluetooth Speaker</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',3)}}">Memory Card</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',6)}}">SSD</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',10)}}">Notebook RAM</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',12)}}">Desktop RAM</a></li>
        </ul>

        <ul>
            <!--About Us Section-->
            <h1>&nbsp</h1>
            <li><a style="text-decoration:none;"  href="{{route('category.products',8)}}">Earbuds</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',9)}}">Cable</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',13)}}">Adapter</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',14)}}">Caddy</a></li>
            <li><a style="text-decoration:none;"  href="{{route('category.products',0)}}">Bottle</a></li>
        </ul>
        <!--l------>

        <ul>
            <!--About Us Section-->
            <h1>Links</h1>
            <li><a style="text-decoration:none;"  href="{{route('frontend')}}">Home</a></li>
            <li><a style="text-decoration:none;"  href="{{route('about_us')}}">About Us</a></li>
            <li><a style="text-decoration:none;"  href="#">News & Events</a></li>
            <li><a style="text-decoration:none;"  href="#">Privacy Statement</a></li>
        </ul>
        <ul>
            <!--About Us Section-->
            <h1>About</h1>
            <li><a style="text-decoration:none;"  href="#">Team & Company</a></li>
            <li><a style="text-decoration:none;"  href="#">Location</a></li>
            <li><a style="text-decoration:none;"  href="#">About Us</a></li>
            <li><a style="text-decoration:none;"  href="#">Our Services</a></li>
        </ul>

        <div class="social">
            <h1>Social</h1>
            <div class="social-icons">
                <a style="text-decoration:none;"  href="#"><i class="fa fa-facebook-f"></i></a>
                <a style="text-decoration:none;"  href="#"><i class="fa fa-instagram"></i></a>
                <a style="text-decoration:none;"  href="#"><i class="fa fa-twitter"></i></a>
                <a style="text-decoration:none;"  href="#"><i class="fa fa-google"></i></a>

            </div>
        </div>

    </div>
    <!--copyright-->
    <p class="copyright" style="font-size: 16px;">Teutons<sup>&reg</sup> - copyright &copy 2020 all rights reserved</p>
</footer>

</body>
</html>


<!---->


<!-- original content
<div style="min-height:200px; color:#000; background-color:#ccc;" class="col-lg-10 offset-lg-1 d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center ">
    <div class="footer_logo col-lg-4 col-md-4 col-sm-4" style="background-color:transparent; color:lime;">
        <a style="text-decoration:none;"  style="text-decoration:none;" href="{{route('frontend')}}">
            <img class="img" width="30%" src="{{asset('Frontend/images/Logo-256.png')}}"></a><a style="text-decoration:none;"  style="text-decoration:none;" href="#"></a>
          <a style="text-decoration:none;"  style="text-decoration:none;" href="{{route('frontend')}}">Teutons<sup>&reg</sup></a></div>
    <div class="text-center col-lg-4 col-md-4 col-sm-4" style="margin:0 auto; background-color:transparent;">Copyright &copy2020 all rights reserved</div>
    <div class="footer_social ml-lg-auto  col-md-4 col-sm-4col-lg-4"style="margin-top: 0; background-color:transparent; color:lime;">
        <ul>
            <li><a style="text-decoration:none;"  style="text-decoration:none;" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a style="text-decoration:none;"  style="text-decoration:none;" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a style="text-decoration:none;"  style="text-decoration:none;" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a style="text-decoration:none;"  style="text-decoration:none;" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>



</div>
-->
