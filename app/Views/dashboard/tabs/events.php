<?php $this->layout('layout', ['title' => 'Manage Events']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">

    <aside>
        <?= $this->insert('dashboard/navTabs'); ?>
    </aside>

    <?= $this->insert('dashboard/dashboardNav'); ?>

    <div class="dashboard-wrapper">

        <div class="container">

            <h1>Manage Events</h1>

            <div class="list-group col-xs-10">
                <?php foreach($events as $event) {
                $date = strtotime($event['date']);
    			$event['formatDate'] = date('Y-M-d', $date);
                ?>

                <li class="list-group-item">
                    <span class="badge"><a href="/akaoptics/public/aka-admin/events/edit/<?= $event["id"] ?>">Edit</a></span>
                    <span class="badge"><a href="/akaoptics/public/aka-admin/events/delete/<?= $event["id"] ?>">Delete</a></span>
                    <h4 class="list-group-item-heading text-primary">
                        <?= $event["title"] ?>
                    </h4>
                    <p class="list-group-item-text">
                        Title: <?= $event["title"] ?>
                    </p>
                    <p class="list-group-item-text">
                        Date: <?= $event["formatDate"] ?>
                    </p>
                    <p class="list-group-item-text">
                        Location: <?= $event["place"] ?>
                    </p>
                    <p class="list-group-item-text">
                        Description: <?= $event["description"] ?>
                    </p>
                    <p class="list-group-item-text">
                        Link: <?= $event["link"] ?>
                    </p>
                </li>
                <?php } ?>
            </div>

            <a href="/akaoptics/public/aka-admin/events/add" class="btn btn-primary btn-lg col-xs-3"><i class="fa fa-plus"></i> Add new event</a>

        </div>

    </div>

</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.min.css') ?>">
<?php $this->stop('css') ?>
