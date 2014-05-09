<?php
/**
 * Created by PhpStorm.
 * User: designstudio_2
 * Date: 08/05/2014
 * Time: 14:07
 */

namespace app\controllers;


class DefaultController {
    public $page;

    public function __construct(){
        if(isset($_GET['page'])){
            $this->page = $_GET['page'];

        }else{
            $this->page = 'home';
        }
        switch($this->page){
            case 'home':
                $this->title = 'Welcome';
                $this->content = 'home';
                break;
            case 'about':
                $this->title = 'About us';
                $this->content = 'about';
                break;
            case 'services':
                $this->title = 'Services';
                $this->content = 'services';
                break;
            case 'contact':
                $this->title = 'Contact Us';
                $this->content = 'contact';
                break;
            default:
                $this->title = 'Welcome';
                $this->content = 'home';
                break;

        }

}


}

