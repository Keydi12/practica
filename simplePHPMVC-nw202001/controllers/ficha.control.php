<?php
/**
 * Run function Ejectua el Controlador
 *
 * @return void
 */
function run()
{
    $arrViewData = array();
    $arrViewData["name"] = " ";
    $arrViewData["date"] = " ";
    $arrViewData["description"] = " ";
    $arrViewData["state"] = " ";
    renderizar("ficha", $arrViewData);
}

run();

?>
