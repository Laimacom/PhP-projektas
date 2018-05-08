<?php
class forma {
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių
    function __construct($srv, $dbn, $uid, $psw){ // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw); //rysys su db atidaromas
        $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veiktu try blokas. // allow exceptions

    }
    function add(){ // papildyti asmenų db lentele
        $res = $this->cnn->prepare("insert into sal (sal_pavadinimas, sal_sostine, sal_gyventojai, sal_tipas) values(:pavadinimas, :sostine, :gyventojai, :tipas)");
        $res->execute([':pavadinimas'=>$_POST['pavadinimas'],':sostine'=>$_POST['sostine'],':gyventojai'=>$_POST['gyventojai'],':tipas'=>$_POST['tipas']]);
    }
    function info(){   // asmenų db lenteles atvaizdavimas lentele
        $res = $this->cnn->query("select * from sal order by sal_gyventojai DESC limit 3"); //desc rusiuoja atvirkscia tvarka
        echo '<table>';
        while ($row = $res->fetch()) {
            echo '<tr>';
            echo '<td>' . $row['sal_pavadinimas'] . '</td>';
            echo '<td>' . $row['sal_sostine'] . '</td>';
            echo '<td>' . $row['sal_gyventojai'] . '</td>';
            echo '<td>' . $row['sal_tipas'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
try {
    $o = new forma('localhost', 'Laimacom', 'Laimacom', 'Laimacom123'); // susikurti klasės egzempliorių
    $o->add(); // įdėti asmens POST formos duomenis į masyvą (ir išsaugoti faile)
    $o->info(); // atvaizduoti asmenų sąrašą lentele
}
catch(PDOException $e){     //irgi prie klaidu gaudymo
    echo $e->getMessage();
}

echo '<a href="12.2-frontend.html">Atgal</a>';