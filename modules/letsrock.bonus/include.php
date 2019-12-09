<?php

namespace Letsrock\Bonus;

defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

\CModule::AddAutoloadClasses(
    "letsrock.bonus",
    array(
        "Letsrock\\Bonus\\Helper" => "lib/helper.php",
        "Letsrock\\Bonus\\Deposit" => "lib/models/deposit.php",
        "Letsrock\\Bonus\\Withdraw" => "lib/models/withdraw.php",
        "Letsrock\\Bonus\\Transaction" => "lib/models/transaction.php",
        "Letsrock\\Bonus\\Core" => "lib/models/core.php",
        "Letsrock\\Bonus\\Information" => "lib/models/information.php",
        "Letsrock\\Bonus\\Controller" => "lib/controller.php",
    )
);
