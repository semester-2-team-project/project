<!DOCTYPE html>
<html lang="en" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Marketplace</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta content="width=device-width, initial-scale=1" name="viewport" />

  <link href= "assets/css/style.scss" rel="MarketplaceStylesheet"/>
  <link href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="MarketplaceStylesheet"/>
<!-- partial:index.partial.html -->
</head>

<body>

<!-- Header Bar -->
<header class="header">
	<div class="header-content">

		<!-- Header Logo -->
		<div class="header-logo">
			<h1 class="logo">Marketplace</h1>
		</div>

		<!-- Nav Menu -->
		<nav class="nav collapsible">
			<!-- <a aria-label="Brighton Hub" class="nav__brand" href="/"> -->
			  <!-- <img src="images/brighton_uni_logo@320px.png" alt="" /> -->
			<!-- </a> -->
			<!-- <svg class="icon icon--white nav__toggler"> -->
			  <!-- <use href="images/sprite.svg#menu"></use> -->
			<!-- </svg> -->
			<ul class="list nav__list collapsible__content">
			  <li class="nav__item">
				<a target="_self" href="index.html">Hub</a>
			  </li>
			  <li class="nav__item">
				<a class="active" target="_self" href="market.html">Shop</a>
			  </li>
			  <li class="nav__item">
				<a target="_self" href="chat.html">Chatroom</a>
			  </li>
			  <li class="nav__item">
				<a class="highlight" target="_self" href="login.html">Login</a>
			  </li>
			</ul>
		</nav>
    
	    <!-- Search Bar --> 
        <form class="search-container">
    		<input type="text" id="search-bar" placeholder="What can I help you with today?">
    		<a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  		</form>
	</div>
</header>

<main>

	<div class="responsive-container">
  
    
           <!--cart--> 
 <div id="app" class="container">
	<div class="Cartcontainer">
   <div class="text-right"><button class="btn btn-primary" data-toggle="modal" data-target="#cartModal">Cart ({{cartItems.length}})</button></div>
  
   <!-- Modal  
   <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">          
				<span aria-hidden="true">&times;</span></button>
               <h4 class="modal-title" id="myModalLabel">Cart</h4>
            </div>
            <div class="modal-body">
               <shopping-cart inline-template :items="cartItems">
                  <div>
                     <table class="table table-cart">
                        <tr v-for="(item, index) in items">
                           <td>{{item.title}}</td>
                           <td style="width:120px">QTY:
                              <input v-model="item.qty" class="form-control input-qty" type="number">
                           </td>
                           <td class="text-right">${{item.price | formatCurrency}}</td>
                           <td>
                              <button @click="removeItem(index)"><span class="glyphicon glyphicon-trash"></span></button>
                           </td>
                        </tr>
                        <tr v-show="items.length === 0">
                           <td colspan="4" class="text-center">Cart is empty</td>
                        </tr>
                        <tr v-show="items.length > 0">
                           <td></td>
                           <td class="text-right">Cart Total</td>
                           <td class="text-right">${{Total | formatCurrency}}</td>
                           <td></td>
                        </tr>
                     </table>
                  </div>
                  
               </shopping-cart>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
	</div>
	
	-->
	
	   <div class="productcontainer">
   
   </div>
</div>
</div>

        <!-- market  --> 
		<div class="grid">
      
			<div class="grid-column">
        
			<?php
            include 'userDb.php';

            $sql = "SELECT * FROM products;";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0){
            while ($record = mysqli_fetch_assoc($result)){
                echo '<img src="' . $record['image'] . '">';
                echo "<p>" . $record['title'] . "<br>";
                echo $record['price'] . "</p><br>";
                    }
            }
            else{
            echo "No products";
            }
            ?>
		
						
				
			</div>
		</div>
	</div>
</main>

<!-- Footer -------------------------------------------------------------------------- -->
<footer class="block block--dark footer">
	<div class="container grid footer__sections">
	  <section class="collapsible collapsible--expanded footer__section">
		<div class="collapsible__header">
		  <h2 class="collapsible__heading footer__heading">Social</h2>
		  <svg class="icon icon--white collapsible__chevron">
			<use href="images/sprite.svg#chevron"></use>
		  </svg>
		</div>
		<div class="collapsible__content">
		  <ul class="list">
			<li>
			  <a href="#" target="blank">
				<img
				  class="icon"
				  src="images/icons/facebook_color.svg"
				  alt="Facebook"
				/>
			  </a>
			</li>
			<li>
			  <a href="#" target="blank">
				<img
				  class="icon"
				  src="images/icons/twitter_color.svg"
				  alt="Twitter"
				/>
			  </a>
			</li>
			<li>
			  <a href="#" target="blank">
				<img
				  class="icon"
				  src="images/icons/instagram_color.svg"
				  alt="Instagram"
				/>
			  </a>
			</li>
			<li>
			  <a href="#" target="blank">
				<img
				  class="icon"
				  src="images/icons/youtube_color.svg"
				  alt="YouTube"
				/>
			  </a>
			</li>
		  </ul>
		</div>
	  </section>
	  <section class="collapsible footer__section">
		<div class="collapsible__header">
		  <h2 class="collapsible__heading footer__heading">Support</h2>
		  <svg class="icon icon--white collapsible__chevron">
			<use href="images/sprite.svg#chevron"></use>
		  </svg>
		</div>
		<div class="collapsible__content">
		  <ul class="list">
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">App</a></li>
		  </ul>
		</div>
	  </section>
	  <section class="collapsible footer__section">
		<div class="collapsible__header">
		  <h2 class="collapsible__heading footer__heading">Legal</h2>
		  <svg class="icon icon--white collapsible__chevron">
			<use href="images/sprite.svg#chevron"></use>
		  </svg>
		</div>
		<div class="collapsible__content">
		  <ul class="list">
			<li><a href="#">Privacy</a></li>
			<li><a href="#">Terms &amp; Conditions</a></li>
			<li><a href="#">FAQ</a></li>
		  </ul>
		</div>
	  </section>
	  <div class="footer__brand">
		<img
		  src="images/brighton_uni_logo@320px.png"
		  alt="Brighton Hub logo"
		/>
		<p class="footer__copyright">Copyright &copy; 2021 Brighton Hub</p>
	  </div>
	</div>
  </footer>

 <script src="js/script.babel"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>     
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>     
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>
</html>


