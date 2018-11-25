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
      <th scope="col">Client</th>
      <th scope="col">Commercial</th>
      <th scope="col">Modifier le projet</th>
      <th scope="col">Supprimer le supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php $maisons = App\Maison::all();
  foreach ($maisons as $maison) { ?>
    <tr>
      <td scope="row"><?=$maison->nom;?></td>
      <td>{!! link_to_route('showProjet', '', [$maison->id], ['class' => 'fas fa-fw fa-pen']) !!}</td>
      <td>{!! link_to_route('showProjet', '', [$maison->id], ['class' => 'fas fa-fw fa-pen']) !!}</td>
      <td>{!! link_to_route('showProjet', '', [$maison->id], ['class' => 'fas fa-fw fa-pen']) !!}</td>
      <td><a href="<?=url('/devis/1');?>"><i class="fas fa-fw fa-pen"></i></a></td>
      <td><a href="<?=url('/delete/1');?>"><i class="fas fa-fw fa-trash-alt"></i></a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
@endsection