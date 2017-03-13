<?php namespace Config;

		class Autoload{

			public static function run(){
				sql_autoload_register(function ($class){
					$ruta = str_replace("\\","/","$class") . ".php";
					print $ruta;
				});


			}



		}


?>