<?php
class User_model extends CI_Model
{
	public $id;
	public $nome;
	
	public function __construct(){
		 parent::__construct();
	}
	public function inserir()
	{
		$dados = array("nome" => $this->nome);
		/*
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();
		$dados = array();*/
		$this->load->database();
		return $this->db->insert('user', $dados);
	}
	public function recuperar(){
		$this->load->database();
		$query = $this->db->get('user');
		return $query->result();
	}

    public function delete($id)
    {
    	$this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function recuperarUm($id){
    	$this->load->database();
        $this->db->where('id',$id);
        $query = $this->db->get('user');
        return $query->row();
    }
    public function update(){
    	$this->load->database();
        $this->db->set('nome', $this->nome);
        $this->db->where('id', $this->id);	
        
   		$this->db->update('user	');

    }
}