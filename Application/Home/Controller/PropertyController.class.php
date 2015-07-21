<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class PropertyController extends Controller {
  public function moneyall(){
    $this->display('Property/moneyall');
  }
  public function withdraw(){
    $this->display('Property/withdraw');
  }  
  public function asset_income(){
    $this->display('Property/asset_income');
  }
}