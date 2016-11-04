<?php /* Smarty version 2.6.26, created on 2016-11-02 10:12:31
         compiled from admin/xml/response.template */ ?>
<?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

<response>
 <method><?php echo $this->_tpl_vars['method']; ?>
</method>
 <success><?php echo $this->_tpl_vars['success']; ?>
</success>
 <message><![CDATA[<?php echo $this->_tpl_vars['message']; ?>
]]></message>
 <result><?php echo $this->_tpl_vars['result']; ?>
</result>
</response>