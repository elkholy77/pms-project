<?php 
// session_start();

require_once('inc/header.php'); ?>

<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php 
            foreach(getitems() as $item):
            ?>


            <div class="col mb-5">
                <form action="handler/cart_handler.php" method="post">

                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo $item['image']?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $item['name']?></h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                 <?php echo $item['price']?>
                            </div>
                            <div><h6><?php echo $item['details']?></h6></div>
                        </div>
                        <!-- Product actions-->
                        <input type="hidden" name="product_id" value="<?php echo $item['id']?>">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="price" value="<?php echo $item['price']?>">
                        <input type="hidden" name="name" value="<?php echo $item['name']?>">
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><button type="submit" class="btn btn-outline-dark mt-auto">add to cart</button></div>

                        </div>
                    </div>
                </form>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>