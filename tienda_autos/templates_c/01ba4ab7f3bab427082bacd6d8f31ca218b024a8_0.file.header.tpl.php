<?php /* Smarty version 3.1.27, created on 2015-10-22 22:50:18
         compiled from "/var/www/html/practica1/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7591862615629ae7a1c7141_93759583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ba4ab7f3bab427082bacd6d8f31ca218b024a8' => 
    array (
      0 => '/var/www/html/practica1/templates/header.tpl',
      1 => 1445572153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7591862615629ae7a1c7141_93759583',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5629ae7a1cd7e6_22342873',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5629ae7a1cd7e6_22342873')) {
function content_5629ae7a1cd7e6_22342873 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7591862615629ae7a1c7141_93759583';
?>
<!DOCTYPE html>
<html>
	<head>		
		<meta charset = "utf-8">
		<link rel="stylesheet" href="css/styles.css">	
		<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
	</head>

<body>
		<div>
			<!--TOP-->
			<header>
				<div id="top">TOP</div>
			</header>

			<nav>
				<ul>
					<!--MENU-->
					<li><a href="#">Men&uacute; 1</a></li>
					<li><a href="#">Men&uacute; 2</a></li>
					<li><a href="#">Men&uacute; 3</a></li>
					<li><a href="#">Men&uacute; 4</a></li>
					<li><a href="#">Men&uacute; 5</a></li>
				</ul>
			</nav>

<?php }
}
?>