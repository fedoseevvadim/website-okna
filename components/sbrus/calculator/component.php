<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

/** @global CIntranetToolbar $INTRANET_TOOLBAR */
global $INTRANET_TOOLBAR;

use Bitrix\Main\Context,
    Bitrix\Main\Type\DateTime,
    Bitrix\Main\Loader,
    Bitrix\Iblock;

Loader::includeModule('iblock');

//function getIblock ( $Code ) {
// Получаем тип окон
$Code = "calculatorTypeOfWindow";

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
    "ACTIVE_FROM",
    "PREVIEW_PICTURE",
];

$rsIBlock = CIBlock::GetList(array(), array(
    "ACTIVE" => "Y",
    "CODE" => $Code,
    "SITE_ID" => SITE_ID,
));

$arr = $rsIBlock->GetNext();

$arFilter = array (
    "IBLOCK_ID" => $arr["ID"],
    "IBLOCK_TYPE" => "WebsiteContent",
    "IBLOCK_LID" => SITE_ID,
    "ACTIVE" => "Y",
);

$rsElement = CIBlockElement::GetList ( "", $arFilter, false, false, $arSelect );
while ( $obElement = $rsElement->GetNextElement() ) {

    $arItems[] = $obElement->GetFields();
}

$arResult["TYPE_OF_WINDOW"] = $arItems;

// Получаем режим открывания
$Code = "openingMode";
$arItems = [];

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
    "ACTIVE_FROM",
    "PREVIEW_PICTURE",
    "PROPERTY_*"
];

$rsIBlock = CIBlock::GetList(array(), array(
    "ACTIVE" => "Y",
    "CODE" => $Code,
    "SITE_ID" => SITE_ID,
));

$arr = $rsIBlock->GetNext();

$arFilter = array (
    "IBLOCK_ID" => $arr["ID"],
    "IBLOCK_TYPE" => "WebsiteContent",
    "IBLOCK_LID" => SITE_ID,
    "ACTIVE" => "Y",
);

$rsElement  = CIBlockElement::GetList ( "", $arFilter, false, false, $arSelect );
$i          = 0;

while ( $obElement = $rsElement->GetNextElement() ) {

    $arItems[$i]["PROPERTIES"]   = $obElement->GetProperties();
    $arItems[$i]["FIELDS"]       = $obElement->GetFields();
    $i++;

}

$arResult["OPENING_MODE"] = $arItems;

// Профиль
$Code = "calculatorWindowShape";
$arItems = [];

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
    "ACTIVE_FROM",
    "PREVIEW_PICTURE",
    "PROPERTY_*"
];

$rsIBlock = CIBlock::GetList(array(), array(
    "ACTIVE" => "Y",
    "CODE" => $Code,
    "SITE_ID" => SITE_ID,
));

$arr = $rsIBlock->GetNext();

$arFilter = array (
    "IBLOCK_ID" => $arr["ID"],
    "IBLOCK_TYPE" => "WebsiteContent",
    "IBLOCK_LID" => SITE_ID,
    "ACTIVE" => "Y",
);

$rsElement  = CIBlockElement::GetList ( "", $arFilter, false, false, $arSelect );
$i          = 0;

while ( $obElement = $rsElement->GetNextElement() ) {

    $arItems[$i]["PROPERTIES"]   = $obElement->GetProperties();
    $arItems[$i]["FIELDS"]       = $obElement->GetFields();
    $i++;

}


$arResult["SHAPE"] = $arItems;



// Профиль
$Code = "calculatorWindowShape";
$arItems = [];

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
    "ACTIVE_FROM",
    "PREVIEW_PICTURE",
    "PROPERTY_*"
];

$rsIBlock = CIBlock::GetList(array(), array(
    "ACTIVE" => "Y",
    "CODE" => $Code,
    "SITE_ID" => SITE_ID,
));

$arr = $rsIBlock->GetNext();

$arFilter = array (
    "IBLOCK_ID" => $arr["ID"],
    "IBLOCK_TYPE" => "WebsiteContent",
    "IBLOCK_LID" => SITE_ID,
    "ACTIVE" => "Y",
);

$rsElement  = CIBlockElement::GetList ( "", $arFilter, false, false, $arSelect );
$i          = 0;

while ( $obElement = $rsElement->GetNextElement() ) {

    $arItems[$i]["PROPERTIES"]   = $obElement->GetProperties();
    $arItems[$i]["FIELDS"]       = $obElement->GetFields();
    $i++;

}


$arResult["SHAPE"] = $arItems;



//  Прайс
$Code = "calculatorPrice";
$arItems = [];

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "NAME",
    "ACTIVE_FROM",
    "PREVIEW_PICTURE",
    "PROPERTY_*"
];

$rsIBlock = CIBlock::GetList(array(), array(
    "ACTIVE" => "Y",
    "CODE" => $Code,
    "SITE_ID" => SITE_ID,
));

$arr = $rsIBlock->GetNext();

$arFilter = array (
    "IBLOCK_ID" => $arr["ID"],
    "IBLOCK_TYPE" => "WebsiteContent",
    "IBLOCK_LID" => SITE_ID,
    "ACTIVE" => "Y",
);

$rsElement  = CIBlockElement::GetList ( "", $arFilter, false, false, $arSelect );
$i          = 0;

while ( $obElement = $rsElement->GetNextElement() ) {

    $arItems[$i]["PROPERTIES"]   = $obElement->GetProperties();
    $arItems[$i]["FIELDS"]       = $obElement->GetFields();
    $i++;

}

$arResult["PRICE"] = $arItems;

$this->includeComponentTemplate();