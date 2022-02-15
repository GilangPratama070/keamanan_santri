<?php

class SantriModel
{

    private $table = 'tbl_santri';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSantri()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAllAdmin()
    {
        $this->db->query('SELECT * FROM tbl_admin');
        return $this->db->resultSet();
    }

    public function getPelanggaranById($id)
    {
        $this->db->query('SELECT * FROM tbl_pelanggaran WHERE tbl_pelanggaran.id_santri = :id');
        //$this->db->query('SELECT * FROM ' . $this->table);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getPelanggaranfEditById($id)
    {
        $this->db->query('SELECT * FROM tbl_pelanggaran WHERE id_pelanggaran = :id');
        //$this->db->query('SELECT * FROM ' . $this->table);
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getSantriById($id)
    {
        //$this->db->query('SELECT tbl_pelanggaran.*, tbl_santri.* FROM tbl_pelanggaran RIGHT JOIN tbl_santri ON tbl_santri.id_santri = tbl_pelanggaran.id_santri WHERE tbl_santri.id_santri = :id');
        $this->db->query('SELECT tbl_santri.*, tbl_pelanggaran.* FROM ' . $this->table . ' LEFT JOIN tbl_pelanggaran ON tbl_pelanggaran.id_santri = tbl_santri.id_santri WHERE tbl_santri.id_santri = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getonlySantriById($id)
    {
        //$this->db->query('SELECT tbl_pelanggaran.*, tbl_santri.* FROM tbl_pelanggaran RIGHT JOIN tbl_santri ON tbl_santri.id_santri = tbl_pelanggaran.id_santri WHERE tbl_santri.id_santri = :id');
        $this->db->query('SELECT tbl_santri.id_santri FROM ' . $this->table . ' WHERE id_santri = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahSantri($data)
    {
        $query = "INSERT INTO tbl_santri(nama, blok, angkatan, sekolah, ortu, telp_ortu, alamat, foto) VALUES(:nama, :blok, :angkatan, :sekolah, :ortu, :telp_ortu, :alamat, :foto)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('blok', $data['blok']);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('sekolah', $data['sekolah']);
        $this->db->bind('ortu', $data['ortu']);
        $this->db->bind('telp_ortu', $data['telp_ortu']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahPelanggaran($data)
    {
        $query = "INSERT INTO tbl_pelanggaran(id_santri, pelanggaran, tanggal, hukuman, poin) VALUES(:id_santri, :pelanggaran, :tanggal, :hukuman, :poin)";
        $this->db->query($query);
        $this->db->bind('id_santri', $data['id_santri']);
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('hukuman', $data['hukuman']);
        $this->db->bind('poin', $data['poin']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPelanggaran($data)
    {
        $query = "UPDATE tbl_pelanggaran SET 
                    pelanggaran=:pelanggaran, 
                    tanggal=:tanggal,
                    hukuman=:hukuman,
                    poin=:poin
                    WHERE id_pelanggaran =:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id_pelanggaran']);
        $this->db->bind('pelanggaran', $data['pelanggaran']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('hukuman', $data['hukuman']);
        $this->db->bind('poin', $data['poin']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataSantri($data)
    {
        $query = "UPDATE tbl_santri SET 
                    nama=:nama, 
                    blok=:blok,
                    angkatan=:angkatan,
                    sekolah=:sekolah,
                    ortu=:ortu,
                    telp_ortu=:telp_ortu,
                    alamat=:alamat,
                    foto=:foto 
                    WHERE id_santri = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id_santri']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('blok', $data['blok']);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('sekolah', $data['sekolah']);
        $this->db->bind('ortu', $data['ortu']);
        $this->db->bind('telp_ortu', $data['telp_ortu']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteSantri($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_santri=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePelanggaran($id)
    {
        $this->db->query('DELETE FROM tbl_pelanggaran WHERE id_pelanggaran=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariSantri()
    {
        return $this->db->rowCount();
    }
}