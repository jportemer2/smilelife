<?php

namespace SmileLife\Criterion\ShowPile;

use SmileLife\Card\Card;
use SmileLife\Card\Core\CardLocation;
use SmileLife\Criterion\Card\PlayerTable\PlayerTableCriterion;
use SmileLife\Table\PlayerTable;

/**
 * Description of CardPileShowableCriterion
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class CardPileShowableCriterion extends PlayerTableCriterion {

    /**
     * 
     * @var Card
     */
    private $card;
    private $pileName;

    public function __construct(PlayerTable $table, Card $card, string $pilename) {
        parent::__construct($table);
        $this->card = $card;
        $this->pileName = $pilename;
    }

    public function isValided(): bool {
        return (
                $this->getTable()->getId() === $this->card->getLocationArg() &&
                CardLocation::PLAYER_BOARD === $this->card->getLocation() &&
                $this->card->getPileName() === $this->pileName
                );
    }
}
