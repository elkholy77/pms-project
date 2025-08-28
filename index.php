<?php 
// session_start();

require_once('inc/header.php'); ?>

<style>
/* card tweaks: fixed image height, equal card heights, details centered */
.custom-card{display:flex;flex-direction:column;height:100%;border:1px solid #eee;border-radius:6px;overflow:hidden}
.custom-card .card-img-top{height:180px;object-fit:cover;width:100%;display:block}
.custom-card .card-body{flex:1;display:flex;flex-direction:column;padding:1rem}
.custom-card .card-title{margin-bottom:8px}
.custom-card .card-details{flex:1;display:flex;align-items:center;justify-content:center;padding:0 0.5rem;text-align:center;color:#555}
.custom-card .card-price{margin-top:8px;font-weight:700;color:#0b74de}
.card-footer{background:transparent;border-top:0;padding:0.75rem}
</style>

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

                    <div class="card h-100 custom-card">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo $item['image']?>" alt="product image" />

                        <!-- Product details area -->
                        <div class="card-body">
                            <div class="text-center card-title">
                                <h5 class="fw-bolder"><?php echo $item['name']?></h5>
                            </div>

                            <div class="card-details">
                                <h6 class="mb-0"><?php echo $item['details']?></h6>
                            </div>

                            <div class="text-center card-price">
                                <?php echo $item['price']?>
                            </div>
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