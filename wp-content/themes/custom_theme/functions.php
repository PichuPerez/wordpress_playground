
<?php  
/* Este documento va a controlar la funciones con wordpress*/

function post_files(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
        wp_enqueue_style('post_main_styles', get_stylesheet_uri()); 
    }


?>

<?php 
    //es una funcion de wordpress que recibe dos argumentos que permite darle instrucciones a wordpress, en este caso le decimos que cargue un archivo y posteriormente la funcion que queremos que ejecute.
    add_action('wp_enqueue_scripts', 'post_files');

?>

