<?php

$a->table = 'users';
$a->primaryKey = 'iduser';
$a->order = array ( 'iduser'=>'desc' );
$a->showRecords = 5;
$a->charsLimit = 50;
$a->maximulFileSize = 512;
$a->captcha = true;
$a->preventRightClick = true;
//$a->buttonsToHide = array("benchmark");
//$a->dropdown = "search";
//$a->postprocessing = "alert";

$a->fields = array (

	'username' => array (
		'type'=>'text',
		'width'=>150,
		'label'=>'Username',
		'noduplicates'=>true,
		'filter'=>'username',
		'required'=>true,
		'minSize'=>3,
		'maxSize'=>50,
		'hide'=>true,
		'autocomplete'=>'off',
	),
	
	'password' => array (
		'type'=>'password',
		'width'=>90,
		'label'=>'Password',
		'encrypt'=>true,
		'required'=>true,
		'minSize'=>5,
		'maxSize'=>100
	),
	
	'email' => array (
		'type'=>'text',
		'width'=>150,
		'label'=>'E-mail',
		'noduplicates'=>true,
		'filter'=>'mail',
		'required'=>true,
		'minSize'=>5,
		'maxSize'=>250
	),
	
	'regdate' => array (
		'type'=>'date',
		'width'=>130,
		'label'=>'Registration date',
		'filter'=>'date',
		'required'=>true,
	),

	/*'usertype' => array (
		'type'=>'groupCheckbox',
		'identifier'=>'user',
		'width'=>120,
		'label'=>'Type of user',
		'required'=>true,
		'select'=>array(
			'regular'=>'Regular user',
			'moderator'=>'Moderator',
			'administrator'=>'Administrator',
		),
		'default'=>'regular',
	),*/
	'usertype' => array (
		'type'=>'select',
		'width'=>120,
		'label'=>'Type of user',
		'required'=>true,
		'select'=>array(
			'regular'=>'Regular user',
			'moderator'=>'Moderator',
			'administrator'=>'Administrator',
		),
	),
	
	'active' => array (
		'type'=>'checkbox',
		'width'=>70,
		'label'=>'Active',
		'value'=>1,
	),
	
	'description' => array (
		'identifier'=>'desc1',
		'type'=>'range',
		'width'=>200,
		'label'=>'User description',
		'min'=>5,
		'default'=>05,
		'max'=>10,
		'step'=>1,
	),
	
	'avatar' => array (
		'type'=>'file',
		'width'=>120,
		'label'=>'Avatar',
		'filter'=>'image',
		'file'=>array (
			'for'=>false,
			'location'=>'uploads/useravatars/',
			'order'=>true,
			'keep-original'=>false,
			'resize'=>array( '120x120'=>'crop', '300x200'=>'resize', '700x500'=>'resize' ),
			'rotate'=>20,
			'background'=>'ffffff',
			'fixed-aspect'=>'T',
		),
	),
	
	'photos' => array (
		'type'=>'file',
		'width'=>200,
		'label'=>'Gallery',
		'filter'=>'image',
		'file'=>array (
			'for'=>'usergallery',
			'location'=>'uploads/usergallery/',
			'order'=>true,
			'multiple'=>5,
			'resize'=>array( '120x120'=>'crop', '300x200'=>'resize', '700x500'=>'resize' ),
			'keep-original'=>false,
		),
	),

);

//$a->textAfter = '<p>&nbsp;</p>'.highlight_file(__FILE__, true);