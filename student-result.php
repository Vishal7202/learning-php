<!DOCTYPE html>
<html>
<head>
    <title>Student Result Checker</title>
</head>
<body>

<h2>Student Result Checker</h2>

<form method="post">
    <label>Enter Marks (0 - 100):</label><br><br>
    <input type="number" name="marks" required>
    <br><br>
    <input type="submit" name="submit" value="Check Result">
</form>

<?php
if (isset($_POST['submit'])) {

    $marks = $_POST['marks'];

    echo "<h3>Result:</h3>";

    if ($marks < 0 || $marks > 100) {
        echo "❌ Please enter valid marks between 0 and 100.";
    } 
    else if ($marks >= 75) {
        echo "✅ Grade: A (Excellent)";
    } 
    else if ($marks >= 60) {
        echo "✅ Grade: B (Good)";
    } 
    else if ($marks >= 40) {
        echo "✅ Grade: C (Pass)";
    } 
    else {
        echo "❌ Grade: Fail";
    }
}
?>

</body>
</html>

