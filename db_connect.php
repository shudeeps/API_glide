<!-- DB connection setup here  -->
<?php

$connection = new mySQL(); //calling an class
$connection->connect('localhost', 'root', '', 'glide');


    class mySQL{
        var $host;
        var $username;
        var $password;
        var $database;
        public $dbc;

        public function connect($set_host, $set_username, $set_password, $set_database)
        {
            $this->host = $set_host;
            $this->username = $set_username;
            $this->password = $set_password;
            $this->database = $set_database;

            $this->dbc = mysqli_connect($this->host, $this->username, $this->password,$this->database) or die('Error connecting to DB');        
        }

        public function fetchAllData($sql)
        {

         
            $result =  mysqli_query($this->dbc, $sql);

            
         
            if ($result->num_rows > 0) {
            // output data of each row
           return $result;
            } else {
            echo "0 results";
                }


            // return mysqli_query($this->dbc, $sql) or die('Error querying the Database');
        }

        public function multiQuery($sql){
            if (mysqli_multi_query($this->dbc, $sql)) {
                echo "New records created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->dbc);
              }
              
        }

 

        

        public function close()
        {
            return mysqli_close($this->dbc);
        }
    }
    ?>