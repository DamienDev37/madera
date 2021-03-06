<?php

namespace App\Http\Controllers;

use DB;
use App\Repositories\ProjetRepository;
use App\Repositories\MaisonRepository;
use Illuminate\Support\Facades\Redirect;

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
        $commerciaux = DB::table('commerciaux')->get();
        $clients = DB::table('clients')->get();
        return view('projet.create', compact('commerciaux', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projet = $this->projetRepository->store($request->all());

        return redirect('/projet')->withOk("L'utilisateur " . $projet->nom . " a été créé.");
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
        return view('projet.show',compact('maisons'));
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
        $this->projetRepository->update($id, $request->all());
        
        return redirect('projet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->projetRepository->destroy($id);

        return redirect()->back();
    }
}
