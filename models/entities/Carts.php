<?php

namespace app\models\entities;
use app\controllers\Controller;
use app\models\DbModel;
use app\engine\Db;
use app\models\entities\DataEntity;

class Carts extends DataEntity
{
    protected $id_cart;
    protected $id_product;
    protected $id_user;
    protected $id_session;
    protected $quantity;
    public $properties = ['id_cart','id_product','id_user','id_session','quantity'];

    public function __construct($id_cart=null,$id_product = null, $id_user = null, $id_session = null, $quantity = null)
    {
        $this->id_cart = $id_cart;
        $this->id_product = $id_product;
        $this->id_user = $id_user;
        $this->id_session = $id_session;
        $this->quantity = $quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;

        if(!in_array($quantity, $this->changes)){

            $this->changes['quantity'] = $quantity;
//          var_dump($this->changes); die();
        }
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getId(){

    return $this->id_cart;
}
    public function getIdName(){

        return 'id_cart';
    }
    public function setId($value){

        $this->id_cart = $value;
    }
    public function getTableName(){

        return 'Carts';
    }
}