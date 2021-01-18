<?php inclue('./includes/header.php'); 

$pageTitle = 'Full Catalog';

if(isset($_GET['cat'])){
    if ( $_GET['cat'] == 'books' ){
        $pageTitle = 'Books';    
    } else if ( $_GET['cat'] == 'movies' ){
        $pageTitle = 'Movies';   
    } else if ( $_GET['cat'] == 'music' ){
        $pageTitle = 'Music';    
    } 
}
 inclue('./includes/footer.php'); ?>

