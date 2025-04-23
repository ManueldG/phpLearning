<?php

return [

    'capture_output' => env('CAPTURE_OUTPUT'),
    'allow_classes' => env('ALLOW_CLASSES'),
    'allow_constants' => env('ALLOW_CONSTANTS'),
    'allow_functions' => env('ALLOW_FUNCTIONS'),
    'allow_operator' => env('ALLOW_OPERATOR'),
    'allow_variables' => env('ALLOW_VARIABLES'),
    'whitelist_func' => explode(',', env('WHITE_LIST_FUNC')),
    'skip_validation' => env('SKIP_VALIDATION')

];

