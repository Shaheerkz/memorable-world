<script>

    document.title = "My Liabrary | Memorable World";
    document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>
<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
           
                <div class="row">
                    <div class="col-lg-3 d-lg-flex d-none">
                        <div class="windows-left">
                            <div class="window-top-left">
                                <img src="./assets/images/window-poet-left.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="window-bottom-left">
                                <img src="./assets/images/window-bottom-left.png"  class="img-fluid w-100"  alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5  d-lg-flex d-none window-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-1.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-2.png" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-3 pt-30">
                                <div class="window-center-bottom">
                                    <img src="./assets/images/poet-center-1.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-center-bottom">
                                    <img src="./assets/images/poet-center-2.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-center-bottom">
                                    <img src="./assets/images/poet-center-3.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-3 pt-30">
                                <div class="window-center-bottom">
                                    <img src="./assets/images/poet-center-4.png" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid w-100" alt="">
                                    <div class="bottom-circle"></div>
                                </div>
                            </div>
                            <div class="heading-right">
                                <h1 class="poets-heading">My Liabrary</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                <a href="./new-page.php?book=1"><img src="./assets/images/astrology-book.png" class="img-fluid sm-book" alt=""></a>
                                    <img src="./assets/images/Couple-Diary-book.png" class="img-fluid" alt="">
                                    <img src="./assets/images/Special-Events-book.png" class="img-fluid" alt="">
                                    <img src="./assets/images/In-Memory-book.png" class="img-fluid" alt="">
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <img src="./assets/images/astrology-book.png" class="img-fluid" alt="">
                                    <img src="./assets/images/Couple-Diary-book.png" class="img-fluid" alt="">
                                    <img src="./assets/images/Special-Events-book.png" class="img-fluid" alt="">
                                    <img src="./assets/images/In-Memory-book.png" class="img-fluid" alt="">
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- custom javascript -->
    <script src="./assets/js/index.js"></script>
</body>

</html>