 <?php 
 
class CreateDB{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;

    public function __construct(
         $dbname="NewDB",
         $tablename="producttb",
         $servername="localhost",
         $username="root",
         $password=""
    )
         {
        $this->dbname= $dbname;
        $this->tablename=$tablename;
        $this->servername=$servername;
        $this->username=$username;
        $this->password='';

         
        // Create Connection 
        $this->con=mysqli_connect($servername,$username,$password);

        if(!$this->con){
            die('Connection Error'). mysqli_connect_error();
        }else{
            echo "Connection established succesfully";
        }
        $sql="CREATE DATABASE IF NOT EXISTS $dbname";
        //sql to create new table

        if(mysqli_query($this->con,$sql)){
            // sql to create new table
            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            //sql to create new table
            $sql="
            CREATE TABLE IF NOT EXISTS $tablename
            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            product_name VARCHAR(25) NOT NULL,
            product_price FLOAT,
            product_image VARCHAR(100)
            );";
            if(!mysqli_query($this->con,$sql)){
                die("Connection error").mysqli_error($this->con);
            }

        }else{
            return false;
        }
        
    }
    //Get product from database
    public function getData(){
        $sql="SELECT * FROM $this->tablename";
        $result=mysqli_query($this->con,$sql);

        $res=mysqli_num_rows($result);

        if($res>0){
        return $result;
        }

        }

    }
    







?>
