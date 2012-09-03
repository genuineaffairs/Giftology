<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Giftology: The social gifting company');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $this->Facebook->html(); ?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		echo $this->Html->css('http://cdn.webrupee.com/font');
		//echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		//echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js');
		//echo $this->Html->script('giftology');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>


<body>
<div class="mainpage2 content">
  <div class="wrapper">
    <div class="about">
      <div class="first">
        <h1>Giftology.com</h1>
        <h2>Giftology.com is a fun and easy way to give free and paid gift cards to your Facebook friends.</h2>
	<?php if ($facebook_user) {
		$this->Html->link('Click here to Start >> ', array('controller' => 'reminders', action => 'view_friends'));	
	} else {
		echo "Start by logging into facebook >>";
	}
	?>
        <?php echo $this->Facebook->login(
            array('perms' => 'email,publish_stream, user_birthday, user_location,friends_birthday, friends_location')); ?>
    </div>
      <div class="second">
        <div class="facepile">
          <iframe scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:297px;" src="https://www.facebook.com/plugins/facepile.php?app_id=227739037248749" allowtransparency="true"></iframe>
        </div>
        <div class="social">
          <div class="twitter">
            
          </div>
          <div class="facebook">
            
          </div>
        </div>
        <div class="availability">
          <p class="iphone-android">Giftology.com is also available for <a class="android" href="https://market.android.com/details?id=com.wrapp.android">Android</a> and <a class="iphone" href="http://itunes.apple.com/app/wrapp/id458640944">iPhone</a>.</p>
        </div>
      </div>
    </div>
	
	
	
	 <div class="infographic interactive">
		<div class="shadow">
		  <div class="slides">
			<ul>
			  <li class="slide1 animate hide hide-ball" style="z-index: 4;">
				<div class="image"></div>
				<div class="overlay"></div>
			  </li>
			</ul>
		  </div>
		</div>
	  </div>
  </div>
</div>
<!-- Main page close -->
	<?= $this->Facebook->init(); ?>

</body>
</html>