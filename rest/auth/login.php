<?php

use Symfony\Component\HttpFoundation\Request;

class Rest_login {

    private $request;

    public function __construct()
    {
        $this->request = Request::createFromGlobals();
    }

    public function init()
    {
        add_action('wp_ajax_nopriv_logincallback', array($this, 'loginCallback'));
        add_action('wp_ajax_logincallback', array($this, 'loginCallback'));
    }

    public function loginCallback()
    {
        $email = $this->request->get('email');
        wp_send_json(["email" => $email]);
    }
}