<?php

class Home extends Controller 
{
    public function index()
    {
        // echo 'home/index';
        $this->view('home/index');
    }
}