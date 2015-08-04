<div class="col-md-10 col-centered">
    <?php foreach ($pressYears as $pressYear): ?>
    <h3 class="pagination-centered">Press Editorial <?php echo $pressYear->get('YEAR') ?></h3>
    <div class="col-md-12 col-centered">
        <?php
        /** @var PressMainArea $pressMagazine */
        foreach ($pressMagazines as $pressMagazine):
            if ($pressMagazine->getDateTimeObject('created_at')->format('Y')==$pressYear->get('YEAR')):
        ?>
        <div style="width: 19%; float:left; margin: 10px 14px 5px 14px">
            <a href="<?php echo '/media/press/main_area/' . $pressMagazine->getCatalogue() ?>">
                <img src="<?php echo '/images/press/main_area/' . $pressMagazine->getCover() ?>" alt="Image"/>
            </a>
            <div class="center-text">
                <?php echo $pressMagazine->getCountry() ?> <br>
                <?php echo $pressMagazine->getDescription() ?>
            </div>
        </div>
        <?php
            endif;
            endforeach;
        ?>
        <div class="clearfix"></div>
    </div>
    <?php endforeach; ?>
</div>