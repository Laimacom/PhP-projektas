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
    <div>
        <label>Kaip skaičiuoti NPD?</label>
        <div>
            <label class="radio"><input name="NPD" value="sistema" <?php if (isset($_POST['NPD']) && $_POST['NPD'] == 'sistema') echo 'checked="checked"' ?> type="radio"> paskaičiuos sistema</label>
            <label class="radio"><input name="NPD" value="pats" <?php if ((isset($_POST['NPD']) && $_POST['NPD'] == 'pats') or !isset($_POST['NPD'])) echo 'checked="checked"' ?> type="radio"> nurodysiu pats </label>
            <div>
                <label> Taikomas NPD</label>
                <div>
                    <input name="taikomas_NPD" type="text" value="<?php if (isset($_POST['taikomas_NPD'])) echo $_POST['taikomas_NPD'] ?>">
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Skaičiuoti">
</form>
    <?php if (count($_POST)>0){ ?>
    <table>
        <tr>
            <td colspan="1">Priskaičiuotas atlyginimas "ant popieriaus"</td>
            <td><?php echo $_POST['atlyginimas'] . ' Eur' ?></td>
        </tr>
        <tr>
            <td colspan="1">Pritaikytas NPD</td>
            <td><?php echo $_POST['taikomas_NPD'] . ' Eur' ?></td>
        </tr>
        <tr>
            <td colspan="1">Pajamų mokestis 15%</td>
            <td><?php echo ($_POST['atlyginimas'] - $_POST['taikomas_NPD'])*0.15 . ' Eur'; ?></td>
        </tr>
        <tr>
            <td colspan="1">Sodra. Sveikatos draudimas 6%</td>
            <td><?php echo $_POST['atlyginimas']*0.06 . ' Eur' ?></td>
        </tr>
        <tr>
            <td colspan="1">Sodra. Pensijų ir soc. draudimas 3%</td>
            <td><?php echo $_POST['atlyginimas']*0.03 . ' Eur'?></td>
        </tr>
        <tr>
            <td colspan="1">Išmokamas atlyginimas "į rankas"</td>
            <td><?php echo $irankas = $_POST['atlyginimas']-(($_POST['atlyginimas'] - $_POST['taikomas_NPD'])*0.15)-($_POST['atlyginimas']*0.06) -($_POST['atlyginimas']*0.03). ' Eur' ?></td>
        </tr>
        <tr>
            <td colspan="1">Darbdavio sumokami mokesčiai</td>
        </tr>
        <tr>
            <td colspan="1">Sodra 31.18%</td>
            <td><?php echo $_POST['atlyginimas']*0.3118 . ' Eur' ?></td>
        </tr>
        <tr>
            <td colspan="1">Visa darbo vietos kaina</td>
            <td><?php echo $irankas + $_POST['taikomas_NPD'] ?></td>
        </tr>
    </table>
<?php } ?>