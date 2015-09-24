<div class="col-md-8 col-centered">
    <?php foreach ($pressYears as $pressYear): ?>
    <h3 class="pagination-centered" style="margin: 30px 0 25px 0">Press Editorial <?php echo $pressYear->get('YEAR') ?></h3>
    <div class="col-md-12 col-centered">
        <?php
        /** @var PressMainArea $pressMagazine */
        foreach ($pressMagazines as $pressMagazine):
            if ($pressMagazine->getDateTimeObject('created_at')->format('Y')==$pressYear->get('YEAR')):
        ?>
        <div class="col-xs-3" style="margin-bottom: 25px">
            <a href="<?php echo '/media/press/main_area/' . $pressMagazine->getCatalogue() ?>">
                <img class="centered-width" class="img-responsive" src="<?php echo '/images/press/main_area/' . $pressMagazine->getCover() ?>" alt="Image"/>
            </a>
            <div class="center-text">
                <b><?php echo $pressMagazine->getCountry() ?></b> <br>
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