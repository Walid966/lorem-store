<?php include('inc/header.php'); ?>


<section class="showcase">
    <div class="container px-0">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/pexels-mister-mister-3490360.jpg" class="img-b first" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/pexels-erik-mclean-4061395.jpg" class="img-b" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/pexels-frederik-sørensen-2404959.jpg" class="img-b" alt="...">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span aria-hidden="true"><i class="fas fa-chevron-left arr"></i></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span aria-hidden="true"><i class="fas fa-chevron-right arr"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="shop-div">
            <a id="shop" class="btn shop" href="#shopping">Shop</a>
        </div>
    </div>
</section>

<section id="shopping" class="shopping">
    <div class="container">
        <h2 class="text-center mb-5">Our Shiny Shoes</h2>
        <div class="c-flex d-flex justify-content-center flex-wrap">
            <div class="product">
                <a href="product.php">
                    <div class="img-div">
                        <img src="./img/pexels-ray-piedra-1456737.jpg" class="d-block w-100" alt="Nike shoes">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4 class="px-2 pt-2">Nike</h4>
                        <h4 class="px-2 pt-2">$1244</h4>
                    </div>
                    <p class=" mb-2 px-2">Comfortable sneakers for running</p>
                    <!-- <div class="p-2 mb-1 d-flex justify-content-between">
                    <a class="btn btn-secondary" href="">ADD TO CART</a>
                    <a class="btn btn-secondary" href="">BUY IT NOW</a>
                </div> -->
                </a>
            </div>

            <div class="product">
                <a href="product.php">
                    <div class="img-div">
                        <img src="./img/pexels-ray-piedra-1456705.jpg" class="d-block w-100" alt="Nike shoes">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4 class="px-2 pt-2">Nike</h4>
                        <h4 class="px-2 pt-2">$500</h4>
                    </div>
                    <p class=" mb-2 px-2">Comfortable sneakers for running</p>
                </a>
            </div>
            <div class="product">
                <a href="product.php">
                    <div class="img-div">
                        <img src="./img/pexels-ray-piedra-1478442.jpg" class="d-block w-100" alt="Nike shoes">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4 class="px-2 pt-2">Nike</h4>
                        <h4 class="px-2 pt-2">$900</h4>
                    </div>
                    <p class=" mb-2 px-2">Comfortable sneakers for running</p>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="news">
    <div class="container text-center">
        <form>
            <label class="mb-0" for="email">Sign up for the LOREM newsletter</label>
            <input class="mx-3 p-1" type="text" name="email" id="email" placeholder="Email">
            <input class="btn btn-dark" type="submit" name="submit" value="Join">
        </form>
    </div>
</section>

<?php include('inc/footer.php'); ?>