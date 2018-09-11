<?php
namespace App;
/**
*
Clase Login para ingreso o salida del sistema
*
**/
class Login
{

	public function __construct($logger) {$this->logger = $logger;}

	function login( $request, $response, array $args ){
	//	$conn = new DBHandler();
	$alertas = ['success', 'warning', 'error'];
		$todo = $request->getParsedBody();

		$rand = rand(0,2);

		$rta['status'] = $alertas[$rand];
		$rta['message'] = 'Login: '.$alertas[$rand];
		return $response->withJson($rta);
	}

	function registro($request,$response,array $args){
		$todo = $request->getParsedBody();
		//register
		$rta = array(
			'status' => 'success',
			'message' => 'Registro correcto'
		);
		return $response->withJson($rta);
	}
}
?>
