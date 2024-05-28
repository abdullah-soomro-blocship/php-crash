 <?php
    
    class User {
        public $name;
        public $email;
        public $password;

        function set_name($name){
            $this->name = $name;
        }

        function get_name (){
            return $this->name;
        }

        function __construct($name, $email, $password)
        {
            $this->name = $name;
            $this->email = $email;
            $this->password= $password;
        }

    }

 
// $abdullah = new User('Abdull', 'asd', 'asda');

// $abdullah-> name = 'Abdullah';


// $abdullah->get_name();

// $abdullah->set_name('Abdul');

// echo $abdullah->name;

// var_dump($abdullah);
 
class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }
}

$ahmed = new Employee('Ahmed', '@gmail', 'assa', 'Manager');

echo $ahmed->getTitle(); 


?>