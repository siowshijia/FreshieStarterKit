<?php

class MY_Loader extends CI_Loader
{
    public function template($layout_name, $vars = array())
    {
        $this->view('partials/header', $vars);
        $this->view('partials/navbar', $vars);
        $this->view($layout_name, $vars);
        $this->view('partials/footer', $vars);
    }
}
