<?php $this->layout('layout', ['title' => 'Edit User']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-users-edit" class="col-xs-8 col-xs-offset-1">
            <div class="container">
               <h2>Edit User</h2>
                <p><strong><?= $msg ?></strong></p>
                <form method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="first_name" value="<?= $user["first_name"] ?>" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="last_name" value="<?= $user["last_name"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" value="<?= $user["email"] ?>"/>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role">
                            <?php if($user["role"] === "user") { ?>
                                <option value="<?= $user["role"] ?>" selected>User</option>
                                <option value="admin">Admin</option>
                            <?php } else { ?> 
                                <option value="<?= $user["role"] ?>" selected>Admin</option>
                                <option value="user">User</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary col-xs-3" value="Update"/>
                    </div>
                </form>
            </div>
        </div>
                
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>