<?php
/**
Sukurti formą + php (viename faile - nereikia nurodyti formoje action), kuriame sukurti atlyginimo ir mokesčių skaičiuoklę pagal https://www.tax.lt/skaiciuokles/atlyginimo_ir_mokesciu_skaiciuokle (tik už 2018 metus).
 */
?>
<form method="post">
    <div>
        <label> Atlyginimas ant popieriaus </label>
        <div>
            <input name="atlyginimas" type="text" value="<?php if (isset($_POST['atlyginimas'])) echo $_POST['atlyginimas'] ?>">
        </div>
    </div>
    <input type="submit" value="Skaičiuoti">
</form>
    <?php if (count($_POST)>0){ ?>
    <table>
        <tr>
            <td colspan="1">Priskaičiuotas atlyginimas "ant popieriaus"</td>
            <td><?php echo $_POST['atlyginimas'] ?></td>
        </tr>
<?php } ?>