<?php

namespace SmileLife\Card\Consequence\Category\Special;

use Core\Notification\Notification;
use Core\Requester\Response\Response;
use SmileLife\Card\CardManager;
use SmileLife\Card\Core\CardDecorator;
use SmileLife\Card\Core\CardLocation;
use SmileLife\Table\PlayerTable;

/**
 * Description of RainbowConsequence
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class RainbowConsequence extends SpecialNextStateConsequence {

    /**
     * 
     * @var CardManager
     */
    private $cardManager;

    /**
     * 
     * @var CardDecorator
     */
    private $cardDecorator;

    public function __construct(PlayerTable $table) {
        parent::__construct($table, 'rainbowAction');
        $this->cardManager = new CardManager();
        $this->cardDecorator = new CardDecorator();
    }

    public function execute(Response &$response) {
        parent::execute($response);

        $player = $this->table->getPlayer();
        
        $notification = new Notification();
        $notification->setType("rainbowNotification")
                ->setText(clienttranslate('${player_name} play rainbow and can play more than one card'))
                ->add('player_name', $player->getName());
        $response->addNotification($notification);

        return $response;
    }
}
