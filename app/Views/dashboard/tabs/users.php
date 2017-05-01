<?php $this->layout('layout', ['title' => 'Manage Users']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
        <aside>
            <?= $this->insert('dashboard/navTabs'); ?>
        </aside>

        <?= $this->insert('dashboard/dashboardNav'); ?>

        <div class="dashboard-wrapper">

            <div class="container">

                <h1>Manage Users</h1>

                <div class="row">

                    <div class="list-group col-xs-10">
                        <?php foreach($users as $user) { ?>

                        <li class="list-group-item">
                            <span class="badge"><a href="/akaoptics/public/aka-admin/users/edit/<?= $user["id"] ?>">Edit</a></span>
                            <span class="badge"><a href="/akaoptics/public/aka-admin/users/delete/<?= $user["id"] ?>">Delete</a></span>
                            <h4 class="list-group-item-heading">
                                <?= $user["first_name"] ?> <?= $user["last_name"] ?>
                            </h4>
                            <p class="list-group-item-text">
                                ID: <?= $user["id"] ?> <br/>
                                Email: <?= $user["email"] ?> <br/>
                                Role: <?= $user["role"] ?> <br/>
                            </p>
                        </li>
                        <?php } ?>
                    </div>

                </div>

                 <a href="/akaoptics/public/aka-admin/users/add" class="btn btn-primary btn-lg col-xs-3"><i class="fa fa-plus"></i> Add new user</a>

            </div>

        </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.min.css') ?>">
<?php $this->stop('css') ?>
