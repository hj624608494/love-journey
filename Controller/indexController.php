<?php

class indexController extends BaseController{

    public function indexAction(){
        $this->display();
    }

    public function goodAction(){
        $this->display();
    }

    public function sliderAction(){
        $this->display();
    }

    public function waistAction(){
        $this->display();
    }

    public function loginAction(){
        $username = $this->post('username');
        $password = $this->post('password');

        if ($username == 111 && $password == 111) {
            $this->ret_success('success');
        }else{
            $this->ret_error('error');
        }
    }
}
