
@include('layouts.header')

  <div class="container mb-4">
    <button onclick="goBack()" class="btn custom-green mb-3 mt-3">Back to Ingredients</button>
      <script>
      function goBack() {
        window.history.back();
      }
      </script>
    <h2 class="text-center mb-4 color-burgundy"><strong>{{ucwords($ingredient)}} Drinks</strong></h2> 
    <div class="d-flex flex-wrap">
    <?php
      $drinksArray = $drinksData->{'drinks'};

      foreach($drinksArray as $drink) {
        $photo = $drink->{'strDrinkThumb'};
        $drinkName = $drink->{'strDrink'};
        $id = $drink->{'idDrink'};
        echo '
        <div class="card m-2 bg-orange" style="width: 18rem;">
        <img class="card-img-top" src="'.$photo.'" alt="Card image cap">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">'.$drinkName.'</h5>
            <a href="/cocktailView/'.$id.'" class="btn btn-custom make-btn">Make this cocktail</a>
          </div>
        </div>
        ';
      }
    ?>
    </div>
  </div>

@include('layouts.footer')
