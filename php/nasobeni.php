<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table_form.css">
    <title>Násobení</title>
</head>
<body>
    <div class="form">
        <h1>NÁSOBENÍ</h1>
        <form action="" method="post">
            <label for="input">Zadejte hodnotu X: <input type="number" name="input"></label>
            <input type="submit" value="Odeslat!">
        </form>
    </div>

    <div class="table">
        <?php
            if (!isset($_POST["input"]) || empty($_POST["input"])) {
                echo "<p>Nezadal jste žádnou hodnotu! Zadejte prosím hodnotu od 1 do 9.</p>";
            } elseif ($_POST["input"] > 0 && $_POST["input"] < 10) {
                $x = $_POST['input'];
                echo '<table>';
                echo '<tr><th>č.p.</th><th>rovnice</th><th>výsledek</th></tr>';
                for ($i = 1; $i <= 10; $i++) {
                    $result = $x * $i;
                    echo "<tr><th>$i.</th><td>$x * $i</td><td>$result</td></tr>";
                }
                echo '</table>';
            } else {
                echo "<p>Hodnota, kterou jste zadal, není platná. Zadejte prosím hodnotu od 1 do 9.</p>";
            }
        ?>
    </div>
</body>
</html>