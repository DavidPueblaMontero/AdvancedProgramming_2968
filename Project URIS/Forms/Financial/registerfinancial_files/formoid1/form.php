<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-green" style="background-color:#cbffc2;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Register Data financial </h2></div>
	<div class="element-number<?php frmd_add_class("number11"); ?>" title="Id"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number11" required="required" placeholder="Id" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Select Company"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-number<?php frmd_add_class("number1"); ?>" title="Year"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="1500" max="2019" name="number1" required="required" placeholder="Year" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number2"); ?>" title="Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number2" required="required" placeholder="Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number3"); ?>" title="Sales Cost"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number3" required="required" placeholder="Sales Cost" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number4"); ?>" title="Gross Profit"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number4" required="required" placeholder="Gross Profit" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number5"); ?>" title="Expenses Admi Sales"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number5" required="required" placeholder="Expenses Admi Sales" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number6"); ?>" title="Depreciations"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number6" required="required" placeholder="Depreciations" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number7"); ?>" title="Interest Paid"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number7" required="required" placeholder="Interest Paid" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number8"); ?>" title="Profit Before Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number8" required="required" placeholder="Profit Before Taxes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number9"); ?>" title="Taxes"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number9" required="required" placeholder="Taxes" value=""/><span class="icon-place"></span></div></div>
	<div class="element-number<?php frmd_add_class("number10"); ?>" title="Exercise Utility"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" min="0" max="99999999" name="number10" required="required" placeholder="Exercise Utility" value=""/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>