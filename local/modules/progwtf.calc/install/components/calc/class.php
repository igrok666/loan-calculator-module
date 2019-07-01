<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class ProgWTF_Calc extends CBitrixComponent {

    public function onPrepareComponentParams($arParams)
    {
        $arParams['CALC']['SUMM'] = (int) $arParams['SUMM'];
        $arParams['CALC']['PROCENT'] = (float) $arParams['PROCENT'];
        $arParams['CALC']['MIN_SUMM'] = (int) $arParams['MIN_SUMM'];
        $arParams['CALC']['MAX_SUMM'] = (int) $arParams['MAX_SUMM'];
        $arParams['CALC']['SHAG_SUMM'] = (int) $arParams['SHAG_SUMM'];
        $arParams['CALC']['SROK_DEFAULT'] = (int) $arParams['SROK_DEFAULT'];
        $arParams['CALC']['SROK_SHAG'] = (int) $arParams['SROK_SHAG'];
        $arParams['CALC']['SROK_MIN'] = (int) $arParams['SROK_MIN'];
        $arParams['CALC']['SROK_MAX'] = (int) $arParams['SROK_MAX'];
        return $arParams;
    }

    private function setarResult(){
        $this->arResult['CALC'] = $this->arParams['CALC'];
        $this->arResult['CALC']['NAME'] = $this->arParams['NAME'];
        $this->arResult['CALC']['DESCRIPTION_TOP'] = $this->arParams['DESCRIPTION_TOP'];
        $this->arResult['CALC']['DESCRIPTION_BOTTOM'] = $this->arParams['DESCRIPTION_BOTTOM'];
        $this->arResult['CALC']['JQUERY'] = $this->arParams['JQUERY'];
        $this->arResult['CALC']['PROCENT_CHECKBOX'] = $this->arParams['PROCENT_CHECKBOX'];
        $this->arResult['CALC']['TABLE_CHECKBOX'] = $this->arParams['TABLE_CHECKBOX'];
    }

    public function executeComponent()
    {
        if($this->StartResultCache()){
            $this->setarResult();
            $this->setResultCacheKeys(array('CALC'));
            $this->IncludeComponentTemplate();
        }
    }
}