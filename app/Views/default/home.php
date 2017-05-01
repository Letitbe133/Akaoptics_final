<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
<section id="home">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
		  <ol class="carousel-indicators">
		  	<?php foreach($products as $key=>$product) { ?>
		    <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="<?php if($key == 0) { echo 'active'; } ?>">
		    	<?php if ($product["picture_url"]) { ?>
		    	<img src="/akaoptics/public/<?= $product["picture_url"] ?>" class="img-responsive" alt="<?= $product["name"] ?>">
		    	<?php } else { ?>
		    	<img src="/akaoptics/public/uploads/default_product.png" class="img-responsive" alt="<?= $product["name"] ?>">
		    	<?php } ?>
		    </li>
		    <?php } ?>
		  </ol>
	  <!-- Wrapper for slides -->

		  <div class="carousel-inner" role="listbox">
		  	<?php foreach($products as $key=>$product) { ?>
		    <div class="item <?php if($key == 0) { echo 'active'; } ?>">
		      	<a href="products/<?= $product["id"] ?>">
		      		<?php if ($product["picture_url"]) { ?>
		      		<img src="/akaoptics/public/<?= $product["picture_url"] ?>" alt="<?= $product["name"] ?>">
		      		<?php } else { ?>
			    	<img src="/akaoptics/public/uploads/default_product.png" class="img-responsive" alt="<?= $product["name"] ?>">
			    	<?php } ?>
		      		<div class="carousel-caption">
						<h2><?= $product["name"] ?></h2>
					</div>
		      	</a>
		    </div>
		    <?php } ?>
		  </div>

	  	<!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  	<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  	<span class="sr-only">Next</span>
		  </a>
	</div>
	<div class="container">
  <h2 class="meet">MEET AKA OPTICS</h2>
  </div>
    <div id="events" class="container col-xs-12">


        <ul class="list-inline list-unstyled hidescreen">

        <?php
			if (count($events)>0)
			{
	        	// S'il n'y a pas d'events, afficher un message "No events." par exemple
	        	foreach ($events as $event)
	        	{
	        		$date = strtotime($event['date']);
        			$event['formatDate'] = date('Y-M-d', $date);
	        	?>
	        		<li><a href="<?php echo $event['link'] ?>"><?php echo $event['title'] ?></a> <?php echo $event['place'] ?> <?php echo $event['description'] ?> <?php echo $event['formatDate'] ?></li>
        <?php
        		}
			}
			else
			{
		?>
				<li><?php echo 'No scheduled event'; ?></li>
		<?php
			}
        ?>

        </ul>

    </div>

</section>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/home.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/home.min.js') ?>"></script>
<?php $this->stop('js') ?>
