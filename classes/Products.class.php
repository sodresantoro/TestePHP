<?php
    /*
    CRUD Create Read Update Delete
    */
    class Products extends Categories{

        // Connection
        protected $conn;
        
        // Table
        private $db_table = "products";
        
        // Columns
        public $categories_id;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // READ ALL
        public function getProducts($id = null){
            
            if(is_null($id)){
                
                $sql = "SELECT distinct p.id, p.name, p.created, p.updated, c.name as category , c.id as cat_id FROM categories c "
                        . "INNER JOIN " . $this->db_table . "  p ON c.id = p.categories_id "
                        . "ORDER BY id DESC limit 100";

                $result = $this->conn->query($sql);	
            }
            else{

                $sql = "SELECT * FROM " . $this->db_table . " WHERE id = " . $id . " ORDER BY id DESC ";
                $result = $this->conn->query($sql); 
            }

            $this->conn->close();
            return  $result ;
            
        }

        // READ ALL AND LEFT PRODUCTS
        public function getaLLProducts(){
                $sql = "SELECT distinct p.id, p.name, p.created, p.updated, c.name as category , c.id as cat_id FROM categories c "
                        . "LEFT JOIN " . $this->db_table . "  p ON c.id = p.categories_id "
                        . "ORDER BY id DESC limit 100";

            $result = $this->conn->query($sql);	
            $this->conn->close();
            return  $result ;
            
        }

        // CREATE
        public function createProduto(){

            $stmt = mysqli_prepare($this->conn, "INSERT INTO " . $this->db_table . " VALUES (? , ?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, 'iisii', 
                $this->id, 
                $this->categories_id,
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
        public function updateProduct(){

           $this->id = (int) $this->id; echo '<br>';
           $this->updated =$this->updated; echo '<br>';
           $this->name; echo '<br>';
           $this->categories_id = (int)$this->categories_id;
           
           $stmt = mysqli_prepare($this->conn, "UPDATE products 
                    SET categories_id = ?, 
                    name = ?, 
                    updated = ?  WHERE id = ?"); 

            mysqli_stmt_bind_param($stmt, 'isii', $this->categories_id, $this->name, $this->updated, $this->id);

            // execute prepared statement
            $rc = mysqli_stmt_execute($stmt);
            $stmt->close();  

        }   
      
        // DELETE
        public function deleteProduct(){
            $this->id = (int) $this->id;
            $stmt = mysqli_prepare($this->conn, "DELETE FROM " . $this->db_table . " WHERE id = ?");
            mysqli_stmt_bind_param($stmt, 'i', $this->id);

            // execute prepared statement
            mysqli_stmt_execute($stmt);
            $stmt->close();
            
        }

    }
?>