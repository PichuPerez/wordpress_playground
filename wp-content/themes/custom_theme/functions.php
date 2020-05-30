
<?php  
/* Este documento va a controlar la funciones con wordpress*/

function post_files(){
    //Esto carga un script o archivo de javascript los argumentos extra NULL describe si ese script depende de otro script, version, le dice a wordpress si lo carga despues del body (boolean)
    //wp_enqueue_script( 'nombre_de_script', get_theme_file_uri( 'path a algun archivo'), Null ,'1.0', true );

    //microtime() --> colocar esta funcion en la version del script para evitar cache

    // Esto es lo que carga una hoja de estilos a wordpress
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('post_main_styles', get_stylesheet_uri()); 

    //Para evitar cache en archivos de estilos
    //wp_enqueue_style('post_main_styles', get_stylesheet_uri(), NULL, microtime()); 
    }


//es una funcion de wordpress que recibe dos argumentos que permite darle instrucciones a wordpress, en este caso le decimos que cargue un archivo y posteriormente la funcion que queremos que ejecute.
add_action('wp_enqueue_scripts', 'post_files');

function features(){
    add_theme_support('title-tag');

    //Esto es para poder activar el menu en el dashoboard de wordpress y se conecta en page con wp_nav_menu()
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
}

add_action('after_setup_theme', 'features');
?>
