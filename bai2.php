<?php

$students = [
    [
        "id" => 1,
        "name" => "Nguyen Van An",
        "age" => 20,
        "grade" => 8.5
    ],
    [
        "id" => 2,
        "name" => "Tran Thi Binh",
        "age" => 21,
        "grade" => 9.2
    ],
    [
        "id" => 3,
        "name" => "Le Van Cuong",
        "age" => 20,
        "grade" => 7.8
    ],
    [
        "id" => 4,
        "name" => "Pham Thi Dung",
        "age" => 22,
        "grade" => 8.9
    ]
];

foreach ($students as $student) {
    echo "ID: " . $student["id"] . "<br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Grade: " . $student["grade"] . "<br><br>";
}

function findHighestGradeStudent($students)
{
    $highestStudent = $students[0];

    foreach ($students as $student) {
        if ($student["grade"] > $highestStudent["grade"]) {
            $highestStudent = $student;
        }
    }

    return $highestStudent;
}

$highestStudent = findHighestGradeStudent($students);

echo "<h3>Hoc sinh co diem cao nhat:</h3>";
echo "ID: " . $highestStudent["id"] . "<br>";
echo "Name: " . $highestStudent["name"] . "<br>";
echo "Age: " . $highestStudent["age"] . "<br>";
echo "Grade: " . $highestStudent["grade"];

?>