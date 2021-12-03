<?php

// "" beda dengan null
var_dump(gettype(null)); // NULL
var_dump(gettype("")); // string
var_dump(null === ""); // false, type save
var_dump(null == ""); // true, since this is not type save
var_dump(is_null("")); // false
