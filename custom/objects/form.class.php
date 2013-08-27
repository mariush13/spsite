<?php

namespace custom\objects;

class form extends \engine\objects\form {
    
    public function __construct($core) {
        $this->core = $core;
        parent::__construct($core);
    }

    public function showAction() {
        parent::showAction();
        var_dump('custom form test');
    }    
}