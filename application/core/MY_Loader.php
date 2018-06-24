
<?php

class MY_Loader extends CI_Loader
{
    public function template($layout_name, $vars = array(), $return = FALSE)
    {
        if ($return) {
            $content  = $this->view('partials/header', $vars, $return);
            $content  = $this->view('partials/navbar', $vars, $return);
            $content .= $this->view($layout_name, $vars, $return);
            $content .= $this->view('partials/footer', $vars, $return);

            return $content;
        } else {
            $this->view('partials/header', $vars);
            $this->view('partials/navbar', $vars);
            $this->view($layout_name, $vars);
            $this->view('partials/footer', $vars);
        }
    }
}
