<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;    
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=usuarioetimpwiii", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

        public function cadastrar($nome, $email, $senha) {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);
            return $stmt->execute();
        }
    


    
    public function chkUser($email){
        //passo 1: criar a consulta sql
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        //passo 2: passar a consulta para o método prepare do PDO
        $stmt = $this->pdo->prepare($sql);

        //passo 3: para cada apelido, passar o valor correspondente
        $stmt->bindValue(":e", $email);
        
        //passo 4: executar o comando
        $stmt->execute();

        if( $stmt->rowCount() > 0 ){
            return true;
        }else{
            return false;
        }    
    }

    public function chkPass($email, $senha){
        //passo 1: criar a consulta sql
        $sql = "SELECT * FROM usuarios WHERE email = :e AND senha = :s";

        //passo 2: passar a consulta para o método prepare do PDO
        $stmt = $this->pdo->prepare($sql);

        //passo 3: para cada apelido, passar o valor correspondente
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);
        
        //passo 4: executar o comando
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            return $stmt->fetch();
        }else{
            return false;
        }     
    }
}