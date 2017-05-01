<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Products']) ?>

<?php $this->start('main_content') ?>
<div id="products" class="container">
    
    <h2 class="text-primary text-center justify">AKA Optics manufactures, Bimorph deformable mirrors, Stack actuator deformable mirrors, Very large deformable mirrors and Wavefront Sensors </h2>
    
    <div class="swiper">
        <ul class="swipe-section">
            <li class="swipe-item col col-xs-4 swipe-helper">
                <div class="swipe-content">
                    <img src="<?= $this->assetUrl('img/swipe_helper.png') ?>" alt="helper" width="40">
                </div>
            </li>
            <?php foreach ($products as $key => $product)
            { ?>
            <li class="swipe-item col col-xs-4 <?php if($key == 1) { echo "active"; } ?>">
                <?php if ($product["picture_url"]) { ?>
                <img class="swipe-img" src="/akaoptics/public/<?= $product["picture_url"] ?>" />
                <?php } else { ?>
                <img class="swipe-img" src="/akaoptics/public/uploads/default_product.png" alt="AKA Optics Product"/>
                <?php } ?>
                <div class="swipe-content">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['tagline']; ?></p>
                    <div class="swipe-footer">
                        <a href="/akaoptics/public/products/<?php echo $product['id']; ?>" class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/products.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
    <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
	<script src="<?= $this->assetUrl('libs/Swiper/Swiper.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/products.min.js') ?>"></script>
<?php $this->stop('js') ?>
