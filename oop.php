<?php 
  class Person{
    private $name; // properties
    private $email;
    // access modifiers can be public/private/protected
    // public, access from anywhere
    // private, from withing the class
    // protected, this class and anyone that 'extends' this class
    // - static properties & methods - don't have to instantiate object to use them
    private static $ageLimit = 50; 
    
    /* constructor - automatically runs and the object is instantiated .. alternative to setting n stuff outside of the class */
     public function __construct($name, $email){ // constructor
       $this->name = $name;
       $this->email = $email;
       echo __CLASS__.' created <br>';
    }
    
    public function __destruct(){
      echo __CLASS__.' destroyed <br>';
    }

    public function setName($name){ // setter fxn
      $this->name = $name;
    }
    
    public function getName(){ // getter fxn
      return $this->name;
    }
    // for email
    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }
    public static function getAgeLimit(){
      return self::$ageLimit;
    }
  }
// use static properties/methods w/o instantiating them.
// echo Person::$ageLimit.'<br>';
echo Person::getAgeLimit().'<br>';

  $person1 = new Person('John Doe', 'johnDoe@jdemail.com'); // instantiating
   
  //  $person1 -> name = 'John Doe'; // setting 
  //  echo $person1 -> name; // getting, not good practice
  /* good practice is to make properties private and create a public fxn to manipulate */
 // after setting objects to private and setter+getter fxns/methods to  public ... 
  echo $person1->getName().'<br>';
  echo $person1->getEmail().'<br>';

  $person1->setName('Tariq Qureshi');
  echo $person1->getName().'<br>';

  $person1->setEmail('taariqq@gmail.com');
  echo $person1->getEmail().'<br>';
// inheritence

class Customer extends Person{
  private $balance;
  
  public function __construct($name, $email, $balance){
    parent::__construct($name, $email, $balance);
    $this->balance = $balance;
    echo 'A new '. __CLASS__.' created <br>';
  }
  
  public function setBalance($balance){
    $this->balance = $balance;
  }
  public function getBalance(){
    return $this->balance.'<br>';
  }
}

$customer1 = new Customer('Johnny Doe', 'jonny@doe.com', 300);
echo $customer1->getName().'<br>';
echo $customer1->getEmail().'<br>';
echo $customer1->getBalance().'<br>';
?>






































