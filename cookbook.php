<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";

echo Render::displayRecipe($belgian_waffles); 

// $recipe1 = new Recipe("Grandma's biscuts ");
// $recipe1->setSource("Grandma Mimi");
// $recipe1->addIngredient("egg", 1);
// $recipe1->addIngredient("flour", 2, "cup");
//
//
// $recipe2 = new Recipe("Mrs. Betty's butter ");
// $recipe2->setSource("Mrs. Betty");
//
// //echo $recipe1->getTitle();
// //foreach($recipe1->getIngredients() as $ing){
//   //echo "\n <br>" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
// //}
//
// $recipe1->addInstruction("This is my first instruction.");
// $recipe1->addInstruction("This is my second instruction.");
// //echo implode("\n<br>", $recipe1->getInstructions());
//
// $recipe1->addTag("Breakfast");
// $recipe1->addTag("Main Course");
// $recipe1->addTag("Bread");
// //echo implode(", ", $recipe1->getTags());
//
// $recipe1->setYeild("6 servings");
// //echo $recipe1->getYeild();
// //echo $recipe1->getSource();
//
// echo Render::displayRecipe($recipe1);
//
// echo $recipe1;

?>
