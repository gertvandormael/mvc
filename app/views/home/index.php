<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC</title>
</head>
<body>
    <h1>Main page</h1>
    <form action="http://mvc.local/public/shop/" method="post">
        <button>Go to the test page</button>
    </form>

    <form action="#" >
        <input type="text" name="test" placeholder="test" method="post">
        <input type="submit" name="test-button">
    </form>
    <?php echo $data["test"]; ?>
</body>
</html>