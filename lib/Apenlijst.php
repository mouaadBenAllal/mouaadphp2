<?php

class Aaplijst {

	private $aaplijst= array();


	public function voegAapToe($aap) {
		$this->aaplijst[] = $aap;

	}


    /**
     * Gets the value of aaplijst.
     *
     * @return mixed
     */
    public function getAaplijst()
    {
        return $this->aaplijst;
    }
}


?>