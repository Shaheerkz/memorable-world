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
                    <div class="col-md-3">
                        <div class="frame-area">
                            <div class="frame-img position-relative">
                                <img src="./assets/images/frame-aside.png" alt="">
                                <div class="frame-text">
                                    <h1 class="frame-head">SAINT OF THE DAY</h1>
                                    <i class="fa-solid fa-quote-right frame-icon"></i>
                                    <p class="frame-content">We can't help everyone, but everyone can help someone</p>
                                    <h3 class="frame-bottom">AESOP</h3>
                                    <a href="#" class="frame-btn">Read More</a>
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