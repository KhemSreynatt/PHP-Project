<?php
$score = 94;
if ($score >= 90 && $score <= 100) {
    echo "Grade A";
} elseif ($score <= 80 && $score < 90) {
    echo "Grade B";
} elseif ($score <= 70 && $score < 80) {
    echo "Grade C";
} elseif ($score >= 60 && $score < 70) {
    echo "Grade D";
} elseif ($score >= 50 && $score < 60) {
    echo "Grade E";
} else {
    echo "Grade F";
}
