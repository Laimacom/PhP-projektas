<?php
/**
Tarkime     turime     lentelę     duomenų    bazėje     ‘Imonės’     su     laukais     ‘id,     imone,     imones_kodas,  kliento_pas,     kliento_registravimo_data’.     Parašykite     SQL    užklausą     gau     visus    duomenys     apie    5  naujausias     įmonęs. 
 */

SELECT * FROM imones ORDER BY kliento_registravimo_data DESC limit 5