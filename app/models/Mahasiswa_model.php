<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Fahru Rizal",
    //         "nim" => "1929140005",
    //         "email" => "frizalichal01@gmail.com",
    //         "prodi" => "Teknik Komputer"
    //     ],
    //     [
    //         "nama" => "Ria Nurhidayati",
    //         "nim" => "1929140006",
    //         "email" => "rianurhidayati@gmail.com",
    //         "prodi" => "Teknik Komputer"
    //     ]
    // ];
    private $dbh, // database handler
            $stmt; // query
    
    public function __construct(){
        // data source name
        $dsn = "mysql:host=localhost;dbname=phpmvc";
        

        try{
            $this->dbh = new PDO($dsn, 'root','');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMhs(){
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


