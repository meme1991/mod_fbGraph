<?php
# @Author: SPEDI srl
# @Date:   15-02-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 15-02-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (c) SPEDI srl

defined('_JEXEC') or die;

// $url         = "https://graph.facebook.com/v2.8/".$albumId."/photos?fields=album%2Cimages%2Clink%2Cid%2Cname&limit=".$albumLimit."&access_token=".$appToken;
// $page        = file_get_contents($url);
// $json_output = json_decode($page);

$uri  = 'https://graph.facebook.com/v3.2/';
$uri .= '196054514105/videos?fields=description%2Ctitle%2Cpermalink_url%2Cembed_html%2Cpicture%2Csource&limit=10';
$uri .= '&access_token='.$access_token;

$response = json_decode(file_get_contents($uri));

// var_dump($response);

?>

<section class="fb-videogallery <?= $mod_id ?>">
  <div class="container">
    <div class="row">
      <?php foreach ($response->data as $lists) : ?>
      <div class="col-4">

        <video width="100%" height="200px" controls>
          <source src="<?= $lists->source; ?>" type="video/mp4">
          <source src="<?= $lists->source; ?>" type="video/ogg">
          Your browser does not support HTML5 video.
        </video>

      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
