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

const VAT_RATE_0 = 0;

const VAT_RATE_12 = 2;

const VAT_RATE_14 = 3;

const VAT_EXCLUDED = 6;

const VAT_EXEMPT = 7;

const VAT_DIFFERENTIATED = 8;

const VAT_RATES = [0, 12, 14];

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
