<?php include('inc/header.php'); ?>

<section class="cart">
    <div class="container">
        <h1 class="text-center my-5">
            CART
        </h1>

        <div class="cart-table">
            <table style="width:100%">
                <tr>
                    <th>Product</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total</th>
                </tr>
                <tr>
                    <td class="d-flex justfy-content-center align-items-center">
                        <div class="img-table mr-5">
                            <img src="./img/pexels-ray-piedra-1456737.jpg" alt="">
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>

                    </td>
                    <td class="text-center">$10</td>
                    <td class="text-center">
                        <i class="minus fas fa-minus"></i>
                        <span class="mx-2">20</span>
                        <i class="plus fas fa-plus"></i>
                    </td>
                    <td class="text-center">50</td>
                    <td class="text-right">
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
            </table>
        </div>

        <div class="total text-right my-5">
            <h2>$50</h2>
            <p>Shipping not included</p>
            <form class="justify-content-end" method="post">
                <input class="btn btn-dark " type="submit" value="Checkout">
            </form>
        </div>
    </div>
</section>

<section id="shopping" class="shopping mb-5">
    <div class="container">
        <h2 class="text-center mb-5">YOU MAY ALSO LIKE</h2>
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
                        <img src="./img/pexels-ray-piedra-1456737.jpg" class="d-block w-100" alt="Nike shoes">
                    </div>
                    <div class="d-flex justify-content-between">
                        <h4 class="px-2 pt-2">Nike</h4>
                        <h4 class="px-2 pt-2">$1244</h4>
                    </div>
                    <p class=" mb-2 px-2">Comfortable sneakers for running</p>
                </a>
            </div>
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
                </a>
            </div>

        </div>
    </div>
</section>

<?php include('inc/footer.php'); ?>