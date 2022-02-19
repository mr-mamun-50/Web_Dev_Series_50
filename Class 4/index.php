<?php include_once("./includes/head.php"); ?>

<body>


    <!-- Navbar started -->
    <?php include_once("./includes/nav.php"); ?>


    <!-- Navbar Ended -->

    <!-- slider started -->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 90vh;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/img_1.jpg" class="d-block w-100" alt="..." style="height: 90vh;">
                <div class="carousel-caption d-md-block bg-secondary">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/img_2.jpg" class="d-block w-100" alt="..." style="height: 90vh;">
                <div class="carousel-caption d-md-block bg-secondary">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/img_3.jpg" class="d-block w-100" alt="..." style="height: 90vh;">
                <div class="carousel-caption d-md-block bg-secondary">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/img_4.jpg" class="d-block w-100" alt="..." style="height: 90vh;">
                <div class="carousel-caption d-md-block bg-secondary">
                    <h5>Fourth slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!-- slider ended -->

    <div class="container pt-4">

        <!-- Cards section started -->

        <div class="row my-4">
            <div class="col-lg-3 col-sm-6 col-md-4 my-2">
                <div class="card">
                    <img src="../images/img_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 my-2">
                <div class="card">
                    <img src="../images/img_2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 my-2">
                <div class="card">
                    <img src="../images/img_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 my-2">
                <div class="card">
                    <img src="../images/img_4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Cards section ended -->

        <!-- jumbotron started -->

        <div class="jumbotron my-4 row mx-1">
            <div class="col-lg-4">
                <img src="../images/img_4.jpg" class="w-100 rounded" alt="">
            </div>
            <div class="col-lg-8">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention
                    to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>

        <!-- jumbotron ended -->

        <!-- contact section started -->

        <div class="card p-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </form>
        </div>


        <!-- contact section ended -->



    </div>


    <?php include_once("./includes/scripts.php") ?>

</body>

</html>