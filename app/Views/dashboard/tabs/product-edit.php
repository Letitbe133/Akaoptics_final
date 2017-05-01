<?php $this->layout('layout', ['title' => 'Edit Product']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>

        <div id="dashboard-users-edit" class="col-xs-8 col-xs-offset-1">
            <div class="container">
                <h2>Edit Product</h2>
                <p><strong><?= $msg ?></strong></p>
                <form enctype="multipart/form-data" method="POST">

                    <div class="form-group ">
                        <label for="name">Title</label>
                        <input class="form-control" type="text" id="name" name="name" value="<?= $product["name"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input class="form-control" type="text" id="subtitle" name="subtitle" value="<?= $product["subtitle"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" id="description" name="description" value="<?= $product["description"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="tagline">Tagline</label>
                        <input class="form-control" type="text" id="tagline" name="tagline" value="<?= $product["tagline"] ?>">
                    </div>

                    <div class="form-group">
                        <label for="picture_url">Picture</label>
                        <?php if(!isset($product["picture_url"])) { echo "No picture"; } else { ?>
                        <img src="/akaoptics/public/<?= $product["picture_url"] ?>" width="150"/>
                        <?php } ?>
                        <input type="file" id="picture_url" name="picture_url" value="<?= $product["picture_url"] ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-create-spec col-xs-3">Update</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.min.css') ?>">
<?php $this->stop('css') ?>
