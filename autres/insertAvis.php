<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="register.php" methode="POST">
        <div>
            <label for="username"></label>
            <input type="text" placeholder="entrer username" name="Username" value=''>
        </div>
        <div>
            <label for="password"></label><br>
            <input type="text" placeholder="password" name="password" value=''></input>;
            <br>
            <label for="nom"></label><br>
            <input type="nom" name="nom" placeholder="nom" value=''><br><br>
            <label for="prenom"></label><br>
            <input type="prenom" name="prenom" placeholder="prenom" value=''><br><br>

            <input type="submit" name="submit">
        </div>
    </form>
</body>

</html>