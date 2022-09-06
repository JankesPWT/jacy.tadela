<?php

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
echo __CLASS__;
echo '<br>';

function nazwaFunkcji() {echo __FUNCTION__;}

nazwaFunkcji();

echo '<br>';
echo __TRAIT__;
echo '<br>';
echo __METHOD__;
echo '<br>';
echo __NAMESPACE__;
echo '<br>';