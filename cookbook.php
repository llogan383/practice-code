<?php
include "classes/recipe.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/allrecipes.php";


$cookbook = new RecipeCollection("Treehouse Recipes");

$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dired_mushroom_ragout);
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dired_mushroom_ragout);
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

echo "\n\nSHOPPING LIST \n\n";
echo Render::listShopping($cookbook->getCombinedIngredients());


?>