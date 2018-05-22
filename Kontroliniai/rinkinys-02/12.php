<?php
/**
Tarkime turime duomenų bazėje lentelę maistoprekes su laukais id, gamintojas, pavadinimas, kaina, galiojimo data. Parašykite SQL užklausą  kuri pateiktų visus duomenis apie 3 šviežiausius produktus.
 */

SELECT * FROM maistoprekes ORDER BY galiojimo_data DESC limit 3