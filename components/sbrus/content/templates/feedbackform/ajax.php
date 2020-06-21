<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
use Bitrix\Main;

if(!Main\Loader::includeModule('iblock'))
{
    return;
}

$arrPost  = $_POST;

if ( $arrPost ) {

    $Struct  = \Bitrix\Iblock\IblockTable::getList ([ "filter" => [ "CODE" => "feedbackform"]]) ->fetchAll();

    $arrElem["NAME"]                = "Заполнена форма обратной связи";
    $arrElem["IBLOCK_ID"]           = $Struct[0]["ID"];
    $arrElem["PROPERTY_VALUES"]     = $arrPost;

    $iblock = new CIBlockElement;

    $result = $iblock->Add( $arrElem );

    $arrFields = [
        "NAME" => $arrPost['NAME'],
        "EMAIL" => $arrPost['EMAIL'],
        "PHONE" => $arrPost['PHONE'],
        "TEXT" => $arrPost['TEXT'],
    ];

    \CEvent::Send("FEEDBACK_FORM_", "s1", $arrFields);

}