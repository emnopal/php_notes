<?php

// nullsafe

# create nullable, php akan cek apakah country null atau bukan
class AddressNull{
    public ?string $country;
}

# create object AdressNull
class UserNull{
    public ?AddressNull $address;
}

function getCountry(?UserNull $user): ?string
{
    return $user?->address?->country; # kalo ga di cek null nya bakalan error
}

# nullsafe
echo getCountry(null) . PHP_EOL;

# if not null
$noNull = new AddressNull();
$noNull->country = "China";
$countyNoNull = new UserNull();
$countyNoNull->address = $noNull;
echo getCountry($countyNoNull);