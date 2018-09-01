<?php 
  class Person{
    private $name; // properties
    private $email;
    // access modifiers can be public/private/protected
    // public, access from anywhere
    // private, from withing the class
    // protected, this class and anyone that 'extends' this class
    
    /* constructor - automatically runs and the object is instantiated .. alternative to setting n stuff outside of the class */
     public function __construct($name, $email){
       $this->name = $name;
       $this->email = $email;
       echo 'Person created <br>';
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
  }

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
?> 






















p