<?php
    class Empresa {
        private $nome;
        private $email;
        private $telefone;
        private $id_recrutador;
    
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getId_recrutador() {
		return $this->id_recrutador;
	}
	
	/**
	 * @param mixed $id_recrutador 
	 * @return self
	 */
	public function setId_recrutador($id_recrutador): self {
		$this->id_recrutador = $id_recrutador;
		return $this;
	}
}

