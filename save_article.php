<!DOCTYPE html>
<html>
<head>
    <title>Create user Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="title"],
        input[type="content"]
        input[type="author_id"]
        input[type="category_id"]
         {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Create new article</h1>
    <form method="POST" action="add_article_ai.php">
        <label for="title">titlte:</label>
        <input type="text" name="title" id="title" required><br><br>
        <label for="content">content:</label>
        <input type="text" name="content" id="content" required><br><br>
        <label for="author_id">author_id:</label>
        <input type="author_id" name="auhor_id" id="author_id" required><br><br>

        <label for="category_id">category id:</label>
        <input type="category_id" name="category_id" id="category_id" required><br><br>
        <input type="submit" value="Create new article">
    </form>
</body>
</html>
