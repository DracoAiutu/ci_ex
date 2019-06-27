<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
			$coisas['pagina'] = 'listar';
			$coisas['title'] = 'listar';

			$this->load->model('User_model');	
 			$coisas['usuarios'] = $this->User_model->recuperar();
             $this->load->view('list', $coisas);
	}
	public function salvar()
    {
    	$this->load->model('User_model');	
        
        $nome = $_GET['nome'];
  
       
        $this->User_model->nome = $nome;
      
        $insertar = $this->User_model->inserir();


        if ($insertar) {
        	$coisas['pagina'] = 'listagem de users';
        	$coisas['title'] = 'listagem de users';
            $coisas['usuarios'] = $this->User_model->recuperar();
            return $this->load->view('list', $coisas);
        } else {
            $coisas ['error'] = 'usuário não inserido na base de dados';
            return $this->load->view('test');
        }
    }
		public function deletar(){
            //$coisas ['pagina'] = 'Listagem de usuário';
            //$coisas ['title'] = 'listagem de usuário - gael';
            $this->load->model('User_model');
            $id = $this->uri->segment(3);
            $this->User_model->delete($id);
            redirect('index.php/usuario/index');
        }
        public function editar(){
	        $this->load->model('User_model');
	        $id = $this->uri->segment(3);
	        $usuario = $this->User_model->recuperarUm($id);
            $dados['title'] = "Edição de usuarios";
            $dados['pagina'] = "Edição de usuarios";
            $dados['usuarios'] = $this->User_model->recuperarUm($id);


	        return $this->load->view('edit', $dados);
        }
        public function criar(){
        	$this->load->view('test');

        }
         public function atualizar(){
            $this->load->model('User_model');
            $this->User_model->id = $this->uri->segment(3);
            $this->User_model->nome = $_POST['nome'];
           
            $this->User_model->update();
            redirect('index.php/usuario/index');
        }
}
