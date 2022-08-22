<?php

/**
 * Plugin Name:       Plugin de teste
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       plugin criado e alterado, mas eu fiz na semana passada e não salvei
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Alexandre e Victor Santos

 * Author URI:        https://author.example.com/
 *
 */

function teste(){
	return file_get_contents(plugins_url().'/teste/busca.php');
}


add_shortcode("buscacep","teste");
