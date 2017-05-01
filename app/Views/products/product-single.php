<?php 
if ($product["picture_url"])
{
    $header_image_url = $product["picture_url"];
} else {
    $header_image_url = "default_product.png";
}
$this->engine->addData(["header_image" => true, "header_image_name" => $header_image_url]); 

?>
<?php $this->layout('layout', ['title' => $product["name"]]) ?>

<?php $this->start('main_content') ?>

<div id="product-single">
   
    
    <h2 class="text-primary text-center title"><?php echo $product["name"]; ?> : <?php echo $product["subtitle"]; ?></h2>
    
    <section class="product-presentation">
        
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <p>
                <strong><?php echo $product["description"]; ?></strong>
            </p>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <p>
                <?php echo $product["tagline"]; ?>
            </p>
        </div>
    </section>
    
    <section>
        
        <div id="basic" class="col-xs-12 blueflag panel panel-primary accordeon" data-toggle="collapse" data-target="#basicSpec">
            <div class="container">
                <div class="col-xs-12">
                    <h3 class="spectitle"><i class="fa fa-plus" aria-hidden="true"></i> BASIC SPECIFICATIONS </h3>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row collapse" id="basicSpec">
                <?php foreach ($basic as $basicSpec)
                { ?>
                <div class="row specbasic">
                    <div class="col-xs-1 col-sm-1 col-sm-offset-3">
                         <i class="fa fa-5x fa-<?php echo $basicSpec['icon']; ?> blueicon"></i>
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6">
                        <h3 class="text-primary basicSpecTitle"><?php echo $basicSpec['title']; ?></h3>
                        <p class="col-sm-8">
                            <?php echo $basicSpec['data']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        
    </section>
    
    <section>
        
        <div id="detail" class="blueflag col-xs-12 panel panel-primary accordeon" data-toggle="collapse" data-target="#detailSpec">
            <div class="container">
                <div class="col-xs-12">
                    <h3 class="spectitle"><i class="fa fa-plus" aria-hidden="true"></i> DETAIL SPECIFICATIONS</h3>
                </div>
            </div>
        </div>
        
        <div class="collapse" id="detailSpec">
            
            
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <h3 class="text-center title">
                        WE HAVE AN EXPERIENCE WITH A LARGE RANGE OF<br />
                        <span class="subtitle">STACK ACTUATOR DEFORMABLE MIRRORS</span>
                    </h3>
                </div>
                
                <?php foreach ($details as $detailSpec)
                { ?>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-1 panel panel-default">
                            <?php echo $detailSpec['title']; ?>
                        </div>
                        <div class="col-xs-6 panel panel-default">
                            <?php echo $detailSpec['data']; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
        </div>
            
        
    </section>
    
    <div class="custom container text-center">
        <button id="request" class="btn btn-primary btn-lg">Get informations</button>
        <div id="productRequest">
            <?php $this->insert('products/productRequestForm', ['product_id' => $product_id]) ?>;
        </div>
    </div>
    
</div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/product-single.css') ?>">
<?php $this->stop('css') ?>


<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/product-single.min.js') ?>"></script>
<?php $this->stop('js') ?>