<?php
namespace Restaurant_WebApp\hw5\views;

require_once 'View.php';
require_once "elements/Element.php";
require_once "elements/HeaderElement.php";
class MenuView extends View
{
   public function render($data)
   {
   	$header=new elements\HeaderElement();
    $header->render(null);
   		?>
   		<!DOCTYPE html>
		<html>
		<head>
		<script type="text/javascript">
		function saveMenu() {
			var editElem = document.getElementById("edit");
			var userVersion = editElem.innerHTML;
			localStorage.userEdits = userVersion;
			document.getElementById("update").innerHTML="Menu saved!";
			}
// 			var editElem = document.getElementById("edit");
// editElem.contentEditable="false";
		</script>
		</head>
		<body>
		<div id="edit" contenteditable="true">
		Here is the elements original content
		</div>
		<input type="button" value="save" onclick="saveMenu()"/>
		<div id="update"> </div>
		</body>
		</html>
		<?php
 	}
 }