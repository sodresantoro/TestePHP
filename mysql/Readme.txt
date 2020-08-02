Criação das Tabelas "categories e products":

CREATE TABLE products (
                       id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       category_id int(11) NOT NULL,
                       nome VARCHAR(50) NOT NULL, 
                       created VARCHAR(21) NOT NULL,
                       updated VARCHAR(21) NOT NULL
		       )

CREATE TABLE categories (
                         id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                         nome VARCHAR(50) NOT NULL, 
                         created VARCHAR(21) NOT NULL,
                         updated VARCHAR(21) NOT NULL
			 )