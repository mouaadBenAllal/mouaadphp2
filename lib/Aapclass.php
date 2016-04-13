<?php 

class Aapclass {
	public $soortaap;





	function __CONSTRUCT($n) {

		$this->soortaap = $n;
	}
	
    /**
     * Gets the value of soortaap.
     *
     * @return mixed
     */
    public function getSoortaap()
    {
        return $this->soortaap;
    }

    /**
     * Sets the value of soortaap.
     *
     * @param mixed $soortaap the soortaap
     *
     * @return self
     */
    public function setSoortaap($soortaap)
    {
        $this->soortaap = $soortaap;

        return $this;
    }
}



?>


