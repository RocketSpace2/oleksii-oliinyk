<?php
/* Smarty version 4.3.2, created on 2024-03-25 10:02:05
  from 'D:\Work\XAMPP\htdocs\oleksii-oliinyk\szablonowanie-smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66013d8d69f7d1_30400365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9122316098a4a6d59d4c424ec680c26e3169ea3f' => 
    array (
      0 => 'D:\\Work\\XAMPP\\htdocs\\oleksii-oliinyk\\szablonowanie-smarty\\app\\calc.html',
      1 => 1711307939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66013d8d69f7d1_30400365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29681422866013d8d548315_33011018', 'form');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'form'} */
class Block_29681422866013d8d548315_33011018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_29681422866013d8d548315_33011018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form id="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">
                <div class="row gtr-uniform">
                    <div class="col-6 off-1">
                        <input type="text" name="loan_am" id="demo-name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['loan_am'];?>
" placeholder="Kwota kredytu" />
                    </div>
                    <div class="col-6 off-1">
                        <input type="text" name="rate" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rate'];?>
" placeholder="Oprocentowanie (%)" />
                    </div>
                    <div class="col-6 off-1">
                        <input type="text" name="term" id="demo-email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['term'];?>
" placeholder="Ilość rat miesięcznych" />
                    </div>
                    <!-- Break  -->
                    <div class="col-12 off-1">
						<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
							<h4>Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł</h4>
							<?php }?>
                        <ul class="actions">
                            <li><input type="submit" value="Count" class="primary" /></li>
                        </ul>
                    </div>
                </div>	
</form>

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
	<div style="padding-left: 7em;">
		<h4>Wystąpiły błędy: </h4>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	</div>	
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
	<div>
		<h4>Informacje: </h4>
		<ol>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	</div>	
	<?php }
}?>

<?php
}
}
/* {/block 'form'} */
}
