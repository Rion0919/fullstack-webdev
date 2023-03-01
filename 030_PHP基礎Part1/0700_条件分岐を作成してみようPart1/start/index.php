<?php 
$score = 90;
$absence = 0;
if($score < 50 || $absence>=5) {
    echo '不合格';
} else if($score<70) {
    echo '合格';
} else if($score>=70) {
    echo '秀';
}
