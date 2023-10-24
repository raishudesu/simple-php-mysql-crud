  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employees";

    $connection = new mysqli($servername, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM employees";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->connect_error);
    }

    while ($row = $result->fetch_assoc()) {
        echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[phone]</td>
                        <td>$row[address]</td>
                        <td>$row[created_at]</td>
                        <td>
                            <a class='btn btn-primary btn-sm'href='pages/edit.php?id=$row[id]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='controllers/delete.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>
                        ";
    }
    ?>