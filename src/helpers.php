<?php

namespace FEEC;

const ENV_TEST = 1;

const ENV_PROD = 2;

const TYPE_EMISSION = 1; // Es una constante revisar pagina 21 tabla 2

const DOC_INVOICE = '01';

const DOC_CREDIT_NOTE = '04';

const STATUS_CREATED = 'CREADO';

const STATUS_AUTHORIZED = 'AUTORIZADO';

const STATUS_NOT_AUTHORIZED = 'NO AUTORIZADO';

const STATUS_IN_PROCESSING = 'EN PROCESAMIENTO';

const STATUS_REJECTED = 'RECHAZADO';

const STATUS_FAILED = 'DEVUELTA';

const STATUS_RECEIVED = 'RECIBIDA';

const STATUS_NOT_FOUND = 'NO ENCONTRADO';

// TYPE OF DOCUMENT FOR CUSTOMERS

const DOC_RUC = '04';

const DOC_ID_CARD = '05';

const DOC_PASSPORT = '06';

const DOC_FINAL_CONSUMER = '07';

const DOC_ID_FOREIGN = '08';


// TAX RATES

const TAX_VAT = 2;

const TAX_ICE = 3;

const TAX_IRBPNR = 4;

const TAX_VAT_RATE_0 = 0;

const TAX_VAT_RATE_12 = 2;

const TAX_VAT_RATE_14 = 3;

const TAX_VAT_EXCLUDED = 6;

const TAX_VAT_EXEMPT = 7;

const VAT_DIFFERENTIATED = 8;

const VAT_RATES = [
    TAX_VAT_EXEMPT => 0,
    TAX_VAT_EXCLUDED => 0,
    TAX_VAT_RATE_0 => 0,
    TAX_VAT_RATE_12 => 12,
    TAX_VAT_RATE_14 => 14
];

// WITHHOLDINGS

const WITHHOLDING_INCOME = 1;

const WITHHOLDING_VAT = 2;

const WITHHOLDING_ISD = 6;

const WITHHOLDING_VAT_RATE_NO_APPLY = 8;

const WITHHOLDING_VAT_RATE_0 = 7;

const WITHHOLDING_VAT_RATE_10 = 9;

const WITHHOLDING_VAT_RATE_20 = 10;

const WITHHOLDING_VAT_RATE_30 = 1;

const WITHHOLDING_VAT_RATE_50 = 11;

const WITHHOLDING_VAT_RATE_70 = 2;

const WITHHOLDING_VAT_RATE_100 = 3;

const WITHHOLDING_VAT_RATES = [
    WITHHOLDING_VAT_RATE_10 => 10,
    WITHHOLDING_VAT_RATE_20 => 20,
    WITHHOLDING_VAT_RATE_30 => 30,
    WITHHOLDING_VAT_RATE_50 => 50,
    WITHHOLDING_VAT_RATE_50 => 70,
    WITHHOLDING_VAT_RATE_100 => 100
];

const WITHHOLDING_ISD_RATES = [3.5, 3.75, 4, 4.25, 4.5, 4.75, 5];

const WITHHOLDING_ISD_RATE = 4580;

// REGIMENTS

const RIMPE_ENTREPRENEURS = 1;

const RIMPE_POPULAR_BUSINESSES = 2;


function get_key(...$entries): string
{

    $key = implode('', $entries);

    $sum = 0;
    foreach (str_split(strrev($key)) as $i => $val) {
        if ($i % 6 === 0) {
            $factor = 2;
        }
        $sum += $val * $factor;
        $factor ++;
    }
    $result = 11 - ($sum % 11);
    if ($result > 9) {
        $result = 11 - $result;
    }

    return $key . $result;
}
