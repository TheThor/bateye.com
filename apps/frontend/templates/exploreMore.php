<?php foreach($news as $new): ?>
    <div id="box-1" class="box">
        <a href="<?php echo $new->getLink() ?>">
            <img id="image-1" src="/<?php echo $new->getNewsImage() ?>" alt="Imagem da queenly"/>
              <span class="caption fade-caption">
              <?php echo htmlspecialchars_decode($new->getNewsTitle()) ?>
                  <?php echo htmlspecialchars_decode($new->getNewsContent()) ?></p>
              </span>
        </a>
    </div>
<?php endforeach ?>