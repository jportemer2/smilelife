<?php

namespace SmileLife\Card\Special;

use SmileLife\Card\CardType;
use SmileLife\Card\Wage\Wage;
use SmileLife\Criterion\Factory\Card\CardCriterionFactory;
use SmileLife\Criterion\Factory\Special\InheritanceCriterionFactory;
use SmileLife\Module\BaseGame;

/**
 * Description of Inheritance
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Inheritance extends Wage implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Inheritance'))
                ->setText1(clienttranslate('This money is yours to keep'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getClass(): string {
        return self::class;
    }

    public function getType(): int {
        return CardType::CARD_TYPE_INHERITANCE;
    }

    public function getCriterionFactory(): CardCriterionFactory {
        return new InheritanceCriterionFactory();
    }

    public function getBaseCardCount(): int {
        return 1;
    }

    public function getAmount(): int {
        return 3;
    }

    public function getPileName(): string {
        return "special";
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Special
     * ---------------------------------------------------------------------- */
}
