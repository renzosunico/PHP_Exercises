<?php

class PaymentMethod
{
    const TYPE_CREDITCARD = 0;
    const TYPE_CASH = 1;
}

echo PaymentMethod::TYPE_CREDITCARD;
echo PaymentMethod::TYPE_CASH;