<?php

use Timber\Timber;

class Shortcodes_login {

    public $context;

    public function __construct(){
        $this->context = Timber::get_context();
    }

    public function init(){
        add_shortcode('awe_login', array($this, 'loginTemplate'));
    }

    public function loginTemplate(){
        return Timber::compile('shortcodes/login.twig', array());
    }

}