<?php

namespace  Modules\PorteMonnaie\Entities;

use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Product;
use Bavix\Wallet\Interfaces\Customer;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements Product
{
    use HasWallet;
    
    public function canBuy(Customer $customer, int $quantity = 1, bool $force = false): bool
    {
        /**
         * If the service can be purchased once, then
         *  return !$customer->paid($this);
         */
        return true; 
    }

    public function getAmountProduct(Customer $customer)
    {
        return 100;
    }


    public function getMetaProduct(): ?array
    {
        return [ ];
    }

}