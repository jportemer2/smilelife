<?php

namespace SmileLife\Game\Game;

use Core\Managers\PlayerManager;
use SmileLife\Game\Card\Core\CardDecorator;
use SmileLife\Game\Card\Core\CardManager;
use SmileLife\Game\Card\Core\CardType;
use SmileLife\Game\Table\PlayerTableDecorator;
use SmileLife\Game\Table\PlayerTableManager;

/**
 * Description of GameDataRetriver
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class GameDataRetriver {

    /**
     * 
     * @var PlayerManager
     */
    private $playerManager;

    /**
     * 
     * @var CardManager
     */
    private $cardManager;

    /**
     * 
     * @var PlayerTableManager
     */
    private $playerTableManager;

    /**
     * 
     * @var CardDecorator
     */
    private $cardDecorator;

    /**
     * 
     * @var PlayerTableDecorator
     */
    private $playerTableDecorator;

    public function __construct() {
        $this->playerManager = new PlayerManager();
        $this->cardManager = new CardManager();
        $this->cardDecorator = new CardDecorator($this->cardManager->getSerializer());
        $this->playerTableManager = new PlayerTableManager();
        $this->playerTableDecorator = new PlayerTableDecorator();

        $this->playerTableManager->setIsDebug(true);
    }

    public function retrive(int $playerId) {
        $currentPlayer = $this->playerManager->findBy([
            "id" => $playerId
        ]); // !! We must only return informations visible by this player !!

        $rawHand = $this->cardManager->getPlayerCards($currentPlayer);

        $result = [
            "myhand" => $this->cardDecorator->decorateRawCard($rawHand),
            "deck" => count($this->cardManager->getAllCardsInDeck())
        ];

        $players = $this->playerManager->findBy();
        $this->cardManager->setIsDebug(true);

        foreach ($players as $player) {
            $result['player'][$player->getId()]["hand"] = count($this->cardManager->getPlayerCards($player));

            $table = $this->playerTableManager->findBy([
                "id" => $player->getId()
            ]);

            $this->playerTableManager->updateTable($table);
            $result['player'][$player->getId()]["table"] = $this->playerTableDecorator->decorateTable($table);
        }
//        echo "<pre>";
//        var_dump($result);
//        die;
        return $result;
    }

}
