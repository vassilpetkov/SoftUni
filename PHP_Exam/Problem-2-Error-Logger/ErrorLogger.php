<?php
$exceptions = match($_GET['errorLog'], '/.+\.(.+):\s+[\w\s]+.(\w+)\(([\w\.]+):(\d+)/');
echo '<ul>';
for ($i=0; $i<count($exceptions[0]); $i++){
    echo '<li>line <strong>'.htmlspecialchars($exceptions[4][$i]).'</strong> - <strong>'.htmlspecialchars($exceptions[1][$i]).'</strong> in <em>'.htmlspecialchars($exceptions[3][$i]).':'.htmlspecialchars($exceptions[2][$i]).'</em></li>';
}
echo '</ul>';
function match ($str, $pattern) {
    preg_match_all($pattern, $str, $matches);
    return $matches;
}