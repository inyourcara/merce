<?php require_once("../resources/config.php"); ?>
      <?php require_once("../resources/functions.php") ?>
       <?php require_once("../resources/cart.php") ?>
      <br><br>
     
    <?php include(TEMPLATE_FRONT. DS . "header.php") ?>
     
    <?php 
     
    if(isset($_GET['tx'])){  
     
    $amount = $_GET['amt']; //amt cc tx st sunt ceea ce vine de la PayPal --> GET request. cand se face plata
    $currency = $_GET['cc'];
    $transaction = $_GET['tx']; 
    $status = $_GET['st']; //status
    //informatia asta se insereaza in baza de date, in tabelul COMENZI
     
     
    $query = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status) VALUES ('$transaction', '$amount', '$currency', '$status')");
    //"comenzi" = "orders" in romanian
     
    confirm($query);
    session_destroy();
     
    } else{
        redirect("index.php");
    }
     
    ?>
     
        <!-- Page Content -->
        <div class="container">
     
        <h1 class="text-center">Multumim!</h1> //"Multumim" = "Thank you" in romanian
     
        </div>
            <!-- /container -->
         
        <?php include(TEMPLATE_FRONT. DS . "footer.php") ?>
     
     