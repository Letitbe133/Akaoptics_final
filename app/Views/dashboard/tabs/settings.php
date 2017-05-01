<?php $this->layout('layout', ['title' => 'Manage Settings']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
	<aside>
        <?= $this->insert('dashboard/navTabs'); ?>
    </aside>

    <?= $this->insert('dashboard/dashboardNav'); ?>

    <div class="dashboard-wrapper">

    	<div id="settings" class="container">

	    	<form enctype="multipart/form-data" method="POST" class="col-xs-12">

	    		<h1>Website settings</h1>

	    		<section>

		    		<div class="form-group">
		    			<label for="website_name">Set your website title</label>
		    			<input class="form-control" type="text" id="website_name" name="website_name" value="<?= $settings["website_name"] ?>" />
		    		</div>

		    		<div class="form-group">
		    			<label for="website_logo">
		    				Your company logo
		    				<?php if ($settings["website_logo"]) { ?>
		    				<img src="/akaoptics/public/<?= $settings["website_logo"] ?>" width="100" />
		    				<?php } else { ?>
		    				<img src="/akaoptics/public/uploads/default_logo.png" width="45" />
		    				<?php } ?>
		    			</label>
		    			<input class="form-control" type="file" id="website_logo" name="website_logo" />
		    		</div>

		    		<div class="form-group">
		    			<label for="website_description">Describe your company</label>
		    			<textarea class="form-control" id="website_description" name="website_description"><?= $settings["website_description"] ?></textarea>
		    		</div>
	    		</section>

	    		<h1>Contact settings</h1>

	    		<section>

		    		<div class="form-group">
		    			<label for="website_contact_email">What's your email contact?</label>
		    			<input class="form-control" type="email" id="website_contact_email" name="website_contact_email" value="<?= $settings["website_contact_email"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_phone">What's your phone contact?</label>
		    			<input class="form-control" type="tel" id="website_contact_phone" name="website_contact_phone" value="<?= $settings["website_contact_phone"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_fax">What's your fax contact?</label>
		    			<input class="form-control" type="tel" id="website_contact_fax" name="website_contact_fax" value="<?= $settings["website_contact_fax"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_street">What's your street name?</label>
		    			<input class="form-control" type="text" id="website_contact_street" name="website_contact_street" value="<?= $settings["website_contact_street"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_zip">What's your zip code?</label>
		    			<input class="form-control" type="number" id="website_contact_zip" name="website_contact_zip" value="<?= $settings["website_contact_zip"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_city">What's your city?</label>
		    			<input class="form-control" type="text" id="website_contact_city" name="website_contact_city" value="<?= $settings["website_contact_city"] ?>" />
		    		</div>
		    		<div class="form-group">
		    			<label for="website_contact_country">What's your country?</label>
		    			<input class="form-control" type="text" id="website_contact_country" name="website_contact_country" value="<?= $settings["website_contact_country"] ?>" />
		    		</div>
		    	</section>

	    		<h1>Administrative settings</h1>

	    		<section>
		    		<div class="form-group">
		    			<label for="website_company_siren">What's your company siren?</label>
		    			<input class="form-control" type="tel" id="website_company_siren" name="website_company_siren" value="<?= $settings["website_company_siren"] ?>" />
		    		</div>
		    	</section>

	    		<div class="form-group">
	    			<input type="submit" class="btndash" value="Save changes"/>
	    		</div>

	    	</form>

	    </div>

	</div>

</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>
