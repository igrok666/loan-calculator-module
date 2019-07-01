<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;

if ($arResult['CALC']['JQUERY'] == 'Y') {
//    Asset::getInstance()->addJs($this->GetFolder() . '/jquery-3.4.1.min.js');
    $this->addExternalJs($this->GetFolder() . "/jquery-3.4.1.min.js");
}
//Asset::getInstance()->addJs($this->GetFolder() . '/app.js');
$this->addExternalJs($this->GetFolder() . "/app.js");

?>


<div class="progwft_calc">
    <? if (!empty($arResult['CALC']['NAME'])) { ?>
        <h1><?= $arResult['CALC']['NAME'] ?></h1>
    <? } ?>
    <? if (!empty($arResult['CALC']['DESCRIPTION_TOP'])) { ?>
        <p><?= $arResult['CALC']['DESCRIPTION_TOP'] ?></p>
    <? } ?>

    <div class="slidecontainer">
        <p><?= GetMessage('SUMM_RESULT') ?> <input class="style_input" id="summ"></p>
        <? if ($arResult['CALC']['SUMM'] == 0) { ?>
            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
        <? } elseif ($arResult['CALC']['MIN_SUMM'] !== 0 && $arResult['CALC']['MAX_SUMM'] !== 0 && $arResult['CALC']['SHAG_SUMM'] !== 0) { ?>
            <input type="range" step="<?= $arResult['CALC']['SHAG_SUMM'] ?>" min="<?= $arResult['CALC']['MIN_SUMM'] ?>"
                   max="<?= $arResult['CALC']['MAX_SUMM'] ?>" value="<?= $arResult['CALC']['SUMM'] ?>" class="slider" id="myRange">
        <? } else { ?>
            если заполнено поле <?= GetMessage('SUMM') ?><br>
            ни один из параметров:<br>
            - <?= GetMessage('MIN_SUMM') ?><br>
            - <?= GetMessage('MAX_SUMM') ?><br>
            - <?= GetMessage('SHAG_SUMM') ?><br>
            не должен быть пустым
        <? } ?>
    </div>
    <div class="stavka">

        <?= GetMessage('STAVKA') ?>
        <? if ($arResult['CALC']['PROCENT_CHECKBOX'] == 'N') { ?>
            <span class="stavka_val"><?= $arResult['CALC']['PROCENT'] ?></span>
        <? } else { ?>
            <input class="stavka_val style_input" type="text" value="<?= $arResult['CALC']['PROCENT'] ?>">
        <? } ?>
    </div>
    <div class="srok">
        <p><?= GetMessage('SROK') ?> <input id="srok" class="style_input"> мес.</p>
        <input type="range" step="<?= $arResult['CALC']['SROK_SHAG'] ?>" min="<?= $arResult['CALC']['SROK_MIN'] ?>"
               max="<?= $arResult['CALC']['SROK_MAX'] ?>" value="<?= $arResult['CALC']['SROK_DEFAULT'] ?>" class="slider"
               id="myRange_srok">
    </div>
    <? if (!empty($arResult['CALC']['DESCRIPTION_BOTTOM'])) { ?>
        <p><?= $arResult['CALC']['DESCRIPTION_BOTTOM'] ?></p>
    <? } ?>

    <div class="result">
        <div><?= GetMessage('EZH_PLAT') ?><br>
            <span class="ezh_plat"></span>
        </div>
        <div><?= GetMessage('FULL_CREDIT') ?><br>
            <span class="full_credit"></span>
        </div>
        <div><?= GetMessage('PEREPLATA') ?><br>
            <span class="pereplata"></span>
        </div>
        <div><?= GetMessage('SUMM_RESULT') ?><br>
            <span class="summ_credit"></span>
        </div>
    </div>
    <? if ($arResult['CALC']['TABLE_CHECKBOX'] == 'Y') { ?>
        <div class="result_table">
            <h2><?= GetMessage('TABLE_NAME') ?></h2>
            <table>

            </table>
        </div>
    <? } ?>
</div>