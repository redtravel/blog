<?php /* Smarty version 2.6.26, created on 2016-11-02 10:45:06
         compiled from summary/header.template */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'summary/header.template', 10, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
" lang="<?php echo $this->_tpl_vars['locale']->getLanguageId(); ?>
">
<head>
    <title><?php echo $this->_tpl_vars['serviceName']; ?>
</title>
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['locale']->getCharset(); ?>
" />
    <style type="text/css" media="screen">@import "styles/summary.css";</style>
    <meta name="description" content="<?php echo $this->_tpl_vars['serviceName']; ?>
" />
 	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['url']->getUrl("/imgs/favicon.ico"); ?>
" />
    <script type="text/javascript">
    var blogLocale = '<?php echo ((is_array($_tmp=$this->_tpl_vars['locale']->getCharset())) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
';
  	// base url where we can find the admin.php script
  	var plogBaseUrl = "<?php echo $this->_tpl_vars['baseurl']; ?>
";
	var plogSummaryBaseUrl = plogBaseUrl + "/summary.php";
	var plogBlogId = "0";
</script>
<script type="text/javascript" src="js/ui/default.js"></script>
<script type="text/javascript" src="js/ui/common.js"></script>
</head>
<body <?php if ($this->_tpl_vars['columns'] == 1): ?>class="column1"<?php else: ?>class="column3"<?php endif; ?>>
<div id="wrapper">
<div id="header">
</div>
<map name="linksmenu" id="linksmenu" title="Navigation">
    <div id="menubar">
        <div id="menu">
          <ul class="menuTop">
             <li class="menuOption"><a href="summary.php?op=Summary"><?php echo $this->_tpl_vars['locale']->tr('summary'); ?>
</a></li>
             <li class="menuOption"><a href="summary.php?op=Register&amp;start=1"><?php echo $this->_tpl_vars['locale']->tr('register'); ?>
</a></li>
             <li class="menuOption"><a href="summary.php?op=PostList"><?php echo $this->_tpl_vars['locale']->tr('posts'); ?>
</a></li>
             <li class="menuOption"><a href="summary.php?op=BlogList"><?php echo $this->_tpl_vars['locale']->tr('blogs'); ?>
</a></li>
             <li class="menuOption"><a href="summary.php?op=UserList"><?php echo $this->_tpl_vars['locale']->tr('users'); ?>
</a></li>
          </ul>
        </div>
    </div>
</map>
