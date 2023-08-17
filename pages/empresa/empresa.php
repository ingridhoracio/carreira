<?php
    class Empresa {
        private $nome;
        private $geolocalizacao;
        private $cidadeibge;
        private $telefone;
        private $id_empresa;
    
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
	public function getCidadeibge() {
		return $this->cidadeibge;
	}
	
	/**
	 * @param mixed $cidadeibge 
	 * @return self
	 */
	public function setCidadeibge($cidadeibge): self {
		$this->cidadeibge = $cidadeibge;
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
	public function getId_empresa() {
		return $this->id_empresa;
	}
	
	/**
	 * @param mixed $id_empresa 
	 * @return self
	 */
	public function setId_empresa($id_empresa): self {
		$this->id_empresa = $id_empresa;
		return $this;
	}
}