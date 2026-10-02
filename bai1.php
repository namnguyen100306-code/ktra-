<?php
// Hàm tạo dãy Fibonacci có n phần tử
function generateFibonacci($n)
{
    $fibonacci = [];

    if ($n <= 0) {
        return $fibonacci;
    }

    // Số Fibonacci đầu tiên
    $fibonacci[] = 0;

    // Số Fibonacci thứ hai
    if ($n >= 2) {
        $fibonacci[] = 1;
    }

    // Tính các số Fibonacci tiếp theo
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}


// ==========================
// PHẦN 1: NHẬP n
// ==========================

echo "<h2>Phần 1: Nhập n</h2>";

?>

<form method="post">
    <label>Nhập số nguyên dương n:</label>

    <input type="number" name="n" min="1" required>

    <button type="submit">Hiển thị Fibonacci</button>
</form>

<?php

if (isset($_POST["n"])) {

    $n = (int)$_POST["n"];

    $result = generateFibonacci($n);

    echo "<p>Dãy Fibonacci có $n phần tử:</p>";

    foreach ($result as $number) {
        echo $number . " ";
    }
}


// ==========================
// PHẦN 2: HIỂN THỊ 10 SỐ
// ==========================

echo "<h2>Phần 2: Hiển thị 10 số Fibonacci đầu tiên</h2>";

$result10 = generateFibonacci(10);

echo "10 số Fibonacci đầu tiên: ";

foreach ($result10 as $number) {
    echo $number . " ";
}

?>