<?php

class Home extends Controller {
    public function index($name = 'World') {
        $this->view('home/index', ['name' => $name]);
    }
}
