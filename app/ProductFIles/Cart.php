<?php

namespace app;

class Cart{
    public $items;
    public $qty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart) {
            $this->$items = $oldCart->$items;
            $this->qty = $oldCart->$qty;
            $this->$totalPrice = $oldCart->$totalPrice;
        }
    }
    public function add($item,$id){
        $storedItem = ['qty' => 0,'price' => $item->price, 'item' => $item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem  = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price*$storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->$qty++;
        $this->$totalPrice += $items->price;
}
}