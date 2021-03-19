<?php
    class MyClass
    {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "flatissue";
        public $conn;

        public function __construct()
        {
            try
            {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            }
            catch(PDOException $ex)
            {
                echo $ex->getMessage();
            }
            return $this->conn;
        }

        public function register($username,$email,$hash_passwd,$mobile,$roll)
        {
            $query = $this->conn->prepare("insert into user(username,email,passwd,mobile,roll) values(:username,:email,:passwd,:mobile,:roll)");

            $query->bindparam(':username',$username);
            $query->bindparam(':email',$email);
            $query->bindparam(':passwd',$hash_passwd);
            $query->bindparam(':mobile',$mobile);
            $query->bindparam(':roll',$roll);

            try{
                $result = $query->execute();
                return $result;
            }
            catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }

        public function login($username,$passwd)
        {
            $query = $this->conn->prepare("select * from user where username=:username");
            $query->bindparam(':username',$username);
            //$query->bindparam(':passwd',$passwd);

            try{
                $result = $query->execute();
                $rw = $query->fetch(PDO::FETCH_ASSOC);
                $pswd = $rw['passwd'];
                $passwd = password_verify($passwd,$pswd);

                if($username == $rw["username"])
                {
                    if($passwd == $rw["passwd"])
                    {
                        $_SESSION['userid'] = $rw['userid'];
                        //header('Location:home.php');
                        if($rw['roll'] == 'owner'){
                            header('Location:home.php');
                        }
                        else{
                            header('Location:adminhome.php');
                        }
                    }
                    else
                    {
                        echo "Invalid Password....";
                    }
                }
                else
                {
                    echo "Invalid Username..........";
                }
            }
            catch (PDOException $ex)
            {
                $ex->getMessage();
            }
        }
        public function issuereport($ownername,$flatnumber,$contact,$title,$description,$userid,$status)
        {
            $query = $this->conn->prepare("insert into issuereport(ownername,flatnumber,contact,title,description,userid,status) values(:ownername,:flatnumber,:contact,:title,:description,:userid,:status)");
            $query->bindparam(':ownername',$ownername);
            $query->bindparam(':flatnumber',$flatnumber);
            $query->bindparam(':contact',$contact);
            $query->bindparam(':title',$title);
            $query->bindparam(':description',$description);
            $query->bindparam(':userid',$userid);
            $query->bindparam(':status',$status);

            try{
                $result = $query->execute();
                return $result;
            }
            catch (PDOException $ex)
            {
                echo $ex->getMessage();
            }
        }
    }