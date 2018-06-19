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

$uri  = 'https://graph.facebook.com/v2.12/';
$uri .= '231076643901620/feed';
$uri .= '?access_token='.$access_token;

$response = json_decode(file_get_contents($uri));

var_dump($response);

foreach ($response->data as $album) :
  /* salvo link immagine grande da mostrare nel lightbox */
  $bigImg = $album->images[0]->source;
  /* link dell'immagine */
  $linkFB = $album->link;
  /* descrizione della foto */
  $photoTitle = (isset($album->name)) ? $album->name : "I nostri lavori";
  var_dump($album);
endforeach;
?>

<div class="<?= $mod_id ?>"></div>
