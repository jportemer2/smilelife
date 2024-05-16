<?php

namespace SmileLife\Criterion\Factory\Love;

use SmileLife\Card\Card;
use SmileLife\Card\Criterion\Factory\Category\CardPlayableCriterionFactory;
use SmileLife\Consequence\Love\AdulteryPlayedConsequence;
use SmileLife\Criterion\Card\Love\HaveAdulteryCriterion;
use SmileLife\Criterion\Card\Love\IsMarriedCriterion;
use SmileLife\Criterion\CriterionGroup;
use SmileLife\Criterion\CriterionInterface;
use SmileLife\Criterion\InversedCriterion;
use SmileLife\Table\PlayerTable;

/**
 * Description of AdulteryCriterionFactory
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class AdulteryCriterionFactory extends CardPlayableCriterionFactory {

    /**
     * 
     * @param PlayerTable $table : Game table of the player who plays
     * @param Card $card : The card that is played
     * @param PlayerTable $opponentTable : Game table of player targeted by attack (useless here)
     * @param Card[] $complementaryCards : Other cards chosen as part of purchase by example(useless here)
     * @return CriterionInterface
     */
    public function getCardCriterion(PlayerTable $table, Card $card, PlayerTable $opponentTable = null, array $complementaryCards = null): CriterionInterface {
        $noAdulteryCriterion = new InversedCriterion(new HaveAdulteryCriterion($table));
        $noAdulteryCriterion->setErrorMessage(clienttranslate('You are already involved in an adulterous relationship'));

        $marriageAdultery = new IsMarriedCriterion($table);
        $marriageAdultery->setErrorMessage(clienttranslate('Before starting an adulterous relationship, you must be married.'));

        $criteria = new CriterionGroup([
            $noAdulteryCriterion,
            $marriageAdultery
                ], CriterionGroup::AND_OPERATOR);

        $criteria->addConsequence(new AdulteryPlayedConsequence($card, $table));

        return $criteria;
    }
}
