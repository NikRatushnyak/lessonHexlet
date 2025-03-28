<?php
function apply(array $cities, string $operation,int|null $index = null, string|null $city = null): array|null
{
    if ($operation === 'reset') {
        return [];
    }
    elseif ($operation === 'remove') {
        unset ($cities[$index]);
        return $cities;
    } else {
        $cities[$index] = $city;
        return $cities;
    }
}

$cities= ['moscow', 'london', 'berlin', 'porto'];
print_r(apply($cities, 'change', 0, 'miami'));