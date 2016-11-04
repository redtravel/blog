<?php /* Smarty version 2.6.26, created on 2016-11-02 10:43:33
         compiled from admin/blogsettings.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/blogsettings.template', 240, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/header.template", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/navigation.template", 'smarty_include_vars' => array('showOpt' => 'blogSettings','title' => $this->_tpl_vars['locale']->tr('blogSettings'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <form name="blogSettings" action="admin.php" method="post">
  <fieldset class="inputField">
    <legend><?php echo $this->_tpl_vars['locale']->tr('blogSettings'); ?>
</legend> 
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

    <div class="field">
      <label for="blogName"><?php echo $this->_tpl_vars['locale']->tr('name'); ?>
</label>
      <span class="required">*</span>
      <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('blog_name_help'); ?>
</div>
      <input type="text" name="blogName" id="blogName" style="width:100%" value="<?php echo $this->_tpl_vars['blogName']; ?>
" />
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogName','message' => $this->_tpl_vars['locale']->tr('error_invalid_blog_name'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php if ($this->_tpl_vars['blogDomainsEnabled']): ?>
    <div class="field">
      <label for="blogSubDomain"><?php echo $this->_tpl_vars['locale']->tr('domain'); ?>
</label>
      <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('register_blog_domain_help'); ?>
</div>
      <input type="text" name="blogSubDomain" id="blogSubDomain" style="width:150px" value="<?php echo $this->_tpl_vars['blogSubDomain']; ?>
" />
      <select name="blogMainDomain" id="blogMainDomain">
       <?php $_from = $this->_tpl_vars['blogAvailableDomains']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['domain']):
?>
        <option value="<?php echo $this->_tpl_vars['domain']; ?>
"
             <?php if ($this->_tpl_vars['domain'] == $this->_tpl_vars['blogMainDomain']): ?>selected<?php endif; ?>>
             <?php if ($this->_tpl_vars['domain'] == "?"): ?>
               <?php echo $this->_tpl_vars['locale']->tr('subdomains_any_domain'); ?>

             <?php else: ?>
               .<?php echo $this->_tpl_vars['domain']; ?>

             <?php endif; ?>
        </option>
       <?php endforeach; endif; unset($_from); ?>
      </select>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogSubDomain','message' => $this->_tpl_vars['locale']->tr('error_invalid_subdomain'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogMainDomain','message' => $this->_tpl_vars['locale']->tr('error_invalid_domain'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

     <div class="field">
      <label for="blogUseSsl"><?php echo $this->_tpl_vars['locale']->tr('use_ssl'); ?>
</label>
      <div class="formHelp">
	    <input class="checkbox" type="checkbox" value="1" name="blogUseSsl" id="blogUseSsl" <?php if ($this->_tpl_vars['blogUseSsl'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('use_ssl_help'); ?>

      </div> 
     </div>

    <?php endif; ?>

    <div class="field">
      <label for="blogAbout"><?php echo $this->_tpl_vars['locale']->tr('description'); ?>
</label>
      <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('blog_description_help'); ?>
</div>
      <textarea rows="10" style="width:100%" id="blogAbout" name="blogAbout"><?php echo $this->_tpl_vars['blogAbout']; ?>
</textarea>
    </div>

    <div class="field">
     <label for="blogLocale"><?php echo $this->_tpl_vars['locale']->tr('language'); ?>
</label>
     <span class="required">*</span>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('blog_language_help'); ?>
</div>
     <select name="blogLocale" id="blogLocale">
      <?php $_from = $this->_tpl_vars['locales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeobject']):
?>
       <option value="<?php echo $this->_tpl_vars['localeobject']->getLocaleCode(); ?>
" <?php if ($this->_tpl_vars['localeobject']->getLocaleCode() == $this->_tpl_vars['blogLocale']): ?> selected="selected" <?php endif; ?>>
	     <?php echo $this->_tpl_vars['localeobject']->getDescription(); ?>
 (<?php echo $this->_tpl_vars['localeobject']->getLocaleCode(); ?>
 <?php echo $this->_tpl_vars['localeobject']->getCharset(); ?>
)
	   </option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogLocale','message' => $this->_tpl_vars['locale']->tr('error_invalid_locale'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
	
    <div class="field">
     <label for="blogLocale"><?php echo $this->_tpl_vars['locale']->tr('blog_category'); ?>
</label>
     <span class="required">*</span>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('blog_category_help'); ?>
</div>
     <select name="blogCategory" id="blogCategory">
	  <option value="0"><?php echo $this->_tpl_vars['locale']->tr('none'); ?>
</option>
      <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
       <option value="<?php echo $this->_tpl_vars['category']->getId(); ?>
" <?php if ($this->_tpl_vars['category']->getId() == $this->_tpl_vars['blogCategory']): ?> selected="selected" <?php endif; ?>>
	    <?php echo $this->_tpl_vars['category']->getName(); ?>

	   </option>
      <?php endforeach; endif; unset($_from); ?>
      </select>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogCategory','message' => $this->_tpl_vars['locale']->tr('error_invalid_blog_category'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
	

    <div class="field">
     <label for="blogMaxMainPageItems"><?php echo $this->_tpl_vars['locale']->tr('max_main_page_items'); ?>
</label>
     <span class="required">*</span>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('max_main_page_items_help'); ?>
</div>
     <input type="text" name="blogMaxMainPageItems" id="blogMaxMainPageItems" value="<?php echo $this->_tpl_vars['blogMaxMainPageItems']; ?>
"/>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogMaxMainPageItems','message' => $this->_tpl_vars['locale']->tr('error_invalid_number'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div class="field">
     <label for="blogMaxRecentItems"><?php echo $this->_tpl_vars['locale']->tr('max_recent_items'); ?>
</label>
     <span class="required">*</span>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('max_recent_items_help'); ?>
</div>
     <input type="text" name="blogMaxRecentItems" id="blogMaxRecentItems" value="<?php echo $this->_tpl_vars['blogMaxRecentItems']; ?>
" />
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogMaxRecentItems','message' => $this->_tpl_vars['locale']->tr('error_invalid_number'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <div class="field">
     <label for="blogTemplate"><?php echo $this->_tpl_vars['locale']->tr('template'); ?>
</label>
     <span class="required">*</span>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('blog_template_help'); ?>
</div>
    <?php $this->assign('blogTemplateSet', $this->_tpl_vars['blog']->getTemplateSet()); ?>
     <select name="blogTemplate" id="blogTemplate">
       <?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
        <option value="<?php echo $this->_tpl_vars['template']->getName(); ?>
"<?php if ($this->_tpl_vars['template']->getName() == $this->_tpl_vars['blogTemplateSet']->getName()): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['template']->getName(); ?>
</option>
       <?php endforeach; endif; unset($_from); ?>
      </select>
      <a href="javascript:openTemplateChooserWindow();"><?php echo $this->_tpl_vars['locale']->tr('choose'); ?>
...</a>
      <br/><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogTemplate','message' => $this->_tpl_vars['locale']->tr('error_incorrect_template'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
     </div>

     <div class="field">
      <label for="blogShowMoreEnabled"><?php echo $this->_tpl_vars['locale']->tr('use_read_more'); ?>
</label>
      <div class="formHelp">
	    <input class="checkbox" type="checkbox" value="1" name="blogShowMoreEnabled" id="blogShowMoreEnabled" <?php if ($this->_tpl_vars['blogShowMoreEnabled'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('use_read_more_help'); ?>

      </div> 
     </div>

     <div class="field">
      <label for="blogEnableHtmlArea"><?php echo $this->_tpl_vars['locale']->tr('enable_wysiwyg'); ?>
</label>
      <div class="formHelp">
	    <input class="checkbox" type="checkbox" id="blogEnableHtmlarea" name="blogEnableHtmlarea" value="1" <?php if ($this->_tpl_vars['blogEnableHtmlarea'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('enable_wysiwyg_help'); ?>

      </div>
     </div>
     
     <div class="field">
      <label for="blogEnablePullDownMenu"><?php echo $this->_tpl_vars['locale']->tr('enable_pull_down_menu'); ?>
</label>
      <div class="formHelp">
	    <input class="checkbox" type="checkbox" id="blogEnablePullDownMenu" name="blogEnablePullDownMenu" value="1" <?php if ($this->_tpl_vars['blogEnablePullDownMenu'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('enable_pull_down_menu_help'); ?>

      </div>
     </div>

     <!-- disabled for the time being -->
     <input class="radio" type="hidden" name="blogEnableAutosaveDrafts" value="0" />

     <div class="field">
      <label for="blogCommentsEnabled"><?php echo $this->_tpl_vars['locale']->tr('enable_comments'); ?>
</label>
      <div class="formHelp">
	    <input class="checkbox" type="checkbox" name="blogCommentsEnabled" id="blogCommentsEnabled" value="1" <?php if ($this->_tpl_vars['blogCommentsEnabled'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('enable_comments_help'); ?>

      </div>  
     </div>

     <!-- paged comments -->
    <div class="field">
     <label for="blogNumCommentsPerPage"><?php echo $this->_tpl_vars['locale']->tr('show_comments_max'); ?>
</label>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('show_comments_max_help'); ?>
</div>
     <input type="text" name="blogNumCommentsPerPage" id="blogNumCommentsPerPage" value="<?php echo $this->_tpl_vars['blogNumCommentsPerPage']; ?>
" />
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['admintemplatepath'])."/validate.template", 'smarty_include_vars' => array('field' => 'blogNumCommentsPerPage','message' => $this->_tpl_vars['locale']->tr('error_invalid_number'))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>     

     <div class="field">
      <label for="blogShowFuturePosts"><?php echo $this->_tpl_vars['locale']->tr('show_future_posts'); ?>
</label>
      <div class="formHelp">
        <input class="checkbox" type="checkbox" name="blogShowFuturePosts" id="blogShowFuturePosts" value="1" <?php if ($this->_tpl_vars['blogShowFuturePosts'] == true): ?> checked="checked" <?php endif; ?> />	  
	    <?php echo $this->_tpl_vars['locale']->tr('show_future_posts_help'); ?>

	  </div>
    </div>

     <div class="field">
      <label for="blogFirstDayOfWeek"><?php echo $this->_tpl_vars['locale']->tr('first_day_of_week_label'); ?>
</label>
      <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('first_day_of_week_help'); ?>
</div>
     <select name="blogFirstDayOfWeek" id="blogFirstDayOfWeek">
       <option value="0" <?php if ($this->_tpl_vars['blogFirstDayOfWeek'] == 0): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('Sunday'); ?>
</option>
       <option value="1" <?php if ($this->_tpl_vars['blogFirstDayOfWeek'] == 1): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('Monday'); ?>
</option>
      </select>
    </div>
	
     <div class="field">
      <label for="blogShowInSummary"><?php echo $this->_tpl_vars['locale']->tr('show_in_summary'); ?>
</label>
      <div class="formHelp">
        <input class="checkbox" type="checkbox" name="blogShowInSummary" id="blogShowInSummary" value="1" <?php if ($this->_tpl_vars['blogShowInSummary'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('show_in_summary_help'); ?>

	  </div>
    </div>
    
     <div class="field">
      <label for="blogSendNotification"><?php echo $this->_tpl_vars['locale']->tr('default_send_notification'); ?>
</label>
      <div class="formHelp">
        <input class="checkbox" type="checkbox" name="blogSendNotification" id="blogSendNotification" value="1" <?php if ($this->_tpl_vars['blogSendNotification'] == true): ?> checked="checked" <?php endif; ?> />
	    <?php echo $this->_tpl_vars['locale']->tr('send_notification_help'); ?>

	  </div>
    </div>

    <div class="field">
      <label for="blogArticlesOrder"><?php echo $this->_tpl_vars['locale']->tr('articles_order'); ?>
</label>
      <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('articles_order_help'); ?>
</div>
      <select name="blogArticlesOrder" id="blogArticlesOrder">
        <option value="2" <?php if ($this->_tpl_vars['blogArticlesOrder'] == 2): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('newest_first'); ?>
</option>	
        <option value="1" <?php if ($this->_tpl_vars['blogArticlesOrder'] == 1): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('oldest_first'); ?>
</option>
      </select>
    </div>

    <div class="field">
     <label for="blogCommentsOrder"><?php echo $this->_tpl_vars['locale']->tr('comments_order'); ?>
</label>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('comments_order_help'); ?>
</div>
     <select name="blogCommentsOrder" id="blogCommentsOrder">
       <option value="1" <?php if ($this->_tpl_vars['blogCommentsOrder'] == 1): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('oldest_first'); ?>
</option>
       <option value="2" <?php if ($this->_tpl_vars['blogCommentsOrder'] == 2): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('newest_first'); ?>
</option>
      </select>
    </div>

    <div class="field">
     <label for="blogCategoriesOrder"><?php echo $this->_tpl_vars['locale']->tr('categories_order'); ?>
</label>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('categories_order_help'); ?>
</div>
     <select name="blogCategoriesOrder" id="blogCategoriesOrder">
       <option value="1" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 1): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('most_recent_updated_first'); ?>
</option>	  
       <option value="2" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 2): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('oldest_first'); ?>
</option>
       <option value="3" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 3): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('newest_first'); ?>
</option>	  
       <option value="4" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 4): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('alphabetical_order'); ?>
</option>
       <option value="5" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 5): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('reverse_alphabetical_order'); ?>
</option>
       <option value="6" <?php if ($this->_tpl_vars['blogCategoriesOrder'] == 6): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('most_articles_first'); ?>
</option>
      </select>
    </div>

    <div class="field">
     <label for="blogLinkCategoriesOrder"><?php echo $this->_tpl_vars['locale']->tr('link_categories_order'); ?>
</label>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('link_categories_order_help'); ?>
</div>
     <select name="blogLinkCategoriesOrder" id="blogLinkCategoriesOrder">
       <option value="1" <?php if ($this->_tpl_vars['blogLinkCategoriesOrder'] == 1): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('alphabetical_order'); ?>
</option>
       <option value="2" <?php if ($this->_tpl_vars['blogLinkCategoriesOrder'] == 2): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('reverse_alphabetical_order'); ?>
</option>
       <option value="3" <?php if ($this->_tpl_vars['blogLinkCategoriesOrder'] == 3): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('most_links_first'); ?>
</option>
       <option value="4" <?php if ($this->_tpl_vars['blogLinkCategoriesOrder'] == 4): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('most_links_last'); ?>
</option>	   
       <option value="5" <?php if ($this->_tpl_vars['blogLinkCategoriesOrder'] == 5): ?> selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['locale']->tr('most_recent_updated_first'); ?>
</option>	  	   
      </select>
    </div>

    <div class="field">
     <label for="blogTimeOffset"><?php echo $this->_tpl_vars['locale']->tr('time_offset'); ?>
</label>
     <div class="formHelp"><?php echo $this->_tpl_vars['locale']->tr('time_offset_help'); ?>
</div>
      <?php $this->assign('timeNow', time()); ?>
      <select name="blogTimeOffset" id="blogTimeOffset">
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -20): ?> selected="selected"<?php endif; ?>
           value="-20">-20 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-20*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -19): ?> selected="selected"<?php endif; ?> 
           value="-19">-19 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-19*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -18): ?> selected="selected"<?php endif; ?> 
           value="-18">-18 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-18*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -17): ?> selected="selected"<?php endif; ?> 
           value="-17">-17 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-17*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -16): ?> selected="selected"<?php endif; ?> 
           value="-16">-16 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-16*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -15): ?> selected="selected"<?php endif; ?> 
           value="-15">-15 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-15*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -14): ?> selected="selected"<?php endif; ?> 
           value="-14">-14 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-14*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -13): ?> selected="selected"<?php endif; ?> 
           value="-13">-13 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-13*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -12): ?> selected="selected"<?php endif; ?> 
           value="-12">-12 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-12*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -11): ?> selected="selected"<?php endif; ?>
           value="-11">-11 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-11*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -10): ?> selected="selected"<?php endif; ?>
           value="-10">-10 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-10*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -9): ?> selected="selected"<?php endif; ?>
           value="-9">-9 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-9*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -8): ?> selected="selected"<?php endif; ?>
           value="-8">-8 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-8*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -7): ?> selected="selected"<?php endif; ?>
           value="-7">-7 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-7*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -6): ?> selected="selected"<?php endif; ?>
           value="-6">-6 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-6*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -5): ?> selected="selected"<?php endif; ?>
           value="-5">-5 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-5*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -4): ?> selected="selected"<?php endif; ?>
           value="-4">-4 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-4*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -3): ?> selected="selected"<?php endif; ?>
           value="-3">-3 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-3*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -2): ?> selected="selected"<?php endif; ?>
           value="-2">-2 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-2*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == -1): ?> selected="selected"<?php endif; ?>
           value="-1">-1 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']-1*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 0): ?> selected="selected"<?php endif; ?>
           value="0">0 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 1): ?> selected="selected"<?php endif; ?>
           value="1">+1 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+1*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 2): ?> selected="selected"<?php endif; ?>
           value="2">+2 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+2*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 3): ?> selected="selected"<?php endif; ?>
           value="3">+3 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+3*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 4): ?> selected="selected"<?php endif; ?>
           value="4">+4 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+4*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 5): ?> selected="selected"<?php endif; ?>
           value="5">+5 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+5*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 6): ?> selected="selected"<?php endif; ?>
           value="6">+6 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+6*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 7): ?> selected="selected"<?php endif; ?>
           value="7">+7 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+7*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 8): ?> selected="selected"<?php endif; ?>
           value="8">+8 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+8*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 9): ?> selected="selected"<?php endif; ?>
           value="9">+9 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+9*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 10): ?> selected="selected"<?php endif; ?>
           value="10">+10 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+10*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 11): ?> selected="selected"<?php endif; ?>
           value="11">+11 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+11*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 12): ?> selected="selected"<?php endif; ?>
           value="12">+12 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+12*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 13): ?> selected="selected"<?php endif; ?> 
           value="13">+13 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+13*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 14): ?> selected="selected"<?php endif; ?> 
           value="14">+14 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+14*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 15): ?> selected="selected"<?php endif; ?> 
           value="15">+15 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+15*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 16): ?> selected="selected"<?php endif; ?> 
           value="16">+16 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+16*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 17): ?> selected="selected"<?php endif; ?> 
           value="17">+17 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+17*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 18): ?> selected="selected"<?php endif; ?> 
           value="18">+18 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+18*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 19): ?> selected="selected"<?php endif; ?> 
           value="19">+19 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+19*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
       <option <?php if ($this->_tpl_vars['blogTimeOffset'] == 20): ?> selected="selected"<?php endif; ?> 
           value="20">+20 <?php echo $this->_tpl_vars['locale']->tr('hours'); ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['timeNow']+20*3600)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : smarty_modifier_date_format($_tmp, "%H:%M")); ?>
)
       </option>
      </select>
      	 </div>  
     
    </fieldset>
    <div class="buttons" id="buttons">
     <input type="reset" name="reset" value="<?php echo $this->_tpl_vars['locale']->tr('reset'); ?>
" />
     <input type="submit" name="Update" value="<?php echo $this->_tpl_vars['locale']->tr('update'); ?>
" />
     <input type="hidden" name="op" value="updateBlogSettings" />
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