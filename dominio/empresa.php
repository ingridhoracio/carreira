<?php
class Empresa  {
    private $id;
    private $nome;
    private $geolocalizacao;
    private $cidadeIbge;
    private $telefone;


    
    

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
	public function getGeolocalizacao() {
		return $this->geolocalizacao;
	}
	
	/**
	 * @param mixed $geolocalizacao 
	 * @return self
	 */
	public function setGeolocalizacao($geolocalizacao): self {
		$this->geolocalizacao = $geolocalizacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidadeIbge() {
		return $this->cidadeIbge;
	}
	
	/**
	 * @param mixed $cidadeIbge 
	 * @return self
	 */
	public function setCidadeIbge($cidadeIbge): self {
		$this->cidadeIbge = $cidadeIbge;
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
}