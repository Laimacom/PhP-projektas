<?php
/**
Tarkime turime duomenų bazėje lentelę dviraciai su laukais id, gamintojas, modelis, kaina. Parašykite SQL užklausą  kuri pateiktų visus duomenis apie 3 brangiausius dviračius.
 */

SELECT * FROM dviraciai ORDER BY kaina DESC limit 3