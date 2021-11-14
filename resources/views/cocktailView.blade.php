@extends('layout')
@section('content')
<?php
  $cockatilArray = $cocktail->{'drinks'}[0];
  $name = $cockatilArray->{'strDrink'};
  $instructions = $cockatilArray->{'strInstructions'};
  $category = $cockatilArray->{'strIBA'};
  $alcohol = $cockatilArray->{'strAlcoholic'};
  $glass = $cockatilArray->{'strGlass'};
  $photo = $cockatilArray->{'strDrinkThumb'}
?>

<div class="container mt-3">
<button onclick="goBack()" class="btn custom-green mb-3">Back to Cocktails</button>
<script>
function goBack() {
  window.history.back();
}
</script>
  
  <div class="card mb-3 cocktail-display " style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-4">
      <img id="cocktailImg" src={{$photo}} class="img-fluid rounded-start" alt="{{$name}}">
    </div>
    <div class="col-md-8">
      <div class="card-body text-center">
          <h2 class="text-center mt-2">{{$name}}</h2>
          <?php
            if($alcohol){
              echo '<div>Drink Type: '.$alcohol.'</div>';
            }
            if($category) {
              echo '<div>IBA Classification: '.$category.'</div>';
            }
          ?>
          <div class="row mt-4">
            <div class="col-md-6">
              <h4>Ingredients</h4>
              <ul>
                <?php
                  foreach($cockatilArray as $key => $item) {
                    if(str_contains($key,'strIngredient') && $item){
                      if(strlen($key)>14) {
                        $i = -2;
                      } else {
                        $i = -1;
                      }
                      $measure = $cockatilArray->{'strMeasure'.substr($key,$i)};
                      if($measure) {
                        echo '<li>'.$item.' - '.$measure.'</li>';
                      } else {
                        echo '<li>'.$item.'</li>';
                      }
                      
                    }
                  }
                ?>
              </ul>
            </div>
            <div class="col-md-6">
              <h4>Method</h4>
              <div>{{$instructions}}</div>
              <?php
              if($glass){
                echo '<div>Best served in a '.$glass.'</div>';
              }
              ?>
            </div>
          </div>
          
          
      </div>
    </div>
  </div>
</div>
</div>
@endsection