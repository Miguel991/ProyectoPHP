<?php  namespace Config;

	class Enrutador{

		public function run(Request $request){
			$controlador = $request->getControlador() . "Controller";
			$ruta = ROOT . "Controller" . DS . $controlador . ".php";
			$metodo = $request->getMetodo();
			if($metodo == "index.php"){
				$metodo = "index";
			}
			$argumento = $request->getArgumento();
			if(is_readable($ruta)){
				require_once $ruta;
				$mostrar = "Controller\\" . $controlador;
				$controlador = new $mostrar;
				if(!isset($argumento)){
					call_user_func(array($controlador,$metodo));
				}else{
					call_user_func_array(array($controlador,$metodo), $argumento);
				}

			}

		}




	}
?>