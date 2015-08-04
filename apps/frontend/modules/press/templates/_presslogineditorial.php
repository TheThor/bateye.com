<div class="col-md-10 col-centered">
<!--    foreach (press year)-->
    <h3 class="pagination-centered">Press Editorial 2013</h3>
    <div class="col-md-12 col-centered">
        <!--    foreach (product)-->
        <?php
        /** @var PressMainArea $pressMagazine */
        foreach ($pressMagazines as $pressMagazine):
        ?>
        <div style="width: 22.5%; float:left; margin: 10px 14px 5px 14px">
            <img src="<?php echo $pressMagazine->getCover() ?>" alt="Image"/>
            <div class="center-text">
                <?php $pressMagazine->getCountry() ?> <br>
                <?php $pressMagazine->getDescription() ?>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="clearfix"></div>
    </div>
<!--    endforeach (press year)-->
</div>