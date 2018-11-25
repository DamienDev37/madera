<?php

namespace App\Http\Controllers;

use DB;
use App\Repositories\ProjetRepository;
use App\Repositories\MaisonRepository;

use Illuminate\Http\Request;

class ProjetController extends Controller
{
    protected $projetRepository;
    protected $maisonRepository;

    protected $nbrPerPage = 32;

    public function __construct(ProjetRepository $projetRepository,MaisonRepository $maisonRepository)
    {
        $this->projetRepository = $projetRepository;
        $this->maisonRepository = $maisonRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = $this->projetRepository->getPaginate($this->nbrPerPage);
        $commerciaux = DB::table('commerciaux')
        ->join('projets', 'projets.idCommercial', '=', 'commerciaux.id')
        ->get();
        $links = $projets->render();

        return view('projet.index', compact('projets', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projet = new Projet();
        $projet->idClient = $request['idClient'];
        $projet->gamme = $request['gamme'];
        $projet->idProjet = 1;
        $projet->products = "1,2,3,4,5,6";
        $projet->total = 562;
        $projet->save();

        return redirect('projet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $maisons = DB::table('maison')->where('idProjet', '=', $id)->get();
        return view('maison.index',compact('maisons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
