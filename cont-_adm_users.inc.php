<?php
//Custom Validation Function
function amit($field){
	$arr = array();
	if($field<12676767){
	$arr['success'] = true;
	$arr["error"] = "";
	}
	else{
	$arr["success"] = "";
	$arr['error']="The value must not be numeric";
	}
	return $arr;
}

//Two field custom validation
function validate_amit($field1, $field2){
	$arr = array();
	if(strlen($field1) == strlen($field2)){
		$arr["success"] = true;
		$arr["error"] = ""; 
	} 
	else{
		$arr["success"] = "";
		$arr["error"] = "Custom Validation failed";
	}
	return $arr;
}

$id = 4;
$a->table = '_adminusers';
$a->primaryKey = 'idadmin';
$a->order = array ( 'username'=>'asc' );
$a->showRecords = 20;
$a->charsLimit = 50;
//$a->buttonsToHide = array('export');
$a->fields = array (
	
	'username' => array (
		'type'=>'text',
		'width'=>150,
		'label'=>'Username',
		'noduplicates'=>true,
		'filter'=>'username',
		'required'=>true,
		'minSize'=>3,
		'maxSize'=>60,
		//'hide'=>true,
		//'validation'=>"amit",
		'keyboard'=>true,
		'linkTo'=>array(
			'page'=>'example.php',
			'extra'=>'id=rowID',
			'popup'=>true,
		),
		//'compare'=>array('password',"<"), //>,>=,<=,=,!=
		'compare2field'=>array('password','validate_amit'),
		'autocomplete'=>'off',
	),
	
	'password' => array (
		'type'=>'password',
		'width'=>90,
		'label'=>'Password',
		'encrypt'=>true,
		'required'=>true,
		'minSize'=>5,
		'maxSize'=>60,
	),
	/*'password2' => array (
		'type'=>'text',
		'width'=>90,
		'label'=>'field',
		'required'=>true,
		'minSize'=>5,
		'maxSize'=>60,
		'isfield'=>false,
		'value'=>'Click Here',
		'linkTo'=>array(
			'page'=>'example.php',
			'extra'=>'id='.$id,
			'popup'=>true
		),
	),*/
	
	'mail' => array (
		'type'=>'text',
		'width'=>150,
		'label'=>'E-mail',
		'noduplicates'=>true,
		'filter'=>'mail',
		'required'=>true,
		'minSize'=>5,
		'maxSize'=>250,
		'autocomplete'=>'off'
	),

	'role' => array (
		'type'=>'select',
		'width'=>120,
		'label'=>'Role',
		'select'=>array(
			'fields'=>'name',
			'from'=>'_adminroles', // table
			'on'=>'idrole'
		),
	),
	
	'active' => array (
		'type'=>'checkbox',
		'width'=>70,
		'label'=>'Active',
	),
	

);

//$a->textAfter = '<p>&nbsp;</p>'.highlight_file(__FILE__, true);