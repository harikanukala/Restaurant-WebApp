<?php
namespace Restaurant_WebApp\hw5\views;

require_once 'View.php';
require_once "elements/Element.php";
require_once "elements/HeaderElement.php";
class HomeView extends View
{
   public function render($data)
   {
   $header=new elements\HeaderElement();
    $header->render(null);
    ?>
    <div id="content">
      <div class="container">
         <div class="inside">
            <!-- box begin -->
            <div class="box alt">
               <div class="border-left">
               	<div class="border-right">
                  	<div class="inner">
                    <h2>Address</h2>
                    <br></b><strong>Our Mailing address</strong></b></br>
					<br>101 San Fernando</br>
					San jose, CA, 95112<br><a>999-999-9999</a></br>
					<p></p><br>
                  </div>
               </div>
            </div>
            <!-- box end -->
         </div>
      </div>
   </div>
   <?php
 	}
 }