<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class HulkTemplate{

    function exec() {
        $CI = & get_instance();
        $output = $CI->output->get_output();
        if (isset($CI->layout) && !preg_match('/(.+).php$/', $CI->layout)) {
            $CI->layout .= '.php';
        } else {
            $CI->layout = 'template.php';
        }
        $layout = BASEPATH . '../application/views/' . $CI->layout;
        if ($CI->layout !== "template.php" && !file_exists($layout)) {
            show_error('Voce especificou um layout (' . $CI->layout . ') inexistente.');
        }
        if (file_exists($layout)) {
            $layout = $CI->load->file($layout, true);
            # CONTENT
            $view = str_replace("{content_for_layout}", $output, $layout);
            # TITLE
            if (!empty($CI->title))
                $view = str_replace("{title}", $CI->title, $view);
            else
                $view = str_replace("{title}", '', $view);
        }
        else {
            $view = $output;
        }
        echo $view;
    }
}
