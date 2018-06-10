
<?php

class Page_loader extends CI_Loader
{
    public function template($layout_name, $vars = array(), $return = FALSE)
    {
        if ($return) {
            $content  = $this->view('layouts/header', $vars, $return);
            $content .= $this->view($layout_name, $vars, $return);
            $content .= $this->view('layouts/footer', $vars, $return);

            return $content;
        } else {
            $this->view('layouts/header', $vars);
            $this->view($layout_name, $vars);
            $this->view('layouts/footer', $vars);
        }
    }
}
