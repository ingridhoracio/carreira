<?php
    class Cargo {
        private $salario;
        private $nome;
        private $id_cargo ;
        
    
	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}
	
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
	public function getId_cargo() {
		return $this->id_cargo;
	}
	
	/**
	 * @param mixed $id_cargo 
	 * @return self
	 */
	public function setId_cargo($id_cargo): self {
		$this->id_cargo = $id_cargo;
		return $this;
	}
}