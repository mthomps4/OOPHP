<?php
class Recipe
{
  private $title;//set in setTitle();
  private $ingredients = array();
  private $instructions = array();
  private $yield;
  private $tag = array();
  private $source = "Myself ";

  public function setTitle($title){
    if(empty($title)){
      $this->title = null;
    }else{
      $this->title = ucwords($title);
    }
  }

  public function getTitle(){
    return $this->title;
  }

  private $measurements = array (
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "lb",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );

  public function addIngredient($item, $amount = null, $measure = null){
    if($amount != null && !is_float($amount) && !is_int($amount)){
      exit("The amount must be a float: " . gettype($amount) . " $amount given.");
    }

    if ($measure != null && !in_array(strtolower($measure), $this->measurements)){
      exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
    }

    $this->ingredients[] = array(
      "item" => ucwords($item),
      "amount" => $amount,
      "measure" => strtolower($measure)
    );
  }

  public function getIngredients(){
    return $this->ingredients;
  }

  public function addInstruction($string){
    $this->instructions[] = $string;
  }

  public function getInstructions(){
    return $this->instructions;
  }

  public function addTag($tag){
    $this->tags[] = strtolower($tag);
  }

  public function getTags(){
    return $this->tags;
  }

  public function setYield($Yield){
    $this->Yield = $Yield;
  }

  public function getYield(){
    return $this->Yield;
  }

  public function setSource($source){
    $this->source = ucwords($source);
  }

  public function getSource(){
    return $this->source;
  }

  public function __construct($title = null){
    $this->setTitle($title);
  }

  public function __toString(){
    $output = "You are calling a " . __CLASS__ . " object with the title \"";
    $output .= $this->getTitle() . "\"";
    $output .= "   " . "It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".<br>";
    $output .= "This display is from line " . __LINE__ . " in method " . __METHOD__ . "<br>";
    $output .= "The folowing methods are avaliable for the objects of this class: <br>";
    $output .= implode ("<br>\n",  get_class_methods(__CLASS__));
    return $output;
  }

}

?>
