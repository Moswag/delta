<?php
/**
 * Created by PhpStorm.
 * User: moswa
 * Date: 8/2/2018
 * Time: 7:54 PM
 */

namespace App;


class Cart
{
   public $items=null;
   public $totalQty=0;
   public $totalPrice=0;

   public function __construct($oldCart)
   {
       if($oldCart){
           $this->items=$oldCart->items;
           $this->totalQty=$oldCart->totalQty;
           $this->totalPrice=$oldCart->totalPrice;

       }

   }
   public function add($item,$id,$quantity){
       $storedItem=['qty'=>$quantity, 'total_amount'=>$item->price, 'item'=>$item ];
       if($this->items){
           if(array_key_exists($id, $this->items)){
              $storedItem=$this->items[$id];
           }
       }
       $storedItem['qty']=$storedItem['qty']+$quantity;
       $storedItem['total_amount']=$item->price * $storedItem['qty'];
       $this->items[$id]=$storedItem;
       $this->totalQty++;
       $this->totalPrice+=$item->price * $storedItem['qty'];
   }




}