<?php

class About extends Controller
{
    // public function index($name = 'Suryaman', $job = 'Programmer', $age = '26'){
    //     echo "Hallo..., my name $name, i'm a $job, $age years old";
    // }

    public function index($name = 'Suryaman', $job = 'Programmer', $age = '26')
    {
        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $this->view('about/index', $data);
    }

    public function page()
    {
        $this->view('about/page');
    }
}