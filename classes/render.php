<?php
class Render {

  public static function listIngredients($ingredients){
    $output = "";
    foreach ($ingredients as $ing){
      $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
      $output .= "\n<br>";
    }
    return $output;
  }

  public static function displayRecipe($recipe){
    $output = "";
    $output .= $recipe->getTitle() . " by " . $recipe->getSource();
    $output .= "\n<br>";
    $output .= implode(", ", $recipe->getTags());
    $output .= "\n<br>";
    $output .= "\n<br>";
    $output .= self::listIngredients($recipe->getIngredients());//get ingredients from recipe pass to listIngredients and return
    $output .= "\n<br>";
    $output .= implode("\n<br>", $recipe->getInstructions());
    $output .= "\n<br>";
    $output .= $recipe->getYield();

    return $output;
  }

}//End Class Render



?>
