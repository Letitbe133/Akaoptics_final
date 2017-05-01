<?php $this->layout('layout', ['title' => 'Add Product']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-products-add" class="col-xs-8 col-xs-offset-1">
            <div class="container">
                <h2>Add Product</h2>
                <p><strong><?= $msg ?></strong></p>
                <form enctype="multipart/form-data" method="POST">
                
                    <div class="form-group ">
                        <label for="name">Title</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input class="form-control" type="text" id="subtitle" name="subtitle">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" id="description" name="description">
                    </div>
                    
                    <div class="form-group">
                        <label for="tagline">Tagline</label>
                        <input class="form-control" type="text" id="tagline" name="tagline">
                    </div>
                    
                    <h2>Specifications</h2>
                    <a id="newSpec" href="#!" class="btn btn-primary">Add a new specification</a>
                    <div class="form-group">
                        <select name="specs" multiple>
                            <?php foreach($specs as $spec) { ?>
                            <option value="<?= $spec["id"] ?>"><?= $spec["title"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        
                        <label for="tagline">Tagline</label>
                        <input class="form-control" type="text" id="tagline" name="tagline">
                    </div>
                    
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input class="form-control" type="file" id="picture" name="picture">
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-create-spec col-xs-3">Create new product</button>
                    </div> 
                    
                </form>
                
                <div id="newspecContent">
                    <a href="#" id="closeSpec" class="pull-right"><i class="fa fa-close"></i></a>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2 class="text-center">Add new spec</h2>
                            <select name="type" id="type">
                                <option value="basic" selected>Basic</option>
                                <option value="detail">Detail</option>
                            </select>
                            <a href="#!" id="addInput"><i class="fa fa-plus"></i></a>
                            <form id="specForm"></form>
                            <a href="#!" id="addSpec" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.js') ?>"></script>
<?php $this->stop('js') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>