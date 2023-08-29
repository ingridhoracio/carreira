<?php
class Candidatura {
    private $id;
    private $data;
    private $dataContratacao;
    private $dataEncerramento;
    private $dataEntrevista;
    private $requisitos;
    private $feedback;
    private $beneficios;
    private $salario;
    private $tipoLocalidade;
    private $experiencia;
    private $titulacao;
    private $disponibilidade;


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
	public function getDataContratacao() {
		return $this->dataContratacao;
	}
	
	/**
	 * @param mixed $dataContratacao 
	 * @return self
	 */
	public function setDataContratacao($dataContratacao): self {
		$this->dataContratacao = $dataContratacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataEncerramento() {
		return $this->dataEncerramento;
	}
	
	/**
	 * @param mixed $dataEncerramento 
	 * @return self
	 */
	public function setDataEncerramento($dataEncerramento): self {
		$this->dataEncerramento = $dataEncerramento;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDataEntrevista() {
		return $this->dataEntrevista;
	}
	
	/**
	 * @param mixed $dataEntrevista 
	 * @return self
	 */
	public function setDataEntrevista($dataEntrevista): self {
		$this->dataEntrevista = $dataEntrevista;
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
	public function getTipoLocalidade() {
		return $this->tipoLocalidade;
	}
	
	/**
	 * @param mixed $tipoLocalidade 
	 * @return self
	 */
	public function setTipoLocalidade($tipoLocalidade): self {
		$this->tipoLocalidade = $tipoLocalidade;
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