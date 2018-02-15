<?php
# @Author: SPEDI srl
# @Date:   15-02-2018
# @Email:  sviluppo@spedi.it
# @Last modified by:   SPEDI srl
# @Last modified time: 15-02-2018
# @License: GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
# @Copyright: Copyright (c) SPEDI srl

defined('_JEXEC') or die;

$document = JFactory::getDocument();
$tmpl     = JFactory::getApplication()->getTemplate();

// params
$jquery     = $params->get('jquery');
$app_id     = $params->get('appid');
$secret_key = $params->get('secretkey');

// access_token
$access_token = $app_id .'|'.$secret_key;

// gallery id
$mod_id = substr(md5($module->id.$module->title), 1, 5);

if($jquery)
  JHtml::_('jquery.framework');

/* script */
// if($magnific){
//   $extensionPath = '/templates/'.$tmpl.'/dist/magnific/';
//   if(file_exists(JPATH_SITE.$extensionPath)){
//     $document->addStyleSheet(JUri::base(true).'/templates/'.$tmpl.'/dist/magnific/magnific-popup.min.css');
//     $document->addScript(JUri::base(true).'/templates/'.$tmpl.'/dist/magnific/jquery.magnific-popup.min.js', 'text/javascript', true, false);
//   } else{
//     $document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/dist/magnific/magnific-popup.min.css');
//     $document->addScript(JUri::base(true).'/modules/'.$module->module.'/dist/magnific/jquery.magnific-popup.min.js', 'text/javascript', true, false);
//   }
// }

require JModuleHelper::getLayoutPath($module->module, $params->get('layout'));
