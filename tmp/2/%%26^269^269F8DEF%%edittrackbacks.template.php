<?php /* Smarty version 2.6.26, created on 2016-11-01 23:52:31
         compiled from admin/edittrackbacks.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/edittrackbacks.template', 38, false),array('modifier', 'strip_tags', 'admin/edittrackbacks.template', 90, false),array('modifier', 'utf8_wordwrap', 'admin/edittrackbacks.template', 90, false),array('block', 'check_perms', 'admin/edittrackbacks.template', 62, false),array('function', 'adminpager', 'admin/edittrackbacks.template', 148, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'editTrackbacks','title' => $this->_tpl_vars['locale']->tr('editTrackbacks'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script type="text/javascript" src="js/ui/plogui.js"></script>
	<script type="text/javascript">
		var errorTrackbackStatusMsg = '<?php echo $this->_tpl_vars['locale']->tr('error_trackback_status'); ?>
';
		var showMassiveChangeOption = '<?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
';
		var hideMassiveChangeOption = '<?php echo $this->_tpl_vars['locale']->tr('hide_massive_change_option'); ?>
';
	</script>
	<script type="text/javascript">
	<?php echo '
	YAHOO.util.Event.addListener( window, "load", function() {
			var t = new Lifetype.UI.TableEffects( "list" );
			t.stripe();
			t.highlightRows();
		});
	'; ?>

	</script>	
        <div id="list_nav_bar">
            <div id="list_nav_select">		

                <form id="showBy" action="admin.php" method="post">
                <fieldset>
                <legend><?php echo $this->_tpl_vars['locale']->tr('show_by'); ?>
 <?php if ($this->_tpl_vars['post']): ?>( <?php echo $this->_tpl_vars['post']->getTopic(); ?>
 )<?php endif; ?></legend>

                    <div class="list_nav_option">
                    <label for="showStatus"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
                    <br />
                    <select name="showStatus" id="showStatus">
                     <?php $_from = $this->_tpl_vars['commentstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
                     <option value="<?php echo $this->_tpl_vars['status']; ?>
" <?php if ($this->_tpl_vars['currentstatus'] == $this->_tpl_vars['status']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</option>
                     <?php endforeach; endif; unset($_from); ?>
                    </select>
                    </div>

                    <div class="list_nav_option">
                    <label for="search"><?php echo $this->_tpl_vars['locale']->tr('search_terms'); ?>
</label>
                    <br />
                    <input type="text" name="searchTerms" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchTerms'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="15" id="search" />
                    </div>										
					
                    <div class="list_nav_option">
                    <br />
                    <input type="hidden" name="op" value="editTrackbacks" />
					<?php if ($this->_tpl_vars['post']): ?><input type="hidden" name="articleId" value="<?php echo $this->_tpl_vars['post']->getId(); ?>
" /><?php endif; ?>
                    <input type="submit" name="show" value="<?php echo $this->_tpl_vars['locale']->tr('show'); ?>
" class="submit" />
                    </div>

					<div class="list_nav_option">
						<br/>
						<a href="<?php echo $this->_tpl_vars['pager']->getCurrentPageLink(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('bookmark_this_filter'); ?>
">
							<img style="border:0px" src="imgs/admin/icon_link-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('bookmark_this_filter'); ?>
" />
						</a>
					</div>

                </fieldset>
                </form>
            </div>
            <br style="clear:both;" />
        </div>

        <form id="postTrackbacksList" action="admin.php" method="post">
		<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_trackback')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <div class="optionIcon">
			<a id="optionIconLink" href="#bulkEdit" title="<?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
" onclick="switchMassiveOption()"><?php echo $this->_tpl_vars['locale']->tr('show_massive_change_option'); ?>
</a>
		</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <div id="list">
		  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/successmessage.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/errormessage.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <table id="list" class="info" summary="<?php echo $this->_tpl_vars['locale']->tr('editTrackbacks'); ?>
">
                <thead>
                    <tr>
                        <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('postTrackbacksList');" /></th>
                        <th style="width:25%;"><?php echo $this->_tpl_vars['locale']->tr('topic'); ?>
</th>						
                        <th style="width:45%;"><?php echo $this->_tpl_vars['locale']->tr('text'); ?>
</th>
                        <th style="width:5%;"><?php echo $this->_tpl_vars['locale']->tr('author'); ?>
</th>
						<th style="width:5%"><?php echo $this->_tpl_vars['locale']->tr('date'); ?>
</th>
                        <th style="width:5%"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</th>
                        <th style="width:10%">IP</th>
                        <th style="width:10%"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
                    </tr>
                </thead>
                <tbody>
                   <?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['trackback']):
?>
                    <tr>
                        <td>
                            <input class="checkbox" type="checkbox" name="trackbackIds[<?php echo $this->_tpl_vars['trackback']->getId(); ?>
]" id="trackbackIds[<?php echo $this->_tpl_vars['trackback']->getId(); ?>
]" value="<?php echo $this->_tpl_vars['trackback']->getId(); ?>
" />
                        </td>
                        <td class="col_highlighted">
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback']->getTopic())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('utf8_wordwrap', true, $_tmp, 12, "<br/>", true) : smarty_modifier_utf8_wordwrap($_tmp, 12, "<br/>", true)); ?>

                            <span style="font-weight:normal">
							<br/>
                            &nbsp;&raquo;
                            <?php $this->assign('trackbackPost', $this->_tpl_vars['trackback']->getArticle()); ?>
                            <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['trackbackPost']); ?>
"><?php echo $this->_tpl_vars['trackbackPost']->getTopic(); ?>
</a>
                            </span>
                        </td>
                        <td>
                            <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['trackback']->getText())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('utf8_wordwrap', true, $_tmp, 35, "<br/>", true) : smarty_modifier_utf8_wordwrap($_tmp, 35, "<br/>", true)); ?>

                        </td>
                        <td>
                            <a href="<?php echo $this->_tpl_vars['trackback']->getUserUrl(); ?>
"><?php echo $this->_tpl_vars['trackback']->getUserName(); ?>
</a>
                        </td>
                        <td>
                            <?php $this->assign('date', $this->_tpl_vars['trackback']->getDateObject()); ?>
                            <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['date']); ?>

                        </td>
                        <td>
                          <?php $_from = $this->_tpl_vars['commentstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
                           <?php if ($this->_tpl_vars['trackback']->getStatus() == $this->_tpl_vars['status']): ?><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
<?php endif; ?>
                          <?php endforeach; endif; unset($_from); ?>
                        </td>
                        <td style="text-align: center;">
						  <?php echo $this->_tpl_vars['trackback']->getClientIp(); ?>

                        </td>														                
                        <td>
							<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_trackback')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
                            <div class="list_action_button">
                             <a href="?op=deleteTrackback&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>&amp;trackbackId=<?php echo $this->_tpl_vars['trackback']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
">
                             	<img src="imgs/admin/icon_delete-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" />
                             </a>
							<?php if ($this->_tpl_vars['bayesian_filter_enabled']): ?>
								<?php if ($this->_tpl_vars['trackback']->getStatus() == 0): ?>
								    <a href="?op=markTrackback&amp;mode=1&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>&amp;trackbackId=<?php echo $this->_tpl_vars['trackback']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('mark_as_spam'); ?>
">
									 <img src="imgs/admin/icon_spam-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('mark_as_spam'); ?>
" />
									</a>
								<?php elseif ($this->_tpl_vars['trackback']->getStatus() == 1): ?>
									<a href="?op=markTrackback&amp;mode=0&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>&amp;trackbackId=<?php echo $this->_tpl_vars['trackback']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('mark_as_no_spam'); ?>
">
									 <img src="imgs/admin/icon_nospam-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('mark_as_no_spam'); ?>
" />
									</a>
								<?php endif; ?>
							<?php endif; ?>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            <?php if ($this->_tpl_vars['trackback']->getUserUrl()): ?>
                                <a href="<?php echo $this->_tpl_vars['trackback']->getUserUrl(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('url'); ?>
">
                                 <img src="imgs/admin/icon_url-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('url'); ?>
" />
                                </a>
                            <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </tbody>
            </table>
        </div>
        <a name="bulkEdit"></a>
        <div id="list_action_bar">
            <?php echo smarty_function_adminpager(array('style' => 'list'), $this);?>

			<?php $this->_tag_stack[] = array('check_perms', array('adminperm' => 'purge_data')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<input type="submit" name="purgeSpam" class="submit" value="<?php echo $this->_tpl_vars['locale']->tr('cleanup_spam'); ?>
" onClick="javascript:submitTrackbacksList('doCleanUp');" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_trackback')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<input type="hidden" name="articleId" value="<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>" />
            <input type="button" name="delete" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" class="submit" onClick="javascript:submitTrackbacksList('deleteTrackbacks');" />
            <input type="hidden" name="op" value="" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_trackback')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <div id="massiveChangeOption" style="display: none;">
                <fieldset>
                <legend><?php echo $this->_tpl_vars['locale']->tr('massive_change_option'); ?>
</legend>            
		            <label for="trackbackStatus"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
		            <select name="trackbackStatus" id="trackbackStatus">
		              <option value="-1">-<?php echo $this->_tpl_vars['locale']->tr('select'); ?>
-</option>
		              <?php $_from = $this->_tpl_vars['commentstatusWithoutAll']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
		                <?php if (( $this->_tpl_vars['status'] != 0 && $this->_tpl_vars['status'] != 1 ) || $this->_tpl_vars['bayesian_filter_enabled']): ?><option value="<?php echo $this->_tpl_vars['status']; ?>
"><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
</option><?php endif; ?>
		              <?php endforeach; endif; unset($_from); ?>
		            </select>
		            <input type="button" name="changeTrackbacksStatus" value="<?php echo $this->_tpl_vars['locale']->tr('change_status'); ?>
" class="submit" onClick="javascript:submitTrackbacksList('changeTrackbacksStatus');" /> 
		        </fieldset>
			</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>            

	</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/footernavigation.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/footer.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>