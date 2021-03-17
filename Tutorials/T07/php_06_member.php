<?php
session_start();
require("common.inc.php");
enforce_member_login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
    <script>
    </script>
</head>

<body>
    <h1>Dashboard</h1>
    <p>This is a member-protected page.</p>

    <?php
    try {
        $conn = new PDO(
            "mysql:host=$db_servername;dbname=$db_database",
            $db_username, $db_password);

        // Self-submitting form
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Data Validation
            // - Album Name: Only contains A-Z a-z 0-9
            // - Release Date: Properly entered, not in the future
            // - artist_id & label_id: Make sure they are valid
            // - ...
            if (empty($_POST['album_name']) || empty($_POST['release_date'])) {
                echo "Add Album: Please enter a proper album name and a release date!<br>";
            }
            else {
                $stmt = $conn->prepare('INSERT INTO albums(artist_id, label_id, name, release_date)'
                                        . ' VALUES (:artist_id, :label_id, :name, :release_date)');
                $stmt->bindParam(':artist_id', $artist_id);
                $stmt->bindParam(':label_id', $label_id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':release_date', $release_date);

                $artist_id = (int) $_POST['artist_id'];
                $label_id = (int) $_POST['label_id'];
                $name = $_POST['album_name'];
                $release_date = $_POST['release_date'];
                $stmt->execute();
            }
        }

        // $sql = 'SELECT * FROM albums';
        $sql = 'SELECT albums.name AS album_name, labels.name AS label_name, artists.name AS artist_name, albums.release_date'
            . ' FROM albums, artists, labels'
            . ' WHERE albums.artist_id=artists.artist_id'
            . ' AND albums.label_id=labels.label_id';
        $result = $conn->query($sql);
        echo "<ol>\n";
        foreach ($result as $row) {
            $album_name_esc = htmlspecialchars($row['album_name']);
            $artist_name_esc = htmlspecialchars($row['artist_name']);
            $label_name_esc = htmlspecialchars($row['label_name']);
            $release_date_esc = htmlspecialchars($row['release_date']);
            echo "<li>{$album_name_esc} [$artist_name_esc] [$label_name_esc] [$release_date_esc]</li>\n";
        }
        echo "</ol>\n";
    } catch (PDOException $e) {
        echo "<p>Connection failed: " . $e->getMessage() . "</p>";
    }
    ?>

    <h2>Add New Album</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="artist_id">Artist:</label>
        <select id="artist_id" name="artist_id">
            <?php
            // !! In Production code, you must do more extensive error handling!
            // !! ... Error handling: 80%
            $sql = 'SELECT * FROM artists';
            $result = $conn->query($sql);
            foreach ($result as $row) {
                $name_esc = htmlspecialchars($row['name']);
                echo "<option value='{$row['artist_id']}'>{$name_esc}</option>\n";
            }
            ?>
        </select><br>
        <label for="label_id">Label:</label>
        <select id="label_id" name="label_id">
            <?php
            // !! In Production code, you must do more extensive error handling!
            // !! ... Error handling: 80%
            $sql = 'SELECT * FROM labels';
            $result = $conn->query($sql);
            foreach ($result as $row) {
                $name_esc = htmlspecialchars($row['name']);
                echo "<option value='{$row['label_id']}'>{$name_esc}</option>\n";
            }
            ?>
        </select><br>
        <label for="album_name">Album Name:</label>
        <input id="album_name" type="text" name="album_name"><br>
        <label for="release_date">Release Date:</label>
        <input id="release_date" type="date" name="release_date"><br>
        <input type="submit">
    </form>

    <footer>
        <a href="php_06_logout_process.php">Logout</a>
    </footer>
</body>

</html>
<?php
$conn = NULL;
?>
