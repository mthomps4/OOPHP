<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";
include "classes/recipecollection.php";

$cookbook = new RecipeCollection("Thompson Recipes");

$cookbook->addRecipe($lemon_chicken);
    $cookbook->addRecipe($granola_muffins);
    $cookbook->addRecipe($belgian_waffles);
    $cookbook->addRecipe($pepper_casserole);
    $cookbook->addRecipe($lasagna);
    $cookbook->addRecipe($dried_mushroom_ragout);
    $cookbook->addRecipe($rabbit_catalan);
    $cookbook->addRecipe($grilled_salmon_with_fennel);
    $cookbook->addRecipe($pistachio_duck);
    $cookbook->addRecipe($chili_pork);
    $cookbook->addRecipe($crab_cakes);
    $cookbook->addRecipe($beef_medallions);
    $cookbook->addRecipe($silver_dollar_cakes);
    $cookbook->addRecipe($french_toast);
    $cookbook->addRecipe($corn_beef_hash);
    $cookbook->addRecipe($granola);
    $cookbook->addRecipe($spicy_omelette);
    $cookbook->addRecipe($scones);

//echo Render::displayRecipe($belgian_waffles);

//echo Render::listRecipes($cookbook->getRecipeTitles());

$breakfast = new RecipeCollection("Favorite Breakfasts");
foreach ($cookbook->filterByTag("breakfast") as $recipe){
  $breakfast->addRecipe($recipe);
}

//echo Render::listRecipes($breakfast->getRecipeTitles());
//echo "\n\n SHOPPING LIST \n\n";
//echo Render::listShopping($breakfast->getCombinedIngredients());

echo Render::listRecipes($cookbook->getRecipeTitles());

echo "<br>\n<br>\n";

echo Render::displayRecipe($cookbook->filterById(2));//Waffles

$week1 = new REcipeCollection("Meal Plan: Week 1");
$week1->addRecipe($cookbook->filterById(2));
$week1->addRecipe($cookbook->filterById(3));
$week1->addRecipe($cookbook->filterById(6));
$week1->addRecipe($cookbook->filterById(16));

echo "<br>\n<br>\n";

echo Render::listRecipes($week1->getRecipeTitles());

echo "<br>\n<br>\n";
echo "\n\n SHOPPING LIST \n\n";
echo Render::listShopping($week1->getCombinedIngredients());


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
