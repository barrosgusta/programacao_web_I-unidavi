<?php
    class pessoa {
        private $pesnome;
        private $pessobrenome;
        private $pesemail;
        private $pespassword;
        private $pescidade;
        private $pesestado;

        public function getPessoas() {
            require_once("../bd/pdo.php");
            
            $sql = "SELECT * FROM tbpessoa";
            $stmt = $this->$pdo->prepare($sql);
            $stmt->execute();
            $pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getPessoa($id) {
            $sql = "SELECT * FROM tbpessoa WHERE pescodigo = ?";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([$id]);

            $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

            return $pessoa;
        }

        public function cadastrarPessoa($pessoa) {
            require_once("../bd/pdo.php");

            $aDados = array($pessoa->getPesnome(),
                            $pessoa->getPessobrenome(),
                            $pessoa->getPesemail(),
                            $pessoa->getPespassword(),
                            $pessoa->getPescidade(),
                            $pessoa->getPesestado());

            $pdo->beginTransaction();
            try {
                $sql = "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt= $pdo->prepare($sql);
                $stmt->execute($aDados);
                $pdo->commit();
                header("Location: ../index.php");
            } catch (PDOException $e) {
                $pdo->rollback();
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>