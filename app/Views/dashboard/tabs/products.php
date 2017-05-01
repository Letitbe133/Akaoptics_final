<?php $this->layout('layout', ['title' => 'Manage Products']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
    <aside>
        <?= $this->insert('dashboard/navTabs'); ?>
    </aside>

    <?= $this->insert('dashboard/dashboardNav'); ?>

    <div class="dashboard-wrapper">

        <div class="container">

            <h1>Manage Products</h1>

            <div class="list-group col-xs-10">
                <?php foreach($products as $product) { ?>

                <li class="list-group-item">
                    <span class="badge"><a href="/akaoptics/public/aka-admin/products/edit/<?= $product["id"] ?>">Edit</a></span>
                    <span class="badge"><a href="/akaoptics/public/aka-admin/products/delete/<?= $product["id"] ?>">Delete</a></span>
                    <h4 class="list-group-item-heading">
                        <?php if($product["picture_url"]) { ?>
                        <img src="/akaoptics/public/<?= $product["picture_url"] ?>" width="150" />
                        <?php } else { ?>
                        <img src="/akaoptics/public/uploads/default_product.png" width="150" />
                        <?php } ?>
                        <?= $product["name"] ?> <?= $product["subtitle"] ?>
                    </h4>
                </li>
                <?php } ?>
            </div>

            <a href="/akaoptics/public/aka-admin/products/add" class="btn btn-primary btn-lg col-xs-3"><i class="fa fa-plus"></i> Add new product</a>

        </div>

    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.min.css') ?>">
<?php $this->stop('css') ?>
