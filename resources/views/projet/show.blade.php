@extends('layout')

@section('title')
    Maisons du projet
@endsection

@section('content')
<div class="col-12">
    {!! link_to_route('maison.create', 'Ajouter une maison', [], ['class' => 'btn btn-success']) !!}
</div>
<div class="col-12 table-responsive-sm">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nb étages</th>
      <th scope="col">Longueur</th>
      <th scope="col">Largeur</th>
      <th scope="col">Voir le devis</th>
      <th scope="col">Plan de coupe</th>
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
      <td>{!! link_to_route('pdf.show', '', [$maison->id], ['class' => 'fas fa-fw fa-eye']) !!}</td>
      <td><a href="<?=url('plancoupe');?>"><i class="fas fa-fw fa-eye"></i></a></td>
      <td>{!! link_to_route('maison.show', '', [$maison->id], ['class' => 'fas fa-fw fa-pen']) !!}</td>
      <td>
      {!! Form::open(['method' => 'DELETE', 'route' => ['maison.destroy', $maison->id]]) !!}
        {!! Form::submit('Supprimer', ['class' => '', 'onclick' => 'return confirm(\'Vraiment supprimer cette maison ?\')']) !!}
      {!! Form::close() !!}
    </td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>
@endsection