<?php

namespace Hexlet\Php\Runner;

function run()
{
     = collect(['taylor', 'abigail', 'ivan'])->map(function () {
        return strtoupper();
    });

    return ;
}

