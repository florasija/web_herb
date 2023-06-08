<?php
require 'function.php';
// Query the database to retrieve articles
$articles = query("SELECT articles.*, categories.category_name FROM articles
          INNER JOIN categories ON articles.category_id = categories.category_id");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hygieia - Herb and Health</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 32px;
            margin: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #4CAF50;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .action-links {
            white-space: nowrap;
        }

        .action-links a {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <h1>Hygieia - Herb and Health</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date Published</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($articles as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td class="action-links">
                <a href="function2.php">Edit</a>
                <a href="function.php">Delete</a>
            </td>
            <td><?= $row["title"]; ?></td>
            <td><?= $row["author_id"]; ?></td>
            <td><?= $row["category_name"]; ?></td>
            <td><?= $row["created_date"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
