<?php

namespace App\Repositories;

use App\Maison;

class MaisonRepository
{

    protected $maison;

    public function __construct(Maison $maison)
	{
		$this->maison = $maison;
	}

	private function save(Maison $maison, Array $inputs)
	{
        $maison->idClient = 1;
        $maison->idProjet = 1;
        $maison->products = "1,2,3,4,5,6";
        $maison->total = 1;
        $maison->save();
	}

	public function getPaginate($n)
	{
		return $this->maison->paginate($n);
	}

	public function store(Array $inputs)
	{
		$maison = new $this->maison;		

		$this->save($maison, $inputs);

		return $maison;
	}

	public function getById($id)
	{
		return $this->maison->findOrFail($id);
	}

	public function update($id, Array $inputs)
	{
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}