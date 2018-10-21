<?php
require_once ('Smarty/Smarty.class.php');

class MySmarty extends Smarty
{
    function MySmarty()
    {
        $this->template_dir = APP_REAL_PATH . "/templates/";
        $this->compile_dir = APP_REAL_PATH . "/templates/templates_c/";
        $this->plugins_dir[] = APP_REAL_PATH . "/templates//plugins/";
        $this->cache_dir = APP_REAL_PATH . "/templates/cache/";
    }
}
?>