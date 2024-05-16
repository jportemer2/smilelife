<?php

namespace SmileLife\Criterion\Factory\Special;

use SmileLife\Card\Card;
use SmileLife\Consequence\Generic\GenericCardPlayedConsequence;
use SmileLife\Criterion\CriterionInterface;
use SmileLife\Criterion\Factory\Card\PlayFromDiscardCriterionFactory;
use SmileLife\Table\PlayerTable;

/**
 * Description of JobBoostCriterionFactory
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class ShootingStarCriterionFactory extends PlayFromDiscardCriterionFactory {

    /**
     * 
     * @param PlayerTable $table : Game table of the player who plays
     * @param Card $card : The card that is played
     * @param PlayerTable $opponentTable : Game table of player targeted by attack
     * @param Card[] $complementaryCards : Other cards chosen as part of purchase by example(useless here)
     * @return CriterionInterface
     */
    public function getCardCriterion(PlayerTable $table, Card $card, PlayerTable $opponentTable = null, array $complementaryCards = null): CriterionInterface {
        $criterion = parent::getCardCriterion($table, $card, $opponentTable, $complementaryCards);

        $criterion->addConsequence(new GenericCardPlayedConsequence($card, $table));

        return $criterion;
    }
}
