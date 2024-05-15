<?php

namespace SmileLife\Consequence\Attack;

use Core\Notification\Notification;
use Core\Requester\Response\Response;
use SmileLife\Consequence\Generic\DiscardConsequence;

/**
 * Description of OffsideConsequence
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class OffsideConsequence extends DiscardConsequence {

    public function execute(Response &$response) {
        $player = $this->table->getPlayer();

        $this->cardManager->offsideCard($this->card, $player);

        $notification = new Notification();

        $discardedCards = $this->cardManager->getAllCardsInOffside();

        $notification->setType("offsideNotification")
                ->setText(clienttranslate('${player_name} offside ${cardName}'))
                ->add('player_name', $player->getName())
                ->add('playerId', $player->getId())
                ->add('cards', [$this->cardDecorator->decorate($this->card)])
                ->add('cardName', (string) $this->card)
                ->add('offside', $this->cardDecorator->decorate($discardedCards))
                ->add('table', $this->tableDecorator->decorate($this->table))
        ;

        $response->addNotification($notification);

        return $this;
    }
}
