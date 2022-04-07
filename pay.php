<!DOCTYPE html>
<html>
	<head>
		<title>Payment</title>
	</head>
	<body>

		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>


		<!-- Add-to-Cart Option Functionality -->
		<script src="js/minicart.js"></script>
		<script>
			paypal.minicart.render();

			paypal.minicart.cart.on('checkout', function (evt) {
				var items = this.items(),
				len = items.length,
				total = 0,
				xx = '',
				i;

				for (i = 0; i < len; i++) {
					t = items[i].get('quantity'); //number of items
					amt = t*items[i].get('amount') - t; //final price -- reduce discount
					xx += items[i].get('item_name')+" "+ t +" "+ amt +"\n";

					//document.write(items[i].get('item_name')+" " + t + " " + amt + "<br>");
				}
				/*document.getElementById("demo").innerHTML = xx ;*/
				document.write(xx);
			});
		</script>

		<?php 
			echo "<script>document.writeln(xx);</script>";
		?>
	</body>
</html>