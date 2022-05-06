<?php

namespace CP6\Controllers;

class CoreController{

    protected function redirect($page)
    {
        header('Location: '. $this->router->generate($page));
        exit;
    }


}