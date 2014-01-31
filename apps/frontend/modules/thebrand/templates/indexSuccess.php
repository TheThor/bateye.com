<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<div id="brand">
    <ul>
        <li><a href="<?php echo url_for(array(
                "module" => "thebrand",
                "action" => "showconcept"
            )) ?>">concept</a></li>
        <li><a href="<?php echo url_for(array(
                "module" => "thebrand",
                "action" => "showhistory"
            )) ?>">history</a></li>
        <li><a href="<?php echo url_for(array(
                "module" => "thebrand",
                "action" => "showmanufacture"
            )) ?>">manufacture</a></li>
        <li><a href="<?php echo url_for(array(
                "module" => "thebrand",
                "action" => "showauthor"
            )) ?>">author</a></li>
    </ul>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>