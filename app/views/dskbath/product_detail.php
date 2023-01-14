<?php $this->view("new_header", $data); ?>

<style>
    /*panel*/
    .panel {
        border: none;
        box-shadow: none;
    }

    .panel-heading {
        border-color: #eff2f7;
        font-size: 16px;
        font-weight: 300;
    }

    .panel-title {
        color: #2A3542;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 0;
        margin-top: 0;
        font-family: 'Open Sans', sans-serif;
    }

    /*product list*/

    .prod-cat li a {
        border-bottom: 1px dashed #d9d9d9;
    }

    .prod-cat li a {
        color: #3b3b3b;
    }

    .prod-cat li ul {
        margin-left: 30px;
    }

    .prod-cat li ul li a {
        border-bottom: none;
    }

    .prod-cat li ul li a:hover,
    .prod-cat li ul li a:focus,
    .prod-cat li ul li.active a,
    .prod-cat li a:hover,
    .prod-cat li a:focus,
    .prod-cat li a.active {
        background: none;
        color: #ff7261;
    }

    .pro-lab {
        margin-right: 20px;
        font-weight: normal;
    }

    .pro-sort {
        padding-right: 20px;
        float: left;
    }

    .pro-page-list {
        margin: 5px 0 0 0;
    }

    .product-list img {
        width: 100%;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
    }

    .product-list .pro-img-box {
        position: relative;
    }

    .adtocart {
        background: #fc5959;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        color: #fff;
        display: inline-block;
        text-align: center;
        border: 3px solid #fff;
        left: 45%;
        bottom: -25px;
        position: absolute;
    }

    .adtocart i {
        color: #fff;
        font-size: 25px;
        line-height: 42px;
    }

    .pro-title {
        color: #5A5A5A;
        display: inline-block;
        margin-top: 20px;
        font-size: 16px;
    }

    .product-list .price {
        color: #fc5959;
        font-size: 15px;
    }

    .pro-img-details {
        
    }

    .pro-img-details img {
        margin-top: 5vh;
        border: 10px solid rgb(60, 183, 186);
    }

    .pro-d-title {
        font-size: 16px;
        margin-top: 0;
    }

    .product_meta {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 10px 0;
        margin: 15px 0;
    }

    .product_meta span {
        display: block;
        margin-bottom: 10px;
    }

    .product_meta a,
    .pro-price {
        color: #fc5959;
    }

    .pro-price,
    .amount-old {
        font-size: 18px;
        padding: 0 10px;
    }

    .amount-old {
        text-decoration: line-through;
    }

    .quantity {
        width: 120px;
    }

    .pro-img-list {
        margin: 10px 0 0 -15px;
        margin-bottom: 3vh;
        /* display: inline-block; */
    }

    .pro-img-list a {
        /* float: left; */
        margin-right: 10px;
        margin-bottom: ;
    }

    .pro-d-head {
        /* font-size: 18px;
        font-weight: 300; */
    }
    .bottom{
        border: 10px solid rgb(60, 183, 186);
        width: 50vw;
    }
</style>
<?php if ($ROW):?>
    <div class="container bootdey">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <h1 class="text-center display-4" style="color: rgb(60, 183, 186);">Product Details | <?=$ROW->name?></h1>
                    <div class="row">
                        <div class="col text-center">
                            <div class="pro-img-details">
                                <img src="<?= ROOT . $ROW->image ?>"
                                     alt=""style="height: 70vh; width: 100%">
                            </div>
                            <div class="row pro-img-list">
                                <div class="col">
                                <a href="#">
                                    <img class="img-fluid bottom"
                                         src="<?= ROOT . $ROW->image2 ?>"
                                         alt=""
                                         style="height: 15vh;">
                                </a>
                                </div>
                                <div class="col">
                                <a href="#">
                                    <img class="img-fluid bottom"
                                         src="<?= ROOT . $ROW->image3 ?>"
                                         alt=""
                                         style="height: 15vh;">
                                </a>
                                </div>
                                <div class="col">
                                <a href="#">
                                    <img class="img-fluid bottom"
                                         src="<?= ROOT . $ROW->image4 ?>"
                                         alt=""
                                         style="height: 15vh;">
                                </a>
                                </div>
                                <div class="col">
                                <img class="img-fluid bottom"
                                         src="<?= ROOT . $ROW->image5 ?>"
                                         alt=""
                                         style="height: 15vh;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 gx-0 mt-5">
                            <h4 class="pro-d-title">
                                <a href="#"
                                   class="">
                                    <h2><?= $ROW->name ?></h2>
                                </a>
                            </h4>
                            <p class="text-muted"><?= $ROW->description ?></p>
                            <div class="product_meta">
                                <span class="posted_in"> <strong>Categories:</strong> <a rel="tag"
                                       href="#"><?= $category->category ?></a>
                                </span>
                            </div>

                            <div class="form-group">
                                <label class="display-6" style="color: rgb(60, 183, 186);">Quantity</label>
                                <input type="number"
                                       placeholder=""
                                       name="cart_qty_product_detail"
                                       id="cart_qty_product_detail"
                                       value="1"
                                       class="form-control quantity mt-3" style="border-radius: 10vh; width: 100%;">
                            </div>
                            <p>
                                <button class="btn btn-round btn-danger button mt-3"
                                        type="button"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php else: ?>
    <div>Product Not Found</div>    
<?php endif; ?>

<?php $this->view("new_footer", $data); ?>