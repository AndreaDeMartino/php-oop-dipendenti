<?php
  // Import Person Class
  include_once __DIR__ . '/Person.php';

  // Declare Class Role
  class Role extends Person{
    
    // Property
    public $type;
    public $branch;
    public $authorization;

    // Constructor
    public function __construct($_name, $_surname, $_age, $_document, $_years_experience, $_branch, $_authorization){
      parent::__construct($_name, $_surname, $_age, $_document, $_years_experience);
      //* PERSONAL REMINDER
      //* Il parent fa praticamente questo:
      //* $this->name = $_name;
      //* $this->surname = $_surname;
      //* $this->age = $_age;
      //* $this->document = $_document;
      $this->type = $this->ageRole();
      $this->branch = $_branch;
      $this->authorization = $_authorization;
    }

    // Method: Qualification calculation based on years of experience
    private function ageRole(){
      if ($this->years_experience > 5){
        return 'Senior';
      } else{
          return 'Junior';
      };
    }

    // Method: Return an Error if there are underage employees
    public function alertAge(){
      if ($this->age < 19){
        throw new Exception ('Attenzione ci sono dipendenti minorenni');
      }
    }
  }

  // Array with all custom property
  $rolesProps = [
    ['Andrea','De Martino',16,'Patente',1,'Produzione','User-1',],
    ['Paolo','Duzioni',37,'Carta di identità',15,'Amministrazione','Admin']
  ];

  // Roles container
  $roles = [];

  // Add all property to array container
  foreach($rolesProps as $roleProp){
    $roles[] = new Role(...$roleProp);
  };