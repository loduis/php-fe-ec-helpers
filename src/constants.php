<?php

namespace FEEC;

const ENV_TEST = 1;

const ENV_PRO = 2;

const TYPE_EMISSION = 1; // Es una constante revisar pagina 21 tabla 2

const DOC_INVOICE = '01';

const DOC_CREDIT_NOTE = '04';

const STATUS_CREATED = 'CREADO';

const STATUS_AUTHORIZED = 'AUTORIZADO';

const STATUS_NOT_AUTHORIZED = 'NO AUTORIZADO';

const STATUS_IN_PROCESSING = 'EN PROCESAMIENTO';

const STATUS_REJECTED = 'RECHAZADO';

const STATUS_BACK = 'DEVUELTA';

const STATUS_RECEIVED = 'RECIBIDA';

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

const VAT_EXCLUDE = 6;

const VAT_EXCEPT = 7;

const VAT_DIFFERENTIATED = 8;
