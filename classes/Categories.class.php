<?php
    /*
    CRUD Create Read Update Delete
    */
    class Categories{

        // Connection
        protected $conn;

        // Table
        private $db_table = "categories";

        // Columns
        public $id = NULL;
        public $name;
        public $created;
        public $updated;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // READ ALL
        public function getCategory($id = null){

            if(is_null($id)){
                $sql = "SELECT * FROM " . $this->db_table . " ORDER BY id DESC limit 100";
                $result = $this->conn->query($sql);	
            }
            else{
                $result = $this->conn->query("SELECT * FROM " . $this->db_table . " WHERE id = " . $id . " ORDER BY id DESC "); 
            }
            //$result = $stmt->get_result();
            $this->conn->close();
            return  $result ;
            
        }

        // CREATE
        public function createCategory(){

            $stmt = mysqli_prepare($this->conn, "INSERT INTO " . $this->db_table . " VALUES (? , ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, 'isii', 
                $this->id, 
                $this->name, 
                $this->created, 
                $this->updated);

            $this->created = time();
            $this->updated = time();

            // execute prepared statement
            mysqli_stmt_execute($stmt);
            $stmt->close();
        } 


        //UPDATE
        public function updateCategory(){
           $stmt = mysqli_prepare($this->conn, "UPDATE " . $this->db_table . "  SET name = ?, 
                                                updated = ?  WHERE id = ?");           
           
            mysqli_stmt_bind_param($stmt, 'sii', 
                $this->name, 
                $this->updated,
                $this->id);

            // execute prepared statement
            mysqli_stmt_execute($stmt);
            $stmt->close();

        }
      
        // DELETE
        public function deleteCategory(){
            $this->id = (int) $this->id;
            $stmt = mysqli_prepare($this->conn, "DELETE FROM " . $this->db_table . " WHERE id = ?");
            mysqli_stmt_bind_param($stmt, 'i', $this->id);
            //$this->id = (int)strip_tags($this->id);

            // execute prepared statement
            mysqli_stmt_execute($stmt);
            $stmt->close();
            
        }

    }
?>