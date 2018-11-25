<?php

namespace App\Repositories;

use App\Devis;

class DevisRepository implements DevisRepositoryInterface
{

    protected $devis;

	public function __construct(devis $devis)
	{
		$this->devis = $devis;
	}

	public function save($devis)
	{
		$this->devis = new Devis();
        $this->devis->idClient = 1;
        $this->devis->idProjet = 1;
        $this->devis->products = "1,2,3,4,5,6";
        $this->devis->total = 1;
        $this->devis->save();
	}

}