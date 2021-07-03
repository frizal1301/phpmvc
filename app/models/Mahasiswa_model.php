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
    private $table = 'mahasiswa';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMhs(){
        $this->db->query("SELECT * FROM ". $this->table);
        return $this->db->resultSet();
    }

    public function getMhsById($id){
        $this->db->query('SELECT * FROM '.$this->table. ' WHERE id = ?');
        $this->db->bind(1 ,$id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa 
                    VALUES
                  ('',:nama, :nim, :email, :prodi)
        ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('prodi', $data['prodi']);

        $this->db->execute();
        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}


