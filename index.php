<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memorable World</title>
    <!-- Bootstrap Css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style css -->
    <link rel="stylesheet" href="./assets/style.css">
    <!-- FontAwesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="frame-area">
                            <div class="frame-text">
                                <h1 class="frame-head">SAINT OF THE DAY</h1>
                                <i class="fa-solid fa-quote-right frame-icon"></i>
                                <p class="frame-content">We can't help everyone, but everyone can help someone</p>
                                <h3 class="frame-bottom">AESOP</h3>
                                <a href="#" class="frame-btn">Read More</a>
                            </div>
                            <div class="frame-text">
                                <h1 class="frame-head">POEM OF THE WEEK</h1>
                                <h3 class="head-bottom">THE POINT NO RETURN</h3>
                                <p class="frame-content">It is a long established fact that a reader will be distracted by the readable content</p>
                                <a href="#" class="frame-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="window-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <div class="top-window text-center">
                                        <img src="./assets/images/top-window.png" class="img-fluid w-100 " alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="top-window text-center">
                                        <img src="./assets/images/top-window-right.png" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row py-5">
                                <div class="col-3">
                                    <div class="window-bottom">
                                        <img src="./assets/images/img-1.png" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="window-bottom">
                                        <img src="./assets/images/img-3.png" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="window-bottom">
                                        <img src="./assets/images/img-3.png" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="window-bottom">
                                        <img src="./assets/images/img-4.png" class="img-fluid w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid" alt="">
                                    <div class="bottom"></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>