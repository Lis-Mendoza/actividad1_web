<?php
class Usuarios_model extends CI_Model
{
	private $usuarios;
	public function __construct()
	{
		$this->usuarios[1]=array(
		'id'  => '1',
		'nombre'=> 'Pedro',
		'email' => 'pedro@algo.com',
		);
		$this->usuarios[2]=array(
		'id'  => '2',
		'nombre'=> 'Pepe',
		'email' => 'pepe@algo.com'
		);
	}

	public function get_usuario($elemento = FALSE)
	{
		if ($elemento > 0 && $elemento <= count($this->usuarios))
			return $this->usuarios[$elemento];
		return array();
	}

	public function get_usuarios()
	{
		return $this->usuarios;
	}
}
?>