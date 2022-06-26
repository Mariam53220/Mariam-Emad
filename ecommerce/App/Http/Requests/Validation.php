<?php
namespace App\Http\Requests;

use App\Database\Models\Model;

class Validation {

    private array $allErrors=[];
    private $nameOfvalue;
    private $value;

    public function Required () 
    {
   
        if (empty($this->value)) {
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this-> nameOfvalue} Is Required";

        }
        return $this;

    }

   

    public function Maximum (int $max) {
        if ($this->value > $max) {
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this-> nameOfvalue} Is Required";
        }
        return $this;
 
    }

    public function Digits(int $digits)
    {
        if(strlen($this->value) != $digits){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this->nameOfvalue} Must Be {$digits} digits";
        }
        return $this;
    }

    public function Integer()
    {
        if(!ctype_digit($this->value)){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this->nameOfvalue} Must Be Integer Value.";
        }
        return $this;
    }




    public function Regex(string $pattern,$message = null)
    {
        if(!preg_match($pattern,$this->value)){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = $message ?? "{$this->nameOfvalue} Invalid";
        }
        return $this;
    }

    public function In (array $values) {
        if(!in_array($this->value, $values)){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this-> nameOfvalue} You Must Choose Gender Between ".implode (" , ", $values);

        }
      return $this;
    }

   




    public function Exists (string $table, string $column) {

        $model = new Model;
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $statment = $model->connection->prepare($query);
        $statment->bind_param('s',$this->value);
        $statment->execute();
        if($statment->get_result()->num_rows == 0 ){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this->nameOfvalue} Not Found.";
        }
        return $this;

    }


    public function Unique (string $table, string $column) {

        $model = new Model;
        $query = "SELECT * FROM {$table} WHERE {$column} = ?";
        $statment = $model->connection->prepare($query);
        $statment->bind_param('s',$this->value);
        $statment->execute();
        if($statment->get_result()->num_rows == 1 ){
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this->nameOfvalue} Already Exists.";
        }
        return $this;



    }

    public function Confirmed ($ComparedValues) {
        if($this->value != $ComparedValues) {
            $this->allErrors[$this->nameOfvalue][__FUNCTION__] = "{$this-> nameOfvalue} Not Confirmed";
        }

        return $this;
    }

    /**
     * Get the value of allErrors
     */ 
    public function getAllErrors()
    {
        return $this->allErrors;
    }

    /**
     * Set the value of nameOfvalue
     *
     * @return  self
     */ 

    public function getAllError(string $error)
    {
        if(isset($this->allErrors[$error])) {
           foreach( $this->allErrors[$error] AS $error) {
            return "<p class= 'text-danger font-weight-bold'> * {$error} </p>" ;
           }
        }
        return null;
    }

    



    public function setNameOfvalue($nameOfvalue)
    {
        $this->nameOfvalue = $nameOfvalue;

        return $this;
    }


    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}


?>
