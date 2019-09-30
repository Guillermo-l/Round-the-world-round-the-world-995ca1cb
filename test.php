<?php

$cost = 27.22;
$round_num = round($cost / 0.05) * 0.05;
echo number_format($round_num, 2);