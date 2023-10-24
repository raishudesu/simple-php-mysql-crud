<h2>Employees</h2>
<a class="btn btn-primary" href="pages/create.php" role="button">Add</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "controllers/read.php"
        ?>
    </tbody>
</table>