<?php

namespace App\Http\Controllers;

use App\Repositories\MaisonRepository;

use Illuminate\Http\Request;

class MaisonController extends Controller
{

    protected $maisonRepository;

    protected $nbrPerPage = 32;

    public function __construct(MaisonRepository $maisonRepository)
    {
        $this->maisonRepository = $maisonRepository;
    }

    public function index()
    {
        $maisons = $this->maisonRepository->getPaginate($this->nbrPerPage);
        
        $links = $maisons->render();

        return view('maison.index', compact('maisons', 'links'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(MaisonCreateRequest $request)
    {
        $maison = $this->maisonRepository->store($request->all());

        return redirect('maisons');
    }

    public function show($id)
    {
        $maison = $this->maisonRepository->getById($id);

        return view('show',  compact('maison'));
    }

    public function edit($id)
    {
        $maison = $this->maisonRepository->getById($id);

        return view('edit',  compact('maison'));
    }

    public function update(MaisonUpdateRequest $request, $id)
    {
        $this->setAdmin($request);

        $this->maisonRepository->update($id, $request->all());
        
        return redirect('maison')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    public function destroy($id)
    {
        $this->maisonRepository->destroy($id);

        return redirect()->back();
    }
}