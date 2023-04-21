    <?php
    class User {
        public $db;

        function __construct() {
            $dsn = 'mysql:host=localhost:8889;dbname=phpvideo';
            $username = 'root';
            $password = 'root';
            $this->db = new PDO($dsn, $username, $password);
        }

        function create($name, $username) {
            $stmt = $this->db->prepare("INSERT INTO users (firstname, username) VALUES (?, ?)");
            $stmt->execute([$firstname, $username]);
            return $this->db->lastInsertId();
        }

        function read($id) {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE id=?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function all() {
            $stmt = $this->db->prepare("SELECT * FROM users");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        

        function update($id, $firstname, $username) {
            $stmt = $this->db->prepare("UPDATE users SET firstname=?, username=? WHERE id=?");
            $stmt->execute([$firstname, $username, $id]);
            return $stmt->rowCount();
        }

        function delete($id) {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id=?");
            $stmt->execute([$id]);
            return $stmt->rowCount();
        }
    }
?>