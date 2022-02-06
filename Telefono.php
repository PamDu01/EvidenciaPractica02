<?php
class Telfono {
	public $marca;
	public $modelo;
	protected $alambrico = true;
	protected $comunicacion;

	public function _contruct ($marca, $modelo) {
		this ->marca = $marca;
		this ->modelo = $modelo;
		this ->cominicacion = ($this -> alambrico) ? 'Alambrica' : 'Inalambrica';
}

	public function llamar() {
		return  print('<p> Riiiiiiiiiiiiiiiiiing Riiiiiing !!!!!!!!!!!!</p>');
}

	public function mas_info(){
		return print ('<ul>
			<li> Marca <b>'. $this -> marca . '</b></li>
			<li> Modelo <b>'. $this -> modelo . '</b></li>
			<li> Comunicacion <b>'. $this -> comunicacion . '</b></li>
			<ul>';
	}
}

class Celular extends Telefono {
	protected $alambrico = false;

	public function __construct($marca, $modelo){
		parent :: __construct($marca, $modelo);
	}
	}
}

final class SmarthPhone extends Celular{
	public $alambrico = false:
	public $internet = true;

	public function_construct($marca,$modelo){
		parent:: construct($modelo, $marca);
	}

	public function mas_info(){
	return print('<ul>
			<li> Marca <b>'. $this -> marca. '</b></li>
			<li> Modelo <b>'. $this -> modelo. '</b></li>
			<li> Comunicacion <b>'. $this -> comunicacion. '</b></li>
			<li> Dispositivo con Acceso a Internet</li>
		</ul<');
}

}


echo '<h1> Evolucion del Telefono</h1>';

echo '<h2> Telefono:</h2>';
$tel_casa= new Telefono('Panasonic', 'KX-TS550');
$tel_casa->llamar();
$tel_casa->mas_info();

echo '<h2>Celular:</h2>';
$mi_cel = new Celular ('NOkia', '5120');
$mi_cel-> llamar();
$mi_cel-> mas_info();

echo '<h2>SmarthPhone:</h2>';
$mi_sp = new SmarthPhone ('Motorola', 'G3');
$mi_sp-> llamar();
$mi_sp-> mas_info();



