<?php
require_once 'Smarty/Smarty.class.php';

// Smarty Extension class
class UInterface extends Smarty
{
    function __construct() {
        global $configArray;
        parent::__construct();

        $local = $configArray['Site']['local'];

        $this->template_dir  = "$local/interface/templates";
        $this->compile_dir   = "$local/interface/compile";
        $this->cache_dir     = "$local/interface/cache";
        //$this->plugins_dir   = array('plugins', "$local/interface/plugins");
        $this->caching       = false;
        $this->debug         = true;
        $this->compile_check = true;
        
        unset($local);
        
        //$this->register_function('translate', 'translate');
        //$this->register_function('char', 'char');
        
        $this->assign('siteConfig', $configArray['Site']);
        $this->assign('fullPath', $_SERVER['REQUEST_URI']);
        $this->assign('supportEmail', $configArray['Site']['email']);
        
    }
    
    function setTemplate($tpl)
    {
        $this->assign('pageTemplate', $tpl);
    }
    function setPageTitle($title)
    {
        $this->assign('pageTitle', $title);
    }
}

function translate($params)
{
    global $translator;
    if (is_array($params)) {
        return $translator->translate($params['text']);
    } else {
        return $translator->translate($params);
    }
}

function char($params)
{
    extract($params);
    return chr($int);
}

?>
