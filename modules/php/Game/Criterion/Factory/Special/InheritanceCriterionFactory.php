<?php

namespace SmileLife\Criterion\Factory\Special;

use SmileLife\Card\Card;
use SmileLife\Card\Criterion\Factory\Category\CardPlayableCriterionFactory;
use SmileLife\Consequence\Wage\WageLevelIncriseConsequence;
use SmileLife\Criterion\CriterionInterface;
use SmileLife\Table\PlayerTable;

/**
 * Description of InheritanceCriterionFactory
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class InheritanceCriterionFactory extends CardPlayableCriterionFactory {

    /**
     * 
     * @param PlayerTable $table : Game table of the player who plays (useless here)
     * @param Card $card : The card that is played
     * @param PlayerTable $opponentTable : Game table of player targeted by attack (useless here)
     * @param Card[] $complementaryCards : Other cards chosen as part of purchase by example(useless here)
     * @return CriterionInterface
     */
    public function getCardCriterion(PlayerTable $table, Card $card, PlayerTable $opponentTable = null, array $complementaryCards = null): CriterionInterface {
        $criterion = parent::getCardCriterion($table, $card, $opponentTable, $complementaryCards);

        $criterion
                ->addConsequence(new WageLevelIncriseConsequence($card, $table));

        return $criterion;
    }
}
