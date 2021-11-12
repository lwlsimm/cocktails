
  @include('layouts.header')

  <div class="container">
  <h2 class="text-center mt-5 color-burgundy">Step 1</h2>
  <h6 class="text-center">Type a cocktail ingredient below and click 'Search' to see all the matching ingredients...</h6>

  <div class="d-flex justify-content-center">
  <form class="input-group" method="GET" action="{{ url('/ingredient-search') }}" id="search-bar">
    
    <input type="text" name="search-term" class="form-control" placeholder="Type ingredient here...">
      <span class="input-group-btn">
        <button class="btn btn-search custom-green" type="submit" id="search-btn"><i class="fa fa-search fa-fw"></i> Search</button>
      </span>
  </form>
  </div>

  <h2 class="text-center mt-5 color-burgundy">Step 2</h2>
  <h6 class="text-center">Click one of the ingredients below to show all the cocktails that you can make...</h6>
  <div class="ingredient-display">
    
  </div>
    
    <div class="d-flex justify-content-center">
    <div id="button-container">
      <?php 
        if(isset($ingredients) && isset($_GET['search-term'])) {
          $searchTerm = $_GET['search-term'];
          $ingredientArray = $ingredients->{'drinks'};
          $noResults = true;
          foreach($ingredientArray as $ingredient) {
            $name = ucwords($ingredient->{"strIngredient1"});
            if(strpos(strtolower($name),strtolower($searchTerm)) !== false) {
              $noResults = false;
              echo '
                <a href="/cocktail-search/'.$name.'">
                <button class="btn bg-dark-orange m-2 cocktail-search" id="'.$name.'">'.$name.'</button></a>
              ';
            }
          }
          if($noResults) {
            echo '<h5 class="text-center text-danger">It looks like there were no valid matches for "'.$searchTerm.'". Please try again.</h5>';
          }
        }
        if(isset($my_drink)) {
          echo $my_drink;
        }
      ?>
    </div>
    </div>
  </div>

@include('layouts.footer')
