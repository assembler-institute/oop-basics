<?php
class Recipe implements HealthyFood
{

    private $ingredients = [];
    private $kcal = [];
    private $cookingTime = [];
    const NOTVEGANINGREDIENTS = ["meat", "chicken", "egg", "fish", "milk"];

    //? CONSTRUCTOR AND DESTRUCTOR    

    public function __construct($ingredients, $kcal, $cookingTime)
    {
        $this->$ingredients = $ingredients;
        $this->$kcal = $kcal;
        $this->$cookingTime = $cookingTime;
    }

    function __destruct()
    {
        echo "Recipe out";
    }

    //? METHODS

    public function isVegan($ingredients)
    {

        return array_intersect(self::NOTVEGANINGREDIENTS, $ingredients) !== [] ? false : true;
    }

    public function lowKcal($kcal)
    {
        return  $kcal <= 100 ? true : false;
    }

    //? GETTERS & SETTERS
    /**
     * Get the value of ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of kcal
     */
    public function getKcal()
    {
        return $this->kcal;
    }

    /**
     * Set the value of kcal
     *
     * @return  self
     */
    public function setKcal($kcal)
    {
        $this->kcal = $kcal;

        return $this;
    }

    /**
     * Get the value of cookingTime
     */
    public function getCookingTime()
    {
        return $this->cookingTime;
    }

    /**
     * Set the value of cookingTime
     *
     * @return  self
     */
    public function setCookingTime($cookingTime)
    {
        $this->cookingTime = $cookingTime;

        return $this;
    }
}

abstract class RiceRecipe extends Recipe
{
    public $ingredients = ["rice"];

    private $extraIngredients;

    public function __construct($ingredients, $kcal, $cookingTime, $extraIngredients)
    {
        parent::__construct($ingredients, $kcal, $cookingTime);
        $this->$extraIngredients = $$extraIngredients;
    }

    public function lowKcal($kcal)
    {
        return  $kcal <= 180 ? true : false;
    }

    public function insertExtraIngredients()
    {
        foreach (self::$extraIngredients as $ingredient) {
            array_push($ingredients, $ingredient);
        }
    }

    /**
     * Get the value of extraIngredients
     */
    public function getExtraIngredients()
    {
        return $this->extraIngredients;
    }

    /**
     * Set the value of extraIngredients
     *
     * @return  self
     */
    public function setExtraIngredients($extraIngredients)
    {
        $this->extraIngredients = $extraIngredients;

        return $this;
    }
}

class RiceMangoRecipe extends RiceRecipe
{
    public $ingredients = ["rice", "mango"];

    public function cousinLuca()
    {
        echo "FULL DE MANGO";
    }
}

interface HealthyFood
{
    public function isVegan($ingredients);
    public function lowKcal($kcal);
}
