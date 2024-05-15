<?php

namespace SmileLife\Consequence\Special;

use SmileLife\Card\Card;
use SmileLife\Table\PlayerTable;

/**
 * Description of TrocWithProtectedCardConsequence
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class TrocWithProtectedCardConsequence extends TrocConsequence {

    /**
     * 
     * @var Card
     */
    private $protectedCard;

    public function __construct(PlayerTable $table, PlayerTable $opponentTable, Card $protectedCard) {
        parent::__construct($table, $opponentTable);
        $this->protectedCard = $protectedCard;
    }

    protected function getGivableCards() {
        $cards = [];
        foreach ($this->cardManager->getPlayerCards($this->getPlayer()) as $card) {
            if ($this->protectedCard->getId() !== $card->getId()) {
                $cards[] = $card;
            }
        }
        return $cards;
    }
}
