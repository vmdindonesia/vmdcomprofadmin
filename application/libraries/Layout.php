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

    function sidemenu()
    {
        $CI =&get_instance();
        $sql="select * from web_admin_menu where is_parent = '0'";
        $query = $CI->db->query($sql);
        $ret='<ul class="sidebar-menu" data-widget="tree">';
        if ($query->num_rows()>0){
            foreach($query->result() as $row){
                $ret .='<li><a href="'.base_url().$row->url.'"><i class="fa '.$row->icon.'"></i>'.$row->nama_menu.'</a></li>';
            }
        }
        $ret .='</ul>';
        return $ret;
    }
}
?>