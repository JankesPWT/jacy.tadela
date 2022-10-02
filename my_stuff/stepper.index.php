<?php
require_once 'stepper.class.php';
$stepper = new Stepper(3375);

$steps = 20000;

echo "<h1>Stepper class</h1>";
echo "<hr>";

$stepper->getData($_POST);

?>
<style>
    table, tr, td, th {
        border: 1px dotted #000;
        text-align: center; 
    }
    th, .row-title {
        background-color: #ccc;
        font-weight: bold;
        width: 160px;
    }
    td {
        
        height: 40px;
        padding: 10px
    }

</style>
<hr>
<table>
    <tr>
        <td>Missing: <?=$stepper->missingPoints() ?> points</td>
        <th colspan="2"><?=$stepper->setOne() ?></th>
        <th colspan="2">5000</th>
        <th colspan="2">10000</th>
        <th colspan="2">15000</th>
        <th colspan="2">20000</th>
        <th colspan="2">30000</th>
        <th colspan="2">40000</th>
    </tr>
    <tr>
        <td class="row-title">Z reklamami</td>
        <td>
            <?= $stepper->dniPoKrokachAds($stepper->setOne()) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds($stepper->setOne())) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(1) ?>
        </td>
        <td>
        <?= $stepper->dniPoKrokachAds(5000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(5000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(5000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokachAds(10000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(10000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(10000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokachAds(15000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(15000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(15000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokachAds(20000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(20000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(20000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokachAds(30000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(30000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(30000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokachAds(40000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokachAds(40000)) ?>
        </td>
        <td>
            <?= $stepper->bonusPoints(40000) ?>
        </td>
    </tr>
    <tr>
        <td class="row-title">Bez reklam</td>
        <td>
            <?= $stepper->dniPoKrokach($stepper->setOne()) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach($stepper->setOne())) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(1) ?>
        </td>
        <td>
        <?= $stepper->dniPoKrokach(5000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(5000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(5000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokach(10000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(10000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(10000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokach(15000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(15000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(15000) ?>
        </td>
        <td>
            <?= $stepper->dniPoKrokach(20000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(20000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(20000) ?>
        </td>
                <td>
            <?= $stepper->dniPoKrokach(30000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(30000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(30000) ?>
        </td>
                <td>
            <?= $stepper->dniPoKrokach(40000) ?>
            <br>
            <?= $stepper->kiedy($stepper->dniPoKrokach(40000)) ?>
        </td>
        <td>
            <?= $stepper->stepsToPoints(40000) ?>
        </td>
    </tr>
</table>
<br>
<hr>
<br>    
<form action="stepper.index.php" method="post">

    <label for="stepsToday">Steps Today</label>
    <input type="text" name="stepsToday" id="stepsToday">
    
    <input type="hidden" name="tajne-dane" value="potwierdzone">
    <input type="datetime-local" name="data" id="date">

    <input type="submit" value="Wyślij">
</form>
