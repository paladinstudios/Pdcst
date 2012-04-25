<body id="page1" onload="new ElementMaxHeight();">
<!-- header -->
	<div id="header">
		<div class="bg">
			<div class="container">
				<div class="row-1">
					<div class="wrapper">
						<div class="fleft">
							<?php if ($logo): ?>
        				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        				</a>
      				<?php endif; ?>
						</div>
						<div class="fright">
							<?php print $login_message; ?>
						</div>
					</div>
				</div>
				<div class="row-2">
					<!-- .nav -->
					<div class="nav">
						<?php if ($main_menu): ?>
							<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
						<?php endif; ?>
					</div>
					<!-- /.nav -->
				</div>
				<div class="row-3">
					<img src="../sites/all/themes/podcast/includes/images/slogan.jpg" alt="" class="slogan" />
					<p><?php print $site_slogan; ?></p>
					<form action="" id="search-form">
						<fieldset><input type="text" class="text" value="" /><input type="submit" class="submit" value="" /></fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- content -->
	<div id="content"><div class="inner_copy">More <a href="http://www.templates.com/">Website Templates</a> @ Templates.com!</div>
		<div class="container">
			<div class="wrapper">
				<div class="aside maxheight">
					<div class="indent">
						<?php print render($page['left_sidebar']); ?>
					</div>
				</div>
				<div class="mainContent maxheight">
					<div class="indent">
						<div class="section">
        			<a id="main-content"></a>
   				    <?php print render($title_prefix); ?>
    			    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
   				    <?php print render($title_suffix); ?>
        			<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        			<?php print render($page['help']); ?>
        			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        			<?php print render($page['content']); ?>
        			<?php print $feed_icons; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- footer -->
	<div id="footer">
		<div class="bg">
			<div class="container">
				<div class="indent">
					<?php print render($page['footer']); ?>
				</div>	
			</div>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
</body>