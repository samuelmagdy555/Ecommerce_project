<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.css')}}">
    <title>Graduation_Project</title>
    <style>


    </style>
</head>
<body>
<header class="nav_one">
    <!-- First_Nav -->
    <nav class="navbar  navbar-expand-lg navbar-light" style="   background-color:rgba(255, 62, 215);">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Nav_Brand-->
            <div class="navbar-brand " style="font-size:small;">
                <p>Free Shipping on All orders Over $75!</p>
            </div>
            <!-- Toggle_button -->
            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#samueeeel"
                aria-controls="samueeeel"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse  navbar-collapse" id="samueeeel" style="font-size: small;">
                <div class="side-nav  ms-auto">
                    <div class="btn">
                        Login
                    </div>
                    <div class="btn">
                        Register
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <form action="" method="" style="display: flex; justify-content: center; padding: 20px; ">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search" />
        </div>
        <button type="button" class="btn btn-outline-none">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <!-- Start_Nav_one>
           start Navbar -->
    <nav class="navbar navbar-expand-lg " id="scrollspy1" style="background-color: black;"  >
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <div class="navbar-brand mt-2 mt-lg-0 " style="color: white;font-family:font; ">
                <I>fashion</I>
            </div>
            <!-- Toggle button -->
            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#Magdy"
                aria-controls="Magdy"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="Magdy" style="justify-content: end;"  >
                <!-- nav item  -->
                <div class="text-light">
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex"  >
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Woman" style="color:white">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Men"style="color:white">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color:white"> Footwear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color:white">Acessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color:white;">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"style="color:white;">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- End_nav2 -->
    <!-- HEADER CONTENT-->
    <div id="c1" class="carousel slide" style="margin: 0; padding: 0;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/1.png" alt="" class="d-block  w-100 ">
            </div>
            <div class="carousel-item">
                <img src="Images/11.png" alt="" class="d-block w-100 ">
            </div>
            <div class="carousel-item">
                <img src="Images/12.png" alt="" class="d-block  w-100">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#c1" data-bs-slide="prev"   >
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#c1" data-bs-slide="next"   >
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</header>
<!-- Second-section -->
<section class="bg-light Men" id="Men" >
    <div class="container" style="padding: 30px;" >
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-12 ">
                <div class="image">
                    <img src="Images/2.png" alt="">
                </div>
                <h4 style="padding: 15px; color: violet; "  >H o t C o l l e c t i o n</h4>
                <h2 style="color: gray;" >New Trend For Women</h2>
                <h6 style="opacity: 0.6;" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quae dolores iste officia consequuntur  vitae ab eius fugiat ut alia </h6>
                <div class="btn btn-outline-secondary">
                    Shop Now
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="section-content">
                    <div class="image_1">
                        <img src="Images/3.png" alt="">
                    </div>
                    <div class="image_2" style="padding: 10px;" >
                        <img src="Images/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End_Section_Two -->
<!-- Start_Section_Three -->

<!-- section 3 -->
<section class="py-3">
    <div class="container  px-4 px-lg-5 mt-5 ">
        <div class="row  gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/5.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>


            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/6.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>



            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/7.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/8.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/14.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/15.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/16.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/17.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section3 -->
<!-- section_four-->
<section class="bg-light footwear " id="footwear">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col">
                    <div class="image" style="padding: 40px;" >
                        <img src="Images/22.jpg"  alt="" >
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- section5 -->
<section class="py-3">
    <div class="container px-4 px-lg-5 mt-5  ">
        <div class="row  gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly ">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/15.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/5.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/16.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/7.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/9.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/16.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-evenly;">
                                                <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                    <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                </span>


                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                        </a>

                        <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                            <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                            </i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/10.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">  Women Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Women Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <div style="display: flex; justify-content: space-evenly;">
                                                    <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                        <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                    </span>


                            <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                                <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                            </a>

                            <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                                <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="Images/6.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Men Collections</h4>

                            <!-- Product description-->
                            New Modern Trends For Men Clothes
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex justify-content-center small text-warning mb-2">
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                            <div class="bi-star-fill"></div>
                        </div>
                        <div style="display: flex; justify-content: space-evenly;">
                                                    <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                                        <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                                    </span>


                            <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                                <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                            </a>

                            <a href="" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                                <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<div class="container-fluid bg-dark" id="news">

    <div class="container py-5">

        <div class="text-center">

            <h1 class="fw-bold text-light " style="font-family: alex brush; font-size: 60px;">Fashion</h1> <br>
            <P class="text-light fs-3">
                “ .“A girl has to be two things, classy and fabulous.”
                <br>
                ―  Coco Chanel
            </P>

        </div> <br><br><br>


        <div class="row"  >
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 justify-content-evenly">
                <a class="btn text-light fw-bold px-5 py-3 " style="background-color: #3b5998; " href="https://www.facebook.com/samul.magdy.5" target="_self">
                    Find Me on Facebook
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                <a class="btn text-light fw-bold px-5 py-3" style="background-color: #E1306C; " href="https://www.instagram.com/samulmagdy/" target="_self">
                    Find Me on Instagram
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                <a class="btn text-light fw-bold px-5 py-3" style="background-color: #053eff; " href="https://www.behance.net/samuelmagdy/editor" target="_self">
                    Find Me on Behance
                </a>
            </div>

        </div>

        <div class="row ">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                <ul class="text-light ">
                    <ol class="fw-bolder pb-2 p-sm-0 ">HOME</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Women</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Men</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Accessories</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Sales</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Blogs</ol>
                </ul>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                <ul class="text-light ">
                    <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">CATEGORIES</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Jackets and Coats</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Skirts and Dresses</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Shoes, Boots and Slippers</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Sweaters and Waistcoats</ol>
                </ul>
            </div>



        </div>

        <br><hr class="text-light"><br>
        <p class="text-light fw-lighter text-center">
            <span>&#169</span> 2023 <span style="font-family: Alex brush; font-size: 28px;">Fashion</span> : Templete Made by <span class="fw-bold">Samuel Magdy William ( FullStack Developer).</span>
        </p> <br>

    </div>
</div>



















<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-circle-arrow-up"></i></button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</body>
</html>
