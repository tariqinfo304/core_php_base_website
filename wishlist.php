<!DOCTYPE html>
<html lang="en">
	<!-- it will add product_list object -->
	<?php include "product_list.php" ?>
	<?php include "header.php" ?>
  <body class="goto-here">
		
    <?php include "nav.php" ?>
    <?php $page_name="Wishlist"; ?>
    <?php include "slider_header.php" ?>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Product List</th>
						        <th>&nbsp;</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?php

						    	foreach ($load_list as $row) {
						    		
						    		echo '<tr class="text-center">';
						    			echo '<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>';
						    			echo '<td class="image-prod"><div class="img" style="background-image:url(images/'. $row['img'] . ');"></div></td>';
						    			echo ' <td class="product-name">
						    					<h3>'. $row['title'].'</h3>							    <p>'. $row['discription'].'</p></td>';
						    			echo '<td class="price">$'. $row['price'].'</td>';

						    			echo '<td class="quantity">
							        	<div class="input-group mb-3">
						             	<input type="text" name="quantity" class="quantity form-control input-number" value="'. $row['quantity'] .'" min="1" max="100"></div></td>';

						             	echo '<td class="total">$'. ( $row['price'] * $row['quantity']  ) .'</td>';

						    		echo "</tr>";
						    	}
						    	?>
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include "footer.php "?>
  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>