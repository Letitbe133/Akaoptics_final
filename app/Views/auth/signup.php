<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<div class="loginform">
    <h1 class="text-center">Sign Up</h1>
    
    <form class="text-center" action="/akaoptics/public/signup" method="POST">
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First name"/>
        </div>
        <div class="form-group">
            <input type="text" name="last_name" placeholder="Last name"/>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password"/>
        </div>
        <div class="form-group">
            <input type="submit" class="loginbtn" value="Sign Up"/>
        </div>
    </form>
</div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/auth.css') ?>">
<?php $this->stop('css') ?>
