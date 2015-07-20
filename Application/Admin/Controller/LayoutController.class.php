<?php
namespace Admin\Controller;
use Think\Controller;
class LayoutController extends Controller {
    public function layouts(){
        $this->display('Layout/layouts');
    }

}