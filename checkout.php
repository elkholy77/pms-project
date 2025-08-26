<?php require_once('inc/header.php'); 
require_once('core/functions.php');
?>

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
        <div class="row">
            <div class="col-4">
                <div class="border p-2">
                    <div class="products">

                    <?php 
                    if(isset($_SESSION['cart'])):
                    $sum = 0;
                    $total = 0;
                    foreach($_SESSION['cart'] as $details):
                    $total+=  $details['price'] * $details['quantity'];
                    $sum+=$total;
                    ?>
                        <ul class="list-unstyled">
                            <li class="border p-2 my-1"><?php echo $details['name']; ?> * <?php echo $details['quantity']; ?> =
                                <span class="text-success mx-2 mr-auto bold"><?php echo $total?> </span>
                            </li>
                            <!-- <li class="border p-2 my-1"> Product #1 -
                                <span class="text-success mx-2 mr-auto bold">2 x 25$</span>
                            </li>
                            <li class="border p-2 my-1"> Product #1 -
                                <span class="text-success mx-2 mr-auto bold">2 x 25$</span>
                            </li>
                            <li class="border p-2 my-1"> Product #1 -
                                <span class="text-success mx-2 mr-auto bold">2 x 25$</span>
                            </li>
                            <li class="border p-2 my-1"> Product #1 -
                                <span class="text-success mx-2 mr-auto bold">2 x 25$</span>
                            </li> -->
                        </ul>
                    <?php 
                    endforeach;?>
                    <?php else:?>
                                <li class="border p-2 my-1"> please add products to cart -
                                <span class="text-success mx-2 mr-auto bold"></span>
                            </li> 
                    <?php
                    endif;?>
                    </div>
                    <?php if(isset($_SESSION['cart'])):?>
                    <h3>Total : <?php echo $sum?></h3>
                    <?php else:?>
                        <h3>Total : 0</h3>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-8">
                <form method="post" action="handler/order_data_handler.php"  class="form border my-2 p-3">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Phone">Phone</label>
                            <input type="number" name="Phone" id="Phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Notes">Notes</label>
                            <input type="text" name="Notes" id="Notes" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Send" id="" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require_once('inc/footer.php'); ?>