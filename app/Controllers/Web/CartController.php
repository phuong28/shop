<?php
require_once('app/Controllers/Web/WebController.php');
require_once('app/Models/Cart.php');

class CartController extends WebController
{
    protected $cart;
    
    public function __construct()
    {
        $this->cart = new Cart();
    }
    
    public function index()
    {
        if ($this->middleware('Authenticated')) {
            $cartItems = $this->cart->getCartItems();
            return $this->view('cart/index.php', ['cartItems' => $cartItems]);
        } 
        
    }
    public function add()
    {
        if ($this->middleware('Authenticated')) {
            // print_r('123');die();
            $id = $_GET['product_id'];
            $this->cart->addCartItem($id);
            return redirect('cart/index');
        }
    }

    

    public function modify()
    {
        if (isset($_POST['update'])) {
            $this->update($_GET['id'], $_POST['quantity']);
        }

        if (isset($_POST['delete'])) {
            $this->delete($_GET['id']);
        }
    }

    public function update($id, $quantity)
    {
        $this->cart->updateCartItem($id, $quantity);
        return redirect('cart/index');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->cart->deleteCartItem($id);
        return redirect('cart/index');
    }
    public function check(){
        $cart = new Cart();
        $cartItems = $cart->getCartItems();
        $total = 0;
        foreach ($cartItems as $cartItem) 
        {
            $total += $cartItem['price'] * $cartItem['quantity'];
        }
        
        if($total>= 300000 && $_POST['code']=='UUDAI50K'){
            $total-=50000;
            return $this->view('cart/giam.php', ['cartItems' => $cartItems]);
        }
        else{
            return redirect('cart/index');
        }
    }
}

?>