<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap');
                echo $this->Html->css('style');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
   
<html lang="en">
   
    <title>CAPOEIRA IRELAND CAKE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Business Frontpage' Template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
	
	<link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
	
    <script src="js/mcVideoPlugin.js" type="text/javascript"></script>
	
    <script src="js/js-image-slider.js" type="text/javascript"></script>
	
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
	
  </head>

   <!--welcome user-->
      <div id="log"> 
            <h4><?php if(AuthComponent::user()){
	echo 'Welcome '.AuthComponent::user('username');
			echo $this->Html->link(' Logout ',array ('controller'=>'users', 'action'=>'logout'));
			}
			else{
				echo $this->Html->link(' Login ',array ('controller'=>'users', 'action'=>'login'));
			}
			?></h4>
      </div>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
     
    </nav>
	<div class="col-lg-12 col-sm-12">
    </div>
   <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.youtube.com/watch?v=N1XYZOQrDQc" data-autovideo="1">
                <img src="images/image-slider-6.jpg" alt="Welcome to Menucool Video Slider" />
            </a>
            <a class="video" href="http://www.youtube.com/watch?v=oRMOQ-rsEE4">
                <b data-src="images/image-slider-7.jpg">Vimeo</b>
            </a>
            <a class="video" href="http://www.youtube.com/watch?v=dF2p3CMDe_g">
                <b data-src="images/image-slider-8.jpg">Image Slider</b>
            </a>
            <a class="lazyImage" href="images/image-slider-10.jpg">Slide 4</a>
            <a class="video" href="http://www.youtube.com/watch?v=N1XYZOQrDQc" data-autovideo="1">
                <b data-src="images/image-slider-9.jpg">Slide 5</b>
            </a>
        </div>
    </div>
     
    <div class="container">
    
      <hr>
      
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>

          <?php echo $this->Element('navigation'); ?>
		
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
              <hr>

      <div class="row">
        <div class="col-sm-4">
                <img class="img-circle img-responsive text-center" src="images/image-slider-7.jpg">
            <h2>USERS</h2>
            <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
        </div>
        <div class="col-sm-4">
                <img class="img-circle img-responsive" src="images/image-slider-8.jpg">
            <h2>POSTS</h2>
            <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <div class="col-sm-4">
                <img class="img-circle img-responsive" src="images/image-slider-10.jpg">
            <h2>ADMIN</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
      </div>

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
          </div>
        </div>
      </footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
