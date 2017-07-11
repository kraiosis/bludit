<!doctype html>
<html lang="<?php echo $Site->language() ?>">
<head>
<!-- Meta tags -->
<?php include('php/head.php') ?>
</head>
<body>

<!-- Plugins Site Body Begin -->
<?php Theme::plugins('siteBodyBegin') ?>

<!-- Layout -->
<div id="layout" class="pure-g">

    <!-- Sidebar -->
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <?php include('php/sidebar.php') ?>
    </div>

    <!-- Main -->
    <div class="content pure-u-1 pure-u-md-3-4">

        <!-- Content -->
        <?php
			if($WHERE_AM_I=='page') {
				include(THEME_DIR_PHP.'page.php');
			} else {
				include(THEME_DIR_PHP.'home.php');
			}
        ?>

        <!-- Footer -->
        <div class="footer">
            <p><?php echo $Site->footer(); ?> | <?php echo $Language->get('Powered by') ?> <a target="_blank" href="http://www.bludit.com">Bludit</a></p>
        </div>

    </div>

</div>

<!-- Plugins Site Body End -->
<?php Theme::plugins('siteBodyEnd') ?>

</body>
</html>