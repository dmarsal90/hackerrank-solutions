<?php

/*
 * Complete the 'queensAttack' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER r_q
 *  4. INTEGER c_q
 *  5. 2D_INTEGER_ARRAY obstacles
 */

function queensAttack($n, $k, $r_q, $c_q, $obstacles)
{
    // Write your code here
    $obstaclesLocation = array();
    foreach ($obstacles as $value) {
        $obstaclesLocation[$value[0]][$value[1]] = 1;
    }

    $total = right($n, $k, $r_q, $c_q, $obstaclesLocation)
        + left($n, $k, $r_q, $c_q, $obstaclesLocation)
        + up($n, $k, $r_q, $c_q, $obstaclesLocation)
        + down($n, $k, $r_q, $c_q, $obstaclesLocation)
        + upLeftCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
        + upRightCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
        + downLeftCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
        + downRightCorner($n, $k, $r_q, $c_q, $obstaclesLocation);
    return $total;
}

function isConditionTrue($n, $k, $r_q, $c_q, $obstacles)
{
    if ($r_q < 1 || $r_q > $n) {
        return true;
    }

    if ($c_q < 1 || $c_q > $n) {
        return true;
    }

    // There is a obstacle at location $r_q, $c_q
    if (isset($obstacles[$r_q][$c_q])) {
        return true;
    }
    return false;
}

// Calculate all possible move from queen position
function right($n, $k, $r_q, $c_q, $obstacles)
{
    $c_q++;
    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + right($n, $k, $r_q, $c_q, $obstacles);
}

function left($n, $k, $r_q, $c_q, $obstacles)
{
    $c_q--;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + left($n, $k, $r_q, $c_q, $obstacles);
}

function up($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q++;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + up($n, $k, $r_q, $c_q, $obstacles);
}
function down($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q--;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + down($n, $k, $r_q, $c_q, $obstacles);
}


// All corner move
function upLeftCorner($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q--;
    $c_q--;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + upLeftCorner($n, $k, $r_q, $c_q, $obstacles);
}

function upRightCorner($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q--;
    $c_q++;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + upRightCorner($n, $k, $r_q, $c_q, $obstacles);
}

function downLeftCorner($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q++;
    $c_q--;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + downLeftCorner($n, $k, $r_q, $c_q, $obstacles);
}

function downRightCorner($n, $k, $r_q, $c_q, $obstacles)
{
    $r_q++;
    $c_q++;

    if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
        return 0;
    }

    return 1 + downRightCorner($n, $k, $r_q, $c_q, $obstacles);
}

?>