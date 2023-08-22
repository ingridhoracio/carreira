<?php
class Cargo {
    private $id;
    private $nome;
    private $salario;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
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
}