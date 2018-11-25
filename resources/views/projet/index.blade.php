@extends('layout')

@section('title')
    Tous les projets
@endsection

@section('content')
<div class="col-12">
	<a href="<?=url('/devis/create');?>" class="btn btn-success">Ajouter un projet</a>
</div>
<div class="col-12 table-responsive-sm">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nom du projet</th>
      <th scope="col">Client</th>
      <th scope="col">Commercial</th>
      <th scope="col">Modifier le projet</th>
      <th scope="col">Supprimer le supprimer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projets as $projet)
    <tr>
      <td scope="row"><?=$projet->nom;?></td>
      <td scope="row"><?=$projet->idClient;?></td>
      <td scope="row"><?=$projet->idCommercial;?></td>
      <td>{!! link_to_route('showprojet', '', [$projet->id], ['class' => 'fas fa-fw fa-pen']) !!}</td>
      <td>
      {!! Form::open(['method' => 'DELETE', 'route' => ['deleteprojet', $projet->id]]) !!}
        {!! Form::submit('Supprimer', ['class' => 'fas fa-fw fa-trash-alt', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
      {!! Form::close() !!}
    </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection