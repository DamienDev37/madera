<?php

namespace App\Http\Controllers;

use App\Repositories\MaisonRepository;
use DB;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class MaisonController extends Controller
{

    protected $maisonRepository;

    protected $nbrPerPage = 32;

    public function __construct(MaisonRepository $maisonRepository)
    {
        $this->maisonRepository = $maisonRepository;
    }
    public function create()
    {
        $gammes = DB::table('gammes')->get();
        return view('maison.create', compact('gammes'));
    }

    public function store(Request $request)
    {
        $maison = $this->maisonRepository->store($request->all());

        return redirect('/maison/'.$maison->id);
    }

    public function show($id)
    {
        $gammes = DB::table('gammes')->get();
        $finitions = DB::table('finitions')->get();
        $couvertures = DB::table('couvertures')->get();
        $isolants = DB::table('isolants')->get();
        $parepluies = DB::table('parepluies')->get();
        $produits = DB::table('produits')->get();
        $maison = $this->maisonRepository->getById($id);
        $gamme = DB::table('gammes')->where('id', '=', $maison->idGamme)->first();
        return view('maison.show',  compact('maison','gammes','finitions','couvertures','isolants','parepluies','gamme','produits'));
    }

    public function edit($id)
    {
        $maison = $this->maisonRepository->getById($id);

        return view('maison.edit',  compact('maison'));
    }

    public function update(Request $request, $id)
    {
        $this->maisonRepository->update($id, $request->all());
        
        return redirect('/maison/'.$maison->id);
    }

    public function destroy($id)
    {
        $this->maisonRepository->destroy($id);

        return redirect()->back();
    }
}