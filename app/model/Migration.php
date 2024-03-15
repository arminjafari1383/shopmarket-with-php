class Migration{
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function migrate()
    {
        $querys[0] = 'test';
        $querys[1] = 'ali';
    }
    public function admins()
    {
        try{
            $this->db->query("
            CREATE TABLE admins(
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMAY_KEY,
                first_name VARCHAR(30) NOT NULL,
                last_name VARCHAR(30) NOT NULL ,
                mobile VARCHAR(30) NOT NULL
            )
            ");
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}