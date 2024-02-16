<?php
    class Posts{
        public static function selectAll(){
            $conn = Connection::getConn();

            $sql = "SELECT * FROM posts ORDER BY id DESC";
            // possivel erro !!!!!!!!
            $sql = $conn->prepare($sql);
            //
			$sql->execute();

			$result = array();

			while ($row = $sql->fetchObject('Postagem')) {
				$result[] = $row;
			}

            if(!$result){
                throw new Exception("Não foi encontrado registro no banco de dados");
            }
            return $result;
            
        }
    }
?>