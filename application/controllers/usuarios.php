<?php
//class Usuarios extends CI_Controller
//{
//	public function index()
//	{
//		//echo "Hola";
//		//die("linea 6 ok"); //para detener el codigo en una parte
//		$dato="hola";
//		$data['title'] = ucfirst($dato); // Capitaliza la primera letra
//		$data['principal'] = "Bienvenido";
//		$this->load->view('templates/encabezado', $data);
//		$this->load->view('usuarios/inicio', $data);
//		$this->load->view('templates/pie', $data);
//	}
//}
class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
	}


	public function index()
	{
		$dato="hola";
		$data['title'] = ucfirst($dato); // Capitaliza la primera letra
		$data['principal'] = "Bienvenido";
		$this->load->view('templates/encabezado', $data);
		$this->load->view('usuarios/inicio', $data);
		$this->load->view('templates/pie', $data);
	}

	//Si queremos listar un usuario en particular
	public function ver($numero=FALSE)
	{
		if ($numero===FALSE) {
			$data['usuarios'] = $this->usuarios_model->get_usuarios($numero);
			$data['title'] = "Todos";
			print_r($data);
			$this->load->view('templates/encabezado', $data);
			$this->load->view('usuarios/todos', $data);
			$this->load->view('templates/pie');
		} else {
			$data['usuario_item'] = $this->usuarios_model->get_usuario($numero);
			print_r($data);
			if (empty($data['usuario_item'])) {
				show_404();
			}
			$data['title'] = $data['usuario_item']['nombre'];
			print_r($data);
			$this->load->view('templates/encabezado', $data);
			$this->load->view('usuarios/uno', $data);
			$this->load->view('templates/pie');
		}
	}
}
?> 