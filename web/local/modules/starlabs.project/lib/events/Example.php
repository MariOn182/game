<?
namespace StarLabs\Project\Events;

use Bitrix\Main\EventManager;
use Bitrix\Main\Event;

class Example implements HandlerInterface
{

    public static function setHandlers()
    {
        $eventManager = EventManager::getInstance();

//        $eventManager->addEventHandler(
//            'sale',
//            'OnSaleOrderCanceled',
//            [self::class, 'OnSaleOrderCanceled']
//        );
    }

    public function OnSaleOrderCanceled(Event $event)
    {

    }

}