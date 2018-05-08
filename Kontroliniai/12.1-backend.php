<?php
class forma {
    private $cnn; // duomenu bazes konektorius, padaromas per konstruktorių
    function __construct($srv, $dbn, $uid, $psw){ // konstruktorius
        $this->cnn = new PDO("mysql:host={$srv};dbname={$dbn}", $uid, $psw); //rysys su db atidaromas
        $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //tam, kad veiktu try blokas. // allow exceptions

    }
    function add(){ // papildyti asmenų db lentele
        $res = $this->cnn->prepare("insert into aut (aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values(:gamintojas, :modelis, :metai, :kaina)");
        $res->execute([':gamintojas'=>$_POST['gamintojas'],':modelis'=>$_POST['modelis'],':metai'=>$_POST['metai'],':kaina'=>$_POST['kaina']]);
    }
    function info(){   // asmenų db lenteles atvaizdavimas lentele
        $res = $this->cnn->query("select * from aut order by aut_kaina DESC limit 3"); //desc rusiuoja atvirkscia tvarka
        echo '<table>';
        while ($row = $res->fetch()) {
            echo '<tr>';
            echo '<td>' . $row['aut_gamintojas'] . '</td>';
            echo '<td>' . $row['aut_modelis'] . '</td>';
            echo '<td>' . $row['aut_metai'] . '</td>';
            echo '<td>' . $row['aut_kaina'] . '</td>';
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

echo '<a href="12.1-frontend.html">Atgal</a>';