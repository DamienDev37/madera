@extends('layout')

@section('title')
  Choix de la gamme et modules
@endsection

@section('content')
<input type="hidden" name="idChoiceGamme" value="0" />
<div class="col-md-12">
  {!! Form::model($maison, ['route' => ['maison.update', $maison->id], 'method' => 'put', 'class' => '']) !!}
  <div class="row">
    <div class="form-group col-md-6">
        <label for="idGamme">Gamme de la maison</label>
        <select class="form-control" id="idGamme" name="idGamme">
          <option value="" selected>Choisissez la gamme</option>
          <?php foreach ($gammes as $k => $v) { ?>
            <option <?php if($v->id==$maison->idGamme)echo'selected'; ?> value="<?=$v->id?>"><?=$v->nom;?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="idFinition">Finition</label>
        <select class="form-control" id="idFinition" name="idFinition">
          <option value="" selected>Choisissez la finition</option>
          <?php foreach ($finitions as $k => $v) { ?>
            <option <?php if($v->id==$gamme->idFinition)echo'selected'; ?> value="<?=$v->id?>"><?=$v->nom;?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="idCouverture">Couverture</label>
        <select class="form-control" id="idCouverture" name="idCouverture">
          <option value="" selected>Choisissez la couverture</option>
          <?php foreach ($couvertures as $k => $v) { ?>
            <option <?php if($v->id==$gamme->idCouverture)echo'selected'; ?> value="<?=$v->id?>"><?=$v->nom;?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="idIsolant">Isolant</label>
        <select class="form-control" id="idIsolant" name="idIsolant">
          <option value="" selected>Choisissez l'isolant</option>
          <?php foreach ($isolants as $k => $v) { ?>
            <option <?php if($v->id==$gamme->idIsolant)echo'selected'; ?> value="<?=$v->id?>"><?=$v->nom;?></option>
          <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="idParePluie">Pare-pluie</label>
        <select class="form-control" id="idParePluie" name="idParePluie">
          <option value="" selected>Choisissez le pare-pluie</option>
          <?php foreach ($parepluies as $k => $v) { ?>
            <option <?php if($v->id==$gamme->idParePluie)echo'selected'; ?> value="<?=$v->id?>"><?=$v->Nom;?></option>
          <?php } ?>
        </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h4>Sections</h4>
    </div>
    <div class="col-md-12">
      <div class="card-deck" name="wrapSectionProducts">
        <div class="card cardProduct my-3">
          <div class="card-body">
            <h5 class="card-title">Produit</h5>
              <select class="form-control" name="sectionProduits[]">
                <option value="" selected>Choisissez un produit</option>
                <?php foreach ($produits as $k => $v) { ?>
                  <option value="<?=$v->id?>"><?=$v->typeproduit;?></option>
                <?php } ?>
              </select>
              <label class="mt-3">Quantité</label>
              <input type="number" class="form-control" name="sectionQuantite[]" />
          </div>
        </div>
      </div>
      <div class="form-group col-md-12 mt-4">
        <a class="btn btn-success" name="addSectionProduct">Ajouter un produit</a>
      </div>  
    </div> 
    <div class="col-md-12">
      <h4>Montants</h4>
    </div>
    <div class="col-md-12">
      <div class="card-deck" name="wrapMontantProducts">
        <div class="card cardProduct my-3">
          <div class="card-body">
            <h5 class="card-title">Produit</h5>
              <select class="form-control" name="montantProduits[]">
                <option value="" selected>Choisissez un produit</option>
                <?php foreach ($produits as $k => $v) { ?>
                  <option value="<?=$v->id?>"><?=$v->typeproduit;?></option>
                <?php } ?>
              </select>
              <label class="mt-3">Quantité</label>
              <input type="number" class="form-control" name="montantQuantite[]" />
          </div>
        </div>
      </div>
      <div class="form-group col-md-12 mt-4">
        <a class="btn btn-success" name="addMontantProduct">Ajouter un produit</a>
      </div>  
    </div> 
    <div class="col-md-12">
      <h4>Remplissage entre deux montants</h4>
    </div>
    <div class="col-md-12">
      <div class="card-deck" name="wrapRempliProducts">
        <div class="card cardProduct my-3">
          <div class="card-body">
            <h5 class="card-title">Produit</h5>
              <select class="form-control" name="rempliProduits[]">
                <option value="" selected>Choisissez un produit</option>
                <?php foreach ($produits as $k => $v) { ?>
                  <option value="<?=$v->id?>"><?=$v->typeproduit;?></option>
                <?php } ?>
              </select>
              <label class="mt-3">Quantité</label>
              <input type="number" class="form-control" name="rempliQuantite[]" />
          </div>
        </div>
      </div>
      <div class="form-group col-md-12 mt-4">
        <a class="btn btn-success" name="addRempliProduct">Ajouter un produit</a>
      </div>  
    </div>
    <div class="form-group col-md-12">
      {!! Form::submit('Générer ma maison', ['class' => 'btn btn-success pull-right']) !!}
    </div>  
  </div>
  {!! Form::close() !!}

</div>
@endsection