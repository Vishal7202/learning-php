<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>

<h2>Calculator</h2>

<form method="post">
    <input type="number" name="num1" required>
    <input type="number" name="num2" required><br><br>

    <select name="operation">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select><br><br>

    <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operation'];

    if ($op == "add") echo "Result: " . ($a + $b);
    else if ($op == "sub") echo "Result: " . ($a - $b);
    else if ($op == "mul") echo "Result: " . ($a * $b);
    else if ($op == "div") echo "Result: " . ($a / $b);
}
?>

</body>
</html>
