<?php 
class DB 
{
    private $db;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'dobbel_game';

    public function __construct()
    {
        try {
            $this->db = new PDO(sprintf("mysql:host=%s;dbname=%s;", $this->host, $this->name), $this->user, $this->pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function Read($table, $columns = '*', $where = '1', $value)
    {
        $rows = [];
        $query = sprintf('SELECT %2$s FROM `%1$s` WHERE %3$s %4$s', $table, $columns, $where, $value);
        
        $sth = $this->db->prepare($query);
        $sth->execute();

        while($row = $sth->fetch(PDO::FETCH_OBJ))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    public function Create($table, $columns, $values)
    {
        $query = sprintf('INSERT INTO %1$s (%2$s) VALUES (%3$s)', $table, $columns, $values);
        $sth = $this->db->prepare($query);
        $sth->execute();
        return true;
    }
}
$db = new DB();