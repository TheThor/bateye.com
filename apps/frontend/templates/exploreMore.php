<div id="mainwrapper" class="row" style="margin-bottom: -50px; margin-top:120px;">
    <?php /** @var News $news */
    foreach($news as $new): ?>
        <?php $i=1; ?>
        <div id="box-<?php echo $i;?>" class="col-md-4 box">
            <a href="<?php echo $new->getLink() ?>">
                <img id="image-<?php echo $i;?>" src="/images/whatsnew/<?php echo $new->getNewsImage() ?>" alt="<?php echo htmlspecialchars_decode($new->getNewsTitle()) ?>"/>
                <span class="caption fade-caption">
              <?php echo htmlspecialchars_decode($new->getNewsTitle()) ?>
                    <?php echo htmlspecialchars_decode($new->getNewsContent()) ?></p>
              </span>
            </a>
        </div>
        <?php $i++;?>
    <?php endforeach ?>
    <div class="clear"></div>
</div>
