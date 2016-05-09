<?php
namespace Restaurant_WebApp\hw5\views\elements;

class HeaderElement extends Element{

	public function render($data)
	{
		?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <script type="text/javascript">
  function menuView(){
    
  }
    </script>
<title>Restaurant</title>
</head>
	
<body id="page1">

   <!-- header -->
   <div id="header">
      <div class="container">
         <ul class="nav">
            <li><a href="index.php" class="first current">Home</a></li>          
			<li><a href="?page=Menu" id="menu">Menu</a></li>
			<li><a href="?page=Rewards">Rewards</a></li>
		 <li><a href="">Site Map</a></li>       
         </ul>
      </div>
   </div>
  	
   <!-- content -->
        <?php
	}
}