<?php

namespace SmileLife\Game\PlayerAction;

use SmileLife\Game\Card\Core\CardDecorator;
use SmileLife\Game\Card\Core\CardSerializer;
use SmileLife\Game\Table\PlayerTableDecorator;
use SmileLife\Game\UserEffect\MoveCard\DiscardCardEffect;

/**
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
trait PassTrait {

    public function actionDiscardAndPass($cardId) {
        $playerId = self::getCurrentPlayerId();
        $tableDecorator = new PlayerTableDecorator();
        $cardDecorator = new CardDecorator(new CardSerializer());

        $player = $this->playerManager->findOne([
            "id" => $playerId
        ]);
        $card = $this->cardManager->findBy([
            "id" => $cardId
        ]);
        $this->cardManager->discardCard($card, $player);

        self::notifyAllPlayers('passNotification', clienttranslate('${player_name} pass and discard ${cardName}'), [
            'playerId' => $playerId,
            'player_name' => $player->getName(),
            'card' => $cardDecorator->decorate($card),
            'cardName' => $card->getTitle(),
            'effects' => [
                (array) new DiscardCardEffect($player, $card)
            ]
        ]);

        $this->gamestate->nextState("playPass");
    }

}
