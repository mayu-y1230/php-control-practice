<?php
$students = [
    ["name" => "山田太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

function getGrade($score){
    if($score >= 90) {
        return "A";
    } elseif($score >= 80) {
        return "B";

    } elseif($score >= 70) {
        return "C";
    } elseif($score >= 60) {
        return "D";
    } else {
        return "E";
    }
}

echo "<h1>成績判定システム</h1>";

echo "<h2>個別成績</h2>";

$pass_count = 0;
$fail_count = 0;
$total_score = 0;

foreach ($students as $student) {
    $name = $student['name'];
    $score = $student['score'];
    $grade = getGrade($score);
    echo "<p> $name : $score 点ー評価 $grade </p>";

    if($score >= 60){
        $pass_count++;
    } else {
        $fail_count++;
    }

    $total_score += $score;
}

$average_score = $total_score / count($students);
echo "<h2>統計情報</h2>";
echo "<p>合格者数:$pass_count 名</p>";
echo "<p>不合格者数: $fail_count 名</p>";
echo "<p>平均点: $average_score 点</p>";