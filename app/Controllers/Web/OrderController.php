<?php 

require_once('app/Controllers/Web/WebController.php');
require_once('app/Models/OrderDetail.php');
require_once('app/Models/Order.php');
require_once('app/Models/Cart.php');
require_once('core/Auth.php');

class OrderController extends WebController
{
    public function create()
    {
        $cart = new Cart();
        $cartItems = $cart->getCartItems();
        $total = 0;
        foreach ($cartItems as $cartItem) 
        {
            $total += $cartItem['price'] * $cartItem['quantity'];
        }
        $order = new Order();
        
        // $_POST['order_id'] = "". $currentDate->format('YmdHis');
        
        $_POST['users_id'] = Auth::getUser('user')['users_id'];
        $_POST['subtotal'] = $total;
        
        $recentCreatedOrder = $order->create($_POST);

        
        
        $orderDetail = new OrderDetail();
        $data = [];
        foreach ($cartItems as $productId => $cartItem) 
        {
            $data['product_id'] = $productId;
            $data['order_id'] =$recentCreatedOrder['id'];
            
            $data['quantity'] = $cartItem['quantity'];
            $data['product_name'] = $cartItem['name'];
            $data['product_size']= $cartItem['size'];
            $data['total'] = $cartItem['price'] * $cartItem['quantity'];
            
            $orderDetail->create($data);
        }
        
        
       
        
        // return $this->view('checkout/index.php', ['cartItems' => $cartItems]);
        //return redirect('order/success');
        return $this->view('order/success.php', ['cartItems' => $cartItems]);
        // return $this->view('order/success.php');
    }
    
    public function success()
    {
        return $this->view('order/success.php');
    }
    public function backhome(){
        $cart = new Cart();
        $cartItems = $cart->getCartItems();
        $cart->clearCartSession();
        return $this->view('homepage/index.php');
    }
    public function createcheck()
    {
        $cart = new Cart();
        $cartItems = $cart->getCartItems();
        $total = 0;
        foreach ($cartItems as $cartItem) 
        {
            $total += $cartItem['price'] * $cartItem['quantity'];
        }
        $order = new Order();
        
        // $_POST['order_id'] = "". $currentDate->format('YmdHis');
        
        $_POST['users_id'] = Auth::getUser('user')['users_id'];
        $_POST['subtotal'] = $total-50000;
        
        $recentCreatedOrder = $order->create($_POST);

        
        
        $orderDetail = new OrderDetail();
        $data = [];
        foreach ($cartItems as $productId => $cartItem) 
        {
            $data['product_id'] = $productId;
            $data['order_id'] =$recentCreatedOrder['id'];
            
            $data['quantity'] = $cartItem['quantity'];
            $data['product_name'] = $cartItem['name'];
            $data['product_size']= $cartItem['size'];
            $data['total'] = $cartItem['price'] * $cartItem['quantity']-50000;
            
            $orderDetail->create($data);
        }
        return $this->view('order/successcheck.php', ['cartItems' => $cartItems]);
    }
}