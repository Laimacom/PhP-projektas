<?php
date_default_timezone_set('EET');

$mokiniai = [
    ['vardas' => "Jonas", 'data' => '2001-08-15'],
    ['vardas' => "Ona", 'data' => '2006-06-10'],
    ['vardas' => "Marytė", 'data' => '2004-01-03'],
    ['vardas' => "Petras", 'data' => '2000-11-11']
];

$turi18 = function ($data) {
    $dabar = new DateTime();
    $skirtumas = $dabar->diff(date_create($data));
    return $skirtumas->y >= 18;
};

echo '
    <table border="1">
      <tr>
        <th>Vardas</th>
        <th>Gimimo metai</th>
      </tr>
';
foreach ($mokiniai as $mokinys) {
    if ($turi18($mokinys['data'])) {
        echo "
            <tr>
                <td>{$mokinys['vardas']}</td>
                <td>{$mokinys['data']}</td>
            </tr>
        ";
    }
}
echo '</table>';





