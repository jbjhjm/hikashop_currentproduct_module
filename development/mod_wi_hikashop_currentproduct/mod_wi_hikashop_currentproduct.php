<?php
<%= phpbanner %>

if(!defined('DS'))
	define('DS', DIRECTORY_SEPARATOR);
if(!include_once(rtrim(JPATH_ADMINISTRATOR,DS).DS.'components'.DS.'com_hikashop'.DS.'helpers'.DS.'helper.php')){
	echo 'This module can not work without the Hikashop Component';
	return;
};

$req = JRequest::Get();
if($req['option']=='com_hikashop' && $req['ctrl']=='product'){
	// $params->set('hikashopmodule.itemid',$req['cid']);
	$productClass = hikashop_get('class.product');
	$product = $productClass->get($req['cid']);
	// var_dump($req['cid'],$product);
	// die;

	$params->get('module_layout');

	require(JModuleHelper::getLayoutPath('mod_hikashop_currentproduct',$params->get('module_layout','default')));

}
