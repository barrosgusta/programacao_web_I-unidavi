<?php
    require_once"conexao_db.php";
    class query {
        private string $sql;
        private int $registros;
        private conexaoBd $conexao;
        public function open(): bool {
        
        }

        public function getNextRow(): object {
            
        }
        public function update(string $str, array $arr, array $arr1, string $str1): bool {
            
        }
        public function insert(string $str, array $arr, array $arr1): int {
            
        }
        public function delete(string $str, array $arr): bool {
            
        }
    }
?>