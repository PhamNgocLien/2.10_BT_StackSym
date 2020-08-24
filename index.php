<?php

function checkSym($str)
{
    $arr = str_split($str);
    $stack = new SplStack();

    for ($i = 0; $i < count($arr); $i++) {
        $sym = $arr[$i];
        if ($sym == '(') {
            $stack->push($sym);

        } elseif ($sym == ')') {
            if ($stack->isEmpty()) {
                return false;
            } else {
                $stack->pop();
            }
        }
    }

    return $stack->isEmpty();
}

var_dump(checkSym('s * (s – a) * s – b) * (s – c) '));