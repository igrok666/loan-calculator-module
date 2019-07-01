<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    "PARAMETERS" => array(
        "JQUERY" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("JQUERY"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
        ),
        "NAME" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("NAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "DESCRIPTION_TOP" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("DESCRIPTION_TOP"),
            "TYPE" => "TEXT",
            "DEFAULT" => "",
        ),
        "DESCRIPTION_BOTTOM" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("DESCRIPTION_BOTTOM"),
            "TYPE" => "TEXT",
            "DEFAULT" => "",
        ),
        "SUMM" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SUMM"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "MIN_SUMM" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("MIN_SUMM"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "MAX_SUMM" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("MAX_SUMM"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "SHAG_SUMM" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SHAG_SUMM"),
            "TYPE" => "STRING",
            "DEFAULT" => "1",
        ),
        "PROCENT_CHECKBOX" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("PROCENT_CHECKBOX"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "",
        ),
        "PROCENT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("PROCENT"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "TABLE_CHECKBOX" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("TABLE_CHECKBOX"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "",
        ),
        "SROK_DEFAULT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SROK_DEFAULT"),
            "TYPE" => "STRING",
            "DEFAULT" => "1",
        ),
        "SROK_SHAG" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SROK_SHAG"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "SROK_MIN" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SROK_MIN"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "SROK_MAX" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("SROK_MAX"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "CACHE_TIME"  =>  Array("DEFAULT"=>3600000),
    ),
);