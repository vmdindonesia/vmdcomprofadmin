<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout
{
    function content($view,$data = null)
    {
        $CI =&get_instance();
        $data["pages"] = $view;
        $CI->load->view("templates/content",$data);
    }
}
?>