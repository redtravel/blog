<?php /* Smarty version 2.6.26, created on 2016-11-02 10:33:35
         compiled from ./templates//silver/panel.template */ ?>

<div id="menu">
<ul>
    <li id="search"><?php echo $this->_tpl_vars['locale']->tr('search'); ?>

	   <form name="search_form" method="post"
	   	      action="<?php echo $this->_tpl_vars['url']->getIndexUrl(); ?>
">
	      <input type="text" name="searchTerms" value="" size="14" /><br/>
		  <input type="hidden" name="op" value="Search" />
		  <input type="hidden" name="blogId" value="<?php echo $this->_tpl_vars['blog']->getId(); ?>
"/>
   </form>
    </li>
<?php $this->assign('blogOwner', $this->_tpl_vars['blog']->getOwnerInfo()); ?>
<?php $this->assign('AboutMyself', $this->_tpl_vars['blogOwner']->getAboutMyself()); ?>
<?php if ($this->_tpl_vars['blogOwner']->hasPicture() && $this->_tpl_vars['AboutMyself']): ?>  
  	<li id="about_myself"><?php echo $this->_tpl_vars['locale']->tr('about_myself'); ?>

  	<ul>
  	<?php $this->assign('picture', $this->_tpl_vars['blogOwner']->getPicture()); ?>
  	<li><img id="UserPicture" src="<?php echo $this->_tpl_vars['picture']->getPreviewLink(); ?>
" alt="<?php echo $this->_tpl_vars['blogOwner']->getUsername(); ?>
" /></li>
  	<p><?php echo $this->_tpl_vars['AboutMyself']; ?>
</p>
  	</ul>
  	</li>
<?php endif; ?>
    <li id="wordpress"><?php echo $this->_tpl_vars['locale']->tr('menu'); ?>

    <ul>
     <li><a href="<?php echo $this->_tpl_vars['url']->albumLink(); ?>
"><?php echo $this->_tpl_vars['locale']->tr('albums'); ?>
</a></li>
    </ul> 
    </li>

 <li id="categories">
  <?php echo $this->_tpl_vars['locale']->tr('categories'); ?>

  <ul>
   <?php $_from = $this->_tpl_vars['articlecategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['articleCategory']):
?>
    <li><a href="<?php echo $this->_tpl_vars['url']->categoryLink($this->_tpl_vars['articleCategory']); ?>
"><?php echo $this->_tpl_vars['articleCategory']->getName(); ?>
 [<?php echo $this->_tpl_vars['articleCategory']->getNumArticles(); ?>
]</a></li>
   <?php endforeach; endif; unset($_from); ?>
   </ul>
 </li>
  
 <li id="archives">
  <?php echo $this->_tpl_vars['locale']->tr('archives'); ?>

  <ul>
  <?php $_from = $this->_tpl_vars['archives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['archivelink']):
?>
   <li><a href="<?php echo $this->_tpl_vars['archivelink']->getUrl(); ?>
"><?php echo $this->_tpl_vars['archivelink']->getName(); ?>
</a></li>
  <?php endforeach; endif; unset($_from); ?>
  </ul>
  </li>
  <li id="calendar">
	<?php echo $this->_tpl_vars['calendar']; ?>

  </li>

    <li id="meta">
    Meta
    <ul>
     <li><a title="Link to the RSS 0.90 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss090'); ?>
">RSS 0.90</a></li>
     <li><a title="Link to the RSS 1.0 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss10'); ?>
">RSS 1.0</a></li>
     <li><a title="Link to the RSS 2.0 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('rss20'); ?>
">RSS 2.0</a></li>
     <li><a title="Link to the Atom 0.3 feed." href="<?php echo $this->_tpl_vars['url']->rssLink('atom'); ?>
">Atom 0.3</a></li>
     <li><a href="http://validator.w3.org/check/referer" title="Valid XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
     
    </ul> 
    </li>

  <li id="style"> 
  <?php echo $this->_tpl_vars['locale']->tr('links'); ?>

  <ul>
   <?php $_from = $this->_tpl_vars['mylinkscategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['linkcategory']):
?>
     <li><b><?php echo $this->_tpl_vars['linkcategory']->getName(); ?>
</b>
     <ul>
      <?php $_from = $this->_tpl_vars['linkcategory']->getLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
       <li><a href="<?php echo $this->_tpl_vars['link']->getUrl(); ?>
" title="<?php echo $this->_tpl_vars['link']->getDescription(); ?>
"><?php echo $this->_tpl_vars['link']->getName(); ?>
</a></li>
      <?php endforeach; endif; unset($_from); ?>
     </ul>
    </li>
   <?php endforeach; endif; unset($_from); ?>  
   </ul>
    </li>
</ul> 
</div>