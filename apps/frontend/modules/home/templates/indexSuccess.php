<?php if(isset($dev_mode)==true): ?>
    <div id="getposition" style="z-index: 500000; position: fixed; top 5px; left:5px; width: 5px; height:5px;"></div>
<?php endif; ?>
<!--
<!--  Created by PhpStorm.-->
<!--  User: pedro-->
<!--  Date: 1/9/14-->
<!--  Time: 7:52 PM-->
<!-- /-->
<div id="newsletteroverlay" class="overlay">
    <div class="newsubscribe">
        <a id="closeform" style="display: inline-block"></a>

        <div style="width:200px; margin: 0 auto">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
        </div>
        <div id="newsletterform">
            <form id="mail" name="mail" method="post" action="contact-us.php">
                <label for="name">NAME</label><input type="text" name="name" id="name"/>
                <label for="email">EMAIL</label><input type="email" name="email" id="email"/>
                <label for="country">COUNTRY</label><input type="text" name="country" id="country"/>
                <!--  <div id="termos">
                   <input type="checkbox" name="terms" id="terms"> Ao submeter os seus dados receberá a newsletter, ofertas e publicidade enviado por bateye.com e aceita os Termos e Condições e a Política de Privacidade. Os dados submetidos não serão partilhados com mais nenhuma entidade.
                 </div> -->
                <div id="sendcontainer">
                    <input type="submit" name="enviar" id="enviar" value="SEND" class="button">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div>
        <div class="span11 pagination-centered" style="position: relative">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
            <div id="lang-choice">
                <a href="">EN </a>|<a href="index.php"> PT</a>
            </div>
        </div>

    </div>
    <div id="myCarousel" class="carousel slide span11">
        <a href="#" id="keep-scroll"></a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item img-carousel abrilfat"><img src="/images/Carousel/banner_arc.png" alt="Banner da peça Arc" /></div>
            <div class="item img-carousel"><img class="img-crousel" src="/images/Carousel/banner_elegance.png" alt="Banner da peça elegance" /></div>
            <div class="item img-carousel"><img class="img-crousel" src="/images/Carousel/banner_fairytale.png" alt="Banner da peça fairytale" /></div>
            <div class="item img-carousel"><img class="img-crousel" src="/images/Carousel/banner_queenly.png" alt="Banner da peça queenly" /></div>
            <div class="item img-carousel"><img class="img-crousel" src="/images/Carousel/banner_stone.png" alt="Banner da peça stone" /></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="span11 no-space">
        <div id="menu" class="span10 transp-white">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-th-list">
            </span>
            </a>
            <div class="nav-collapse">
                <ul class="nav nav-pills navigation latoregular">
                    <li>
                        <a href="brand.php">The Brand</a>
                    </li>
                    <li>
                        <a href="collection.php">Collections</a>
                    </li>
                    <li>
                        <a href="not_available.php">News</a>
                    </li>
                    <li>
                        <a href="not_available.php">Press</a>
                    </li>
                    <li>
                        <a href="contact.php">Contacts</a>
                    </li>
                    <li>
                        <a href="not_available">Lovers</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="span11 background-art">
        <div id="artparallax" class="span11 center-text art-typo abrilfat nodisplay">art<span class="symbolred">&</span>design</div>
    </div>
    <div class="span11 collections-img nodisplay">
        <div id="porto-colect">
            <a href="porto_collection.php"><img class="responsive-img" src="/images/portocollection_branco.png" alt="Link para coleção Porto" /></a>
        </div>
        <div id="london-collect">
            <a href="not_available.php"><img class="responsive-img" src="/images/londoncollection_branco.png" alt="Link para coleção Londres" /></a>
        </div>
    </div>
    <div class="span11 moreinfo nodisplay">
        <div class="span7 center-text border-r marginized abrilfat" style="float: left">
            <div class="justified">
                <h1 class="abrilfat">the brand</h1>
                <br />
                <h4 class="latobolditalic">‘We personify the furniture collective memories of the cities.’</h4>
                <br />
                <p class="latolight">We personify in the furniture the collective memory
                    of places, through moments, expressions, textures
                    and chromatic seized in the cities. We want to create
                    pieces from the whole world, for the whole world.</p>
                <br />
                <a href="brand.php" class="red-cross">+</a>
            </div>
        </div>
        <div class="span7 center-text marginized" style="float: right">
            <div class="justified abrilfat">
                <h1 class="abrilfat">the designer</h1>
                <br />
                <h4 class="latobolditalic">‘I want to create pieces of the world, for the entire world.’</h4>
                <br />
                <p class="latolight">As an architect I felt the need to create furniture that caught in the elementrs of convergence beween art and the city. The shapes, movements, gestures and chromatics that my look keeps mtranscribed into furniture as a tribute to the places. Nobady chooses the city where born.
                    <span class="latoitalic">Bat eye, Ltd.</span></p>
                <a href="author.php" class="red-cross">+</a>
            </div>
        </div>
    </div>
    <div id="fadeitnow" class="span11 nodisplay">
        <div id="numbers">
            <table id="table-numbers">
                <tr class="pompadour">
                    <td width="10%">
                        1
                    </td>
                    <td width="10%">
                        2
                    </td>
                    <td width="10%">
                        3
                    </td>
                    <td width="10%">
                        4
                    </td>
                </tr>
                <tr class="latolight" style="font-size:0.3em;">
                    <td width="10%">Ability to create.<br />
                        To rip.<br /> To risk.</td>
                    <td width="10%">Link between
                        technology
                        and tradition.</td>
                    <td width="10%">Quality of
                        manufacture.
                        Noble materials.</td>
                    <td width="10%">Attention
                        to the detail and
                        the singularity of
                        each piece.</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="span11 whatsnew nodisplay">
        <h2 class="abrilfat">what's new?</h2>
    </div>
    <div id="mainwrapper" class="span11 nodisplay"><!-- This #mainwrapper section contains all of our images to make them center and look proper in the browser ->
          <!-- Image Caption 1 -->
        <div id="box-1" class="box">
            <a href="queenly.php">
                <img id="image-1" src="/images/whatsnew/queenly.png" alt="Imagem da queenly"/>
              <span class="caption fade-caption">
              <h2>Queenly</h2>
              <h3>Coffee table</h3>
              <p>An unique coffee table that represents a taste for the exotic and artistic forms, inspired by stained glass windows of Arabian room.</p>
              </span>
            </a>
        </div>

        <!-- Image Caption 2 -->
        <div id="box-2" class="box">
            <a href="stone.php">
                <img id="image-2" src="/images/whatsnew/stone.png" alt="Imagem da peça stone" />
              <span class="caption fade-caption">
              <h2>Stone </h2>
              <h3>Sideboard</h3>
              <p>An original sideboard handmade crafted, coated with golden leaf and a blue satin interior depicting the radiant involvement of whole Porto absorbing the river...</p>
              </span>
            </a>
        </div>

        <!-- Image Caption 3 -->
        <div id="box-3" class="box">
            <a href="arc.php"></a>
            <img id="image-3" src="/images/whatsnew/ARC.png" alt="Imagem da peça Arc" />
              <span class="caption fade-caption">
              <h2>Arc</h2>
              <h3>Sideboard</h3>
              <p>A singular piece worked by$the hand of the artisan, with an interior carefully designed$and
                  finished in satin wood; the metal joining the margins is now the support base.</p>
              </span>
        </div>

        <!-- Image Caption 4 -->
        <div id="box-4" class="box">
            <img id="image-4" src="/images/whatsnew/showroom.png" alt="Bateye showroom no Carris Hotel" />
            <a href="#">
              <span class="caption fade-caption">
              <h2>Bat eye Showroom</h2>
              <h3>Carris Hotel, Porto</h3>
              <p>We have our pieces  exposed in the Carris Hotel just in the Porto historical center. Don’t loose the oportunity to see our pieces and stay in while visiting Porto.</p>
              </span>
            </a>
        </div>

        <!-- Image Caption 5 -->
        <div id="box-5" class="box">
            <div class="rotate"><!-- Rotating div -->
                <img id="image-5" src="/images/whatsnew/merrychristmas.png" alt="Bateye deseja um bom Natal a todos e um feliz ano novo!" />
                  <span class="caption fade-caption">
                  <h3>Bat eye wish you a Very Merry Christmas and a Happy New Year.</h3>
                  </span>
            </div>
        </div>

        <!-- Image Caption 6 -->
        <div id="box-6" class="box">
            <img id="image-6" src="/images/whatsnew/magazine.png" alt="Stone foi escolhida como Escolha do Editor de Love Design by Interior Beauté"/>
              <span class="caption fade-caption">
              <h2>‘Stone’ was  "Editor's Choice" at 品味設計「家」I Love Design by Interior Beauté 雅舍</h2>
              </span>
        </div>
    </div> <!-- end of #mainwrapper-->
    <div class="clear"></div>
    <?php $uri_url=$_SERVER['REQUEST_URI'];?>
    <script type="text/javascript" src="js/sidebuttons.js"></script>
    <div class="span11" id="footer" style="<?php if ($uri_url=="" || $uri_url=="index.php") echo 'display: none';?>">
        <div id="bar">
            <div id="logos">
                <a href="https://twitter.com/bat_eye"><img src="/images/icons/bateye_twitter.png" alt="Twitter Logo"></a>
                <a href="http://www.facebook.com/BatEye.com.pt"><img src="/images/icons/bateye_facebook.png" alt="Facebook Logo"></a>
                <a href="http://www.youtube.com/user/bateyevideos"><img src="/images/icons/bateye_youtube.png" alt="Youtube logo"></a>
                <a href="http://www.behance.net/Bateye"><img src="/images/icons/bateye_behance.png" alt="Behance Logo"></a>
                <a href="http://instagram.com/bateye"><img src="/images/icons/bateye_instagram.png" alt="Instagram Logo"></a>
                <a href="http://www.linkedin.com/company/bat-eye"><img src="/images/icons/bateye_linkedin.png" alt="Linkdin logo"></a>
            </div>
        </div>
        <div class="span11 center-text white-text latobold">
            <p style="font-size:15px;">+<a href="contact.php" style="font-size:14px;">INFO</a></p>
          <span class="latolight">info@bateye.com<br />
          +351 915790818</span>
        </div>
        <div id="rights" class="latolight">
            © 2013 <span class="latoitalic">bat eye, Ltd.</span><br />
            All rights reserved.
        </div>
    </div>

</div>

<!-- END   -->

</div>
<div id="newsletter" style="position:fixed; z-index: 5; left: -6px; top:120px">
    <img src="/images/newsletter.png" style="">
</div>

<div id="catalogue" style="position:fixed; z-index: 5; left: -6px; top:245px; curs">
    <a href="download.php"><img src="/images/CATALOGUE.png"></a>
</div>
<div id="produ" style="position:fixed; z-index: 5; bottom: 0; right: 0;">
    <img id="closeit" src="/images/close.png" alt="close button image">
    <a href="queenly.php"> <img src="/images/newprod/Queenly_Bat-eye-1.png" alt="Queenly peça nova!"/></a>
</div>