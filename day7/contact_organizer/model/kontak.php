<?php
class Kontak
{
    public int $id;
    public string $nama;
    public string $email;
    public string $nomor_telepon;
    public $tanggal_lahir;

    public function __construct(int $id, string $nama, string $email, string $nomor_telepon, $tanggal_lahir = null)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->email = $email;
        $this->nomor_telepon = $nomor_telepon;
        $this->tanggal_lahir = $tanggal_lahir;
    }
}

class KontakList
{
    public array $kontakList;
    private mysqli $conn;
    public function __construct()
    {
        require_once __DIR__ . '\dbconn.php';
        $this->conn = $db->conn;
        $query = "SELECT * FROM contacts";
        $result = mysqli_query($this->conn, $query);
        $resultArray = mysqli_fetch_all($result);
        $this->kontakList = [];
        foreach ($resultArray as $kontak) {
            $this->kontakList[] = new Kontak($kontak[0], $kontak[1], $kontak[2], $kontak[3], $kontak[4]);
        }
    }
    public function addContact(string $newNama, string $newEmail, string $newPhone, $newBirthDate = null)
    {
        $query = "INSERT INTO contacts VALUES(null, '$newNama', '$newEmail', '$newPhone', '$newBirthDate')";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            return false;
            exit;
        }
        $LAST_INSERT_ID = mysqli_insert_id($this->conn);
        $kontak = new Kontak($LAST_INSERT_ID, $newNama, $newEmail, $newPhone, $newBirthDate);
        $this->kontakList[] = $kontak;
        return true;
    }
    public function deleteContact(int $id)
    {
        $query = "DELETE FROM contacts WHERE id = $id";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            return false;
            exit;
        }
        foreach ($this->kontakList as $key => $kontak) {
            if ($kontak->id == $id) {
                unset($this->kontakList[$key]);
            }
        }
        $this->kontakList = array_values($this->kontakList);
        return true;
    }
    public function updateContact(string $kontakId, string $kontakName, string $kontakEmail, string $kontakPhone, $kontakBirthDate = null)
    {
        $query = "UPDATE contacts SET name = '$kontakName', email = '$kontakEmail', phone = '$kontakPhone', birth_date = '$kontakBirthDate' WHERE id = $kontakId";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            return false;
            exit;
        }
        foreach ($this->kontakList as $key => $value) {
            if ($value->id == $kontakId) {
                $this->kontakList[$key] = $kontakId;
            }
        }
        return true;
    }
    public function searchContactbyName(string $search){
        $query = "SELECT * FROM contacts WHERE name LIKE '%".$search."%'";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            return [];
        }
        $resultArray = mysqli_fetch_all($result);
        $kontakResult = [];
        foreach ($resultArray as $kontak) {
            $kontakResult[] = new Kontak($kontak[0], $kontak[1], $kontak[2], $kontak[3], $kontak[4]);
        }
        return $kontakResult;
    }
    public function searchContactbyEmail(string $search){
        $query = "SELECT * FROM contacts WHERE email LIKE '%".$search."%'";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            return [];
        }
        $resultArray = mysqli_fetch_all($result);
        $kontakResult = [];
        foreach ($resultArray as $kontak) {
            $kontakResult[] = new Kontak($kontak[0], $kontak[1], $kontak[2], $kontak[3], $kontak[4]);
        }
        return $kontakResult;
    }
}
$kontaks = new KontakList();
