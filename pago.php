<?php

$validCustomer = [
  'name' => "https://pay.conekta.com/link/090827a48dd9423eaf482c537d026ff6",
  'email' => "martinez21032003@gmail.com"
];
$customer = Customer::create($validCustomer);
echo $customer->livemode;
echo $customer->name;
echo $customer->email;
echo $customer->id;
echo $customer->object;
$validOrderWithCheckout = array(
  'line_items'=> array(
    array(
      'name'=> 'Box of Cohiba S1s',
      'description'=> 'Imported From Mex.',
      'unit_price'=> 120000,
      'quantity'=> 1,
      'sku'=> 'cohbs1',
      'category'=> 'food',
      'tags' => array('food', 'mexican food')
    )
  ),
  'checkout' => array(
    'allowed_payment_methods' => array("cash", "card", "bank_transfer"),
    'type' => 'HostedPayment',
    'success_url' => 'https://www.mysite.com/payment/confirmation',
    'failure_url' => 'https://www.mysite.com/payment/failure',
    'monthly_installments_enabled' => false,
    'monthly_installments_options' => array(3, 6, 9, 12),
    "redirection_time": 4 //Tiempo de Redirección al Success/Failure URL, umbrales de 4 a 120 seg.
  ),
  'customer_info' => array(
    'customer_id'   =>  'cus_2nHprwaWFn7QJ21Lj'
  ),
  'currency'    => 'mxn',
  'metadata'    => array('test' => 'extra info')
);
$order = Order::create($validOrderWithCheckout);
print_r((array) $order->checkout->allowed_payment_methods); // array("cash", "card", "bank_transfer")
print_r($order->checkout->monthly_installments_enabled); // true
print_r((array) $order->checkout->monthly_installments_options); // array(3, 6, 9, 12)
print_r($order->checkout->object); // 'checkout'
print_r($order->checkout->url); // 'https://pay.conektame.io/link/964b5bdfe557467d9e02469e89b48e19
print_r($order->checkout->type); // 'HostedPayment'
header("Location: {$order->checkout->}https://pay.conekta.com/link/090827a48dd9423eaf482c537d026ff6");
?>