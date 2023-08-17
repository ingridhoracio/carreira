<?php
    class Empresa {
        private $id_candidatura;
        private $data;
        private $data_contratacao;
        private $data_entrevista;
        private $data_encerramento;
        private $requisitos;
        private $feedback;
        private $beneficios;
        private $salario;
        private $tipo_localidade;
        private $experiencia;
        private $titulacao;
        private $disponibilidade;
    
	/**
	 * @return mixed
	 */
	public function getId_candidatura() {
		return $this->id_candidatura;
	}
	
	/**
	 * @param mixed $id_candidatura 
	 * @return self
	 */
	public function setId_candidatura($id_candidatura): self {
		$this->id_candidatura = $id_candidatura;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}
	
	/**
	 * @param mixed $data 
	 * @return self
	 */
	public function setData($data): self {
		$this->data = $data;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getData_contratacao() {
		return $this->data_contratacao;
	}
	
	/**
	 * @param mixed $data_contratacao 
	 * @return self
	 */
	public function setData_contratacao($data_contratacao): self {
		$this->data_contratacao = $data_contratacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getData_entrevista() {
		return $this->data_entrevista;
	}
	
	/**
	 * @param mixed $data_entrevista 
	 * @return self
	 */
	public function setData_entrevista($data_entrevista): self {
		$this->data_entrevista = $data_entrevista;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getData_encerramento() {
		return $this->data_encerramento;
	}
	
	/**
	 * @param mixed $data_encerramento 
	 * @return self
	 */
	public function setData_encerramento($data_encerramento): self {
		$this->data_encerramento = $data_encerramento;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getRequisitos() {
		return $this->requisitos;
	}
	
	/**
	 * @param mixed $requisitos 
	 * @return self
	 */
	public function setRequisitos($requisitos): self {
		$this->requisitos = $requisitos;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getFeedback() {
		return $this->feedback;
	}
	
	/**
	 * @param mixed $feedback 
	 * @return self
	 */
	public function setFeedback($feedback): self {
		$this->feedback = $feedback;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getBeneficios() {
		return $this->beneficios;
	}
	
	/**
	 * @param mixed $beneficios 
	 * @return self
	 */
	public function setBeneficios($beneficios): self {
		$this->beneficios = $beneficios;
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
	
	/**
	 * @return mixed
	 */
	public function getTipo_localidade() {
		return $this->tipo_localidade;
	}
	
	/**
	 * @param mixed $tipo_localidade 
	 * @return self
	 */
	public function setTipo_localidade($tipo_localidade): self {
		$this->tipo_localidade = $tipo_localidade;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getExperiencia() {
		return $this->experiencia;
	}
	
	/**
	 * @param mixed $experiencia 
	 * @return self
	 */
	public function setExperiencia($experiencia): self {
		$this->experiencia = $experiencia;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTitulacao() {
		return $this->titulacao;
	}
	
	/**
	 * @param mixed $titulacao 
	 * @return self
	 */
	public function setTitulacao($titulacao): self {
		$this->titulacao = $titulacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDisponibilidade() {
		return $this->disponibilidade;
	}
	
	/**
	 * @param mixed $disponibilidade 
	 * @return self
	 */
	public function setDisponibilidade($disponibilidade): self {
		$this->disponibilidade = $disponibilidade;
		return $this;
	}
}
