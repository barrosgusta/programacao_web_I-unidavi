<?php 
    class conexaoBd {
        private string $host;
        private string $user;
        private string $pass;
        private $pdo;

        public function __construct() {
            $this->porta = 0;
            $this->user = "";
            $this->pass = "";
            $this->host = "";
        }

        public function conecta(): bool {
            try {
                $this->pdo = new PDO("pgsql:host=$this->host;dbname=barrosgusta", $this->user, $this->pass);
                return true;
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                return false;
            }
        }

        public function desconecta(): bool {
            try {
                $this->pdo = null;
                return true;
            } catch (PDOException $e) {
                echo "Disconect failed: " . $e->getMessage();
                return false;
            }
        }

        public function getPdo() {
            return $this->pdo;
        }
    }
?>