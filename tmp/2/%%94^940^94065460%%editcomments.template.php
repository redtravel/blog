<?php /* Smarty version 2.6.26, created on 2016-11-01 23:52:30
         compiled from admin/editcomments.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/editcomments.template', 38, false),array('modifier', 'strip_tags', 'admin/editcomments.template', 90, false),array('block', 'check_perms', 'admin/editcomments.template', 61, false),array('function', 'adminpager', 'admin/editcomments.template', 153, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'editComments','title' => $this->_tpl_vars['locale']->tr('editComments'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<script type="text/javascript" src="js/ui/plogui.js"></script>
	<script type="text/javascript">
		var errorCommentStatusMsg = '<?php echo $this->_tpl_vars['locale']->tr('error_comment_status'); ?>
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
 <?php if ($this->_tpl_vars['post']): ?>(<?php echo $this->_tpl_vars['post']->getTopic(); ?>
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
                    <input type="hidden" name="op" value="editComments" />
					<input type="hidden" name="articleId" value="<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>" />
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
		
        <form id="postCommentsList" action="admin.php" method="post">
		<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_comment')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
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
            <table id="list" class="info" summary="<?php echo $this->_tpl_vars['locale']->tr('editComments'); ?>
">
                <thead>
                    <tr>					
                        <th><input class="checkbox" type="checkbox" name="all" id="all" value="1" onclick="toggleAllChecks('postCommentsList');" /></th>
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
						<th style="width:5%"><?php echo $this->_tpl_vars['locale']->tr('auth'); ?>
</th>
                        <th style="width:10%">IP</th>
                        <th style="width:10%"><?php echo $this->_tpl_vars['locale']->tr('actions'); ?>
</th>
                    </tr>
                </thead>
                <tbody>
                 <?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
                    <tr>
                        <td>
                            <input class="checkbox" type="checkbox" name="commentIds[<?php echo $this->_tpl_vars['comment']->getId(); ?>
]" id="checks_<?php echo $this->_tpl_vars['comment']->getId(); ?>
" value="<?php echo $this->_tpl_vars['comment']->getId(); ?>
" />
                        </td>
                        <td class="col_highlighted">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getTopic())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<br/>
                            <span style="font-weight:normal">
                            &nbsp;&raquo;
                            <?php $this->assign('commentPost', $this->_tpl_vars['comment']->getArticle()); ?>
                            <a href="<?php echo $this->_tpl_vars['url']->postPermalink($this->_tpl_vars['commentPost']); ?>
"><?php echo $this->_tpl_vars['commentPost']->getTopic(); ?>
</a>
                            </span>
                        </td>
						<td>
						    <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getText())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

						</td>
                        <td>
						  <a href="mailto:<?php echo $this->_tpl_vars['comment']->getUserEmail(); ?>
">
						    <?php echo $this->_tpl_vars['comment']->getUsername(); ?>

						  </a>
                        </td>						
                        <td>
                            <?php $this->assign('date', $this->_tpl_vars['comment']->getDateObject()); ?>
                            <?php echo $this->_tpl_vars['locale']->formatDate($this->_tpl_vars['date']); ?>

                        </td>
                        <td>
                          <?php $_from = $this->_tpl_vars['commentstatus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['status']):
?>
                           <?php if ($this->_tpl_vars['comment']->getStatus() == $this->_tpl_vars['status']): ?><?php echo $this->_tpl_vars['locale']->tr($this->_tpl_vars['name']); ?>
<?php endif; ?>
                          <?php endforeach; endif; unset($_from); ?>
                        </td>
						<td style="text-align: center;">
							<?php if ($this->_tpl_vars['comment']->isPosterAuthenticated()): ?><?php echo $this->_tpl_vars['locale']->tr('yes'); ?>
<?php else: ?><?php echo $this->_tpl_vars['locale']->tr('no'); ?>
<?php endif; ?>
						</td>
                        <td style="text-align: center;">
						  <?php echo $this->_tpl_vars['comment']->getClientIp(); ?>

                        </td>						
                        <td>
                            <div class="list_action_button">
							<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_comment')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
                            <a href="?op=deleteComment&amp;commentId=<?php echo $this->_tpl_vars['comment']->getId(); ?>
&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>" title="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
">
                            	<img src="imgs/admin/icon_delete-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" />
                            </a>
							<?php if ($this->_tpl_vars['bayesian_filter_enabled']): ?>
								<?php if ($this->_tpl_vars['comment']->getStatus() != 1): ?>
								    <a href="?op=markComment&amp;mode=1&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['comment']->getArticleId(); ?>
<?php else: ?>0<?php endif; ?>&amp;commentId=<?php echo $this->_tpl_vars['comment']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('mark_as_spam'); ?>
">
									 <img src="imgs/admin/icon_spam-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('mark_as_spam'); ?>
" />
									</a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['comment']->getStatus() != 0): ?>
									<a href="?op=markComment&amp;mode=0&amp;articleId=<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['comment']->getArticleId(); ?>
<?php else: ?>0<?php endif; ?>&amp;commentId=<?php echo $this->_tpl_vars['comment']->getId(); ?>
" title="<?php echo $this->_tpl_vars['locale']->tr('mark_as_no_spam'); ?>
">
									 <img src="imgs/admin/icon_nospam-16.png" alt="<?php echo $this->_tpl_vars['locale']->tr('mark_as_no_spam'); ?>
" />
									</a>
                                <?php endif; ?>
							<?php endif; ?>
							<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php if ($this->_tpl_vars['comment']->getUserUrl()): ?>
							  <a href="<?php echo $this->_tpl_vars['comment']->getUserUrl(); ?>
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
" onClick="javascript:submitCommentsList('doCleanUp');" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_comment')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
			<input type="hidden" name="articleId" value="<?php if ($this->_tpl_vars['post']): ?><?php echo $this->_tpl_vars['post']->getId(); ?>
<?php else: ?>0<?php endif; ?>" />
            <input type="button" name="delete" value="<?php echo $this->_tpl_vars['locale']->tr('delete'); ?>
" class="submit" onClick="javascript:submitCommentsList('deleteComments');" />
            <input type="hidden" name="op" value="" />
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<?php $this->_tag_stack[] = array('check_perms', array('perm' => 'update_comment')); $_block_repeat=true;smarty_block_check_perms($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <div id="massiveChangeOption" style="display: none">
                <fieldset>
                <legend><?php echo $this->_tpl_vars['locale']->tr('massive_change_option'); ?>
</legend>            
		            <label for="commentStatus"><?php echo $this->_tpl_vars['locale']->tr('status'); ?>
</label>
		            <select name="commentStatus" id="commentStatus">
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
		            <input type="button" name="changeCommentsStatus" value="<?php echo $this->_tpl_vars['locale']->tr('change_status'); ?>
" class="submit" onClick="javascript:submitCommentsList('changeCommentsStatus');" /> 
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