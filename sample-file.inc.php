<?php
//Post Processing Function. No argumnet should be passed to the function
function post_function()
{
echo "FF";
}

//Custom Validation Function. Pass only one argument within the function
function validation_func($field){
	$arr = array();
	if($field<120){
	$arr['success'] = true;
	$arr["error"] = "";
	}
	else{
	$arr["success"] = "";
	$arr['error']="The value must be less than 120";
	}
	return $arr;
}

//Validation with other field. Pass only two arguments within the function
function validation_func2($field1, $field2){
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


// main table 
$a->table = 'users';

// primary key of this table
$a->primaryKey = 'iduser';

// make order
$a->order = array ( 'name'=>'asc' );

// make filter
$a->filter = array (
	'OptionCode'	=> array ( 'hello there', 'LIKE' ),
	'title'			=> array ( 'hello mike', '=' ),
	'id'			=> array ( 25, '>' ),
);

// how many records per page
$a->showRecords = 30;

// no. of chars limited in table listing
$a->charsLimit = 5;

// some default values
$a->defaultValues = array(
	'fieldWidth'=>'150',
	'fieldHeight'=>'90',
	'formLeftWidth'=>'120',
	'smallThumbsHeight'=>'25',
);

//MySQL DB Access. By default set to true if not mentioned.
$a->mysql_db = true;

//Prevent Right Click on Pages. By default it is set to false
$a->preventRightClick == true;

//captcha in forms. By default it is false.
$a->captcha = true;

//Special Dropdown where the user can search for specific value
$a->dropdown = "search";

// maximum file size (in KB) to upload
$a->maximulFileSize = 2048;

// where to go after submit
$a->gotoAfterAction = 'insert';
// default (not set)
// - on insert, go to insert
// - on update, go back to update that ID
//
//	OR
//			
// insert	- go to insert
// update	- go to update
// list		- go to list

// the admin class will not list nothing
$a->independent = false; 
// To make in-page output you have to populate a string like
// $a->textBefore, $a->form, $a->listTable, $a->textAfter OR $a->listPages

// export the CSV with a table head
$a->addCSVHead = true;

// export foreign keys (when you have fields of "select" type)
// as string, not as keys (integer values)
$a->exportCSVString = true;

// where to make the export
$a->exportFolder = 'uploads/';

// this has to be posted in index.php,
// before the use of "validateInclude" method
$a->validSections = array();

//Specific function can be set. After the form submission and updation the custom function will get executed
$a->postprocessing = "post_function";

// if false, will hide the menu, the header and some buttons
$a->navigation = true;

// hide some buttons (ie: the insert button)
$a->buttonsToHide = array( 'insert' );

// some text, before the table or forms
$a->textBefore = 'Some infos';

// al fields
$a->fields = array (

	'field' => array (

		'type'=>'text', // OR password, textarea, content, select, file, checkbox, hidden, date (with calendar), groupCheckbox, range, radio
		'width'=>120,
		'height'=>50,
		'label'=>'Label of field',
		'encrypt'=>true,
		'isfield'=>true,
		'readonly'=>true,
		'noduplicates'=>false,
		'keyboard'=>true, //Virtual Keyboard
		'filter'=>'alphanum', // digits, number, date, mail, url, ip, username ( with _ and - ) - you can add more
		'required'=>true,
		'minSize'=>3,
		'maxSize'=>50,
		'validation'=>"validation_func", //Custom Validation Function
		'hideCharacters'=>true,
		'compare'=>array('other_field_name',"<"), //>,>=,<=,=,!= Comparing value with other field
		'compare2field'=>array('other_field_name','validatation_func2'),
		'select'=>array(
			'fields'=>'name,mail',
			'from'=>'users', // table
			'on'=>'foreignField',
			'where'=>'`activ`=1'
		),
		'hide'=>true, //hides the field to be listed in tabular format
		'autocomplete'=>'off', //autocomplete off. By default it is on.
		
		//Dropdown with static values
		'select'=>array(
			'value1'=>'Label1',
			'value2'=>'Label2'
		),
		

		'file'=>array(
			'for'=>false, // false = keep in this field  -- OR --  'USER-AVATAR' = will be associated in `files`
			'location'=>'../images/',
			'order'=>true,
			'multiple'=>8, // we need 'for' to have 'multiple'
			// ---- only if image -----
			'rotate'=>23, // integer
			'background'=>'ffffff', // background after rotate
			'resize'=>array( '120x90'=>'crop', '300x200'=>'resize', '500x500'=>'resize' ),
			'keep-original'=>false, // delete uploaded file
			'fixed-aspect'=>'C', // R, L, T, B [have a white border to keep aspect]
			'watermark'=>'../images/wm.png', // array ('300x200' => '../images/wm_special.png' ) 
		),
		
		'usertype' => array (
		'type'=>'radio',
		'width'=>120,
		'label'=>'Type of user',
		'select'=>array(
			'regular'=>'Regular user',
			'moderator'=>'Moderator',
			'administrator'=>'Administrator',
			),
		),
		
		'items' => array (
			'type'=>'range',
			'width'=>200,
			'label'=>'No of items',
			'identifier'=>'any_name',
			'min'=>5, //minimum value
			'default'=>20, //default value
			'max'=>10, //maximum value
			'step'=>1, //step through values
			),
		
		'users_table_name' => array (
			'type'=>'groupCheckbox',
			'identifier'=>'user',
			'width'=>120,
			'label'=>'Type of user',
			'required'=>true,
			'select'=>array(
				'value1'=>'label1',
				'value2'=>'label2',
				'value3'=>'label3',
				),
			'default'=>'value1', //Default value for groupCheckbox
			),
	
		'linkTo'=>array (
			'edit'=>0,
			'page'=>1,
			'section'=>'_adm_privs',
			'show'=>'list',
			'filter'=>array(	 // FIELD \\
				'role' => array ( 'idrole', '=' ),
			),
			'order'=>array('page'=>'asc', 'action'=>'asc'),
		),
		//SECOND TYPE OF linkTo set up for external link
		'linkTo'=>array (
			'page'=>"external_file.php",
			'extra'=>parameters, //"id=4" like this but if "id=rowID" -> for selecting row id automatically
			'popup'=>true,
		),

	),
);





$a->textAfter = 'after everything, at the end';
$a->listTable = "some content";
