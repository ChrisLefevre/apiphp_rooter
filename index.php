<?php 
	
/* à supprimmer de la prod */ 
error_reporting(E_ALL);
ini_set("display_errors", 1);	
	
	
/* includes partagés dans toutes l'app */
include 'inc/db.php';	
include 'inc/class.php';	
include 'inc/functions.php';	
include 'inc/rooter.php';		
	
/* declare tes variables par defaut */

$page = 'index';
$response = [
	'code' => '0',
	'data' => []		
];

/* rootage */

/*   
	l'url se présente comme ceci : /page/action/value
	en interne : index.php?page=[page]&[action]=[value]		
	exemple : /read/maxim/10
*/

if (!empty($_GET['page'])) $page = htmlentities($_GET['page']);

$rooter = [
	'read' => 'pages/read.php',
	'save' => 'pages/save.php',
	'index' => 'pages/index.php',
];

/* j'affiche la réponse */
header("Content-Type: application/json;charset=utf-8"); 
if (file_exists($rooter[$page])) include ($rooter[$page]);
echo json_encode($response);
?>