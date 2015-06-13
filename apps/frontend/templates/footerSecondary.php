<?php $uri_url = $_SERVER['REQUEST_URI']; ?>
<div class="span11" id="footer" style="<?php if ($uri_url == "" || $uri_url == "index.php") echo 'display: none'; ?>">
    <div id="bar">
        <div id="logos">
            <a href="https://twitter.com/bat_eye"><img src="/images/icons/bateye_twitter.png" alt="Twitter Logo"></a>
            <a href="http://www.facebook.com/BatEye.com.pt"><img src="/images/icons/bateye_facebook.png" alt="Facebook Logo"></a>
            <a href="http://www.youtube.com/user/bateyevideos"><img src="/images/icons/bateye_youtube.png" alt="Youtube logo"></a>
            <a href="http://www.behance.net/Bateye"><img src="/images/icons/bateye_behance.png" alt="Behance Logo"></a>
            <a href="http://instagram.com/bateye"><img src="/images/icons/bateye_instagram.png" alt="Instagram Logo"></a>
            <a href="http://www.linkedin.com/company/bat-eye"><img src="/images/icons/bateye_linkedin.png" alt="Linkdin logo"></a>
            <a href="http://www.houzz.com/pro/bateye/bateye"><img src="/images/icons/houzz.png" alt="houzz logo"></a>
            <a href="http://pt.pinterest.com/bat_eye/"><img src="/images/icons/pinterest.png" alt="Pinterest logo"></a>
        </div>
    </div>
    <div class="span11 center-text white-text latobold">
        <p style="font-size:15px;">+<a href="<?php echo url_for(array(
                'module' => 'contacts',
                'action' => 'index'
            )) ?>" style="font-size:14px;">INFO</a></p>
          <span class="latolight">info@bateye.com<br/>
          +351 227312657</span>
    </div>
    <div id="rights" class="latolight">
        © 2013 <span class="latoitalic">bat eye, Ltd.</span><br/>
        All rights reserved.
    </div>
</div>