@extends('layout')

@section('title')
    Maisons du devis
@endsection

@section('content')
<div class="col-12">
	<a href="<?=url('/maison/create');?>" class="btn btn-success">Ajouter une maison</a>
</div>
<div class="col-12 table-responsive-sm">
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nb étages</th>
      <th scope="col">Longueur</th>
      <th scope="col">largeur</th>
      <th scope="col">Modifier la maison</th>
      <th scope="col">Supprimer la maison</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($maisons as $maison)
    <tr>
      <td scope="row">{!! $maison->id !!}</td>
      <td scope="row">{!! $maison->nbetages !!}</td>
      <td scope="row">{!! $maison->longueur !!}</td>
      <td scope="row">{!! $maison->largeur !!}</td>
      <td><a href="<?=url('/edit/'.$maison->id);?>"><i class="fas fa-fw fa-pen"></i></a></td>
      <td><a href="<?=url('/delete/'.$maison->id);?>"><i class="fas fa-fw fa-trash-alt"></i></a></td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
@endsection