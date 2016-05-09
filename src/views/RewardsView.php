<?php
namespace Restaurant_WebApp\hw5\views;

require_once 'View.php';
require_once "elements/Element.php";
require_once "elements/HeaderElement.php";
class RewardsView extends View
{
   public function render($data)
   {
   	$header=new elements\HeaderElement();
    $header->render(null);
    ?>
    <!DOCTYPE html>
		<html>
		<head>
		</head>
		<body>
	    <form>
	  Email:
	  <input type="email" name="email"><br>
	  <select name="types">
	  <option value="Rewards Balance">Rewards Balance</option>
	  <option value="Rewards Coupon">Rewards Coupon</option>
	</select>
	<input type="submit" value="Go">
	</form>
</body>
</html>
<?php
   	}
   }