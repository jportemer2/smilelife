<?php

namespace SmileLife\Card\Job\Official;

use SmileLife\Card\CardType;
use SmileLife\Criterion\Factory\Card\CardCriterionFactory;
use SmileLife\Criterion\Factory\Job\PolicemanCriterionFactory;
use SmileLife\Module\BaseGame;

/**
 * Description of Policeman
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Policeman extends Official implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Policemen'))
                ->setText1(clienttranslate('No gurus or bandits in your presence'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Override
     * ---------------------------------------------------------------------- */

    public function hasPower(): bool {
        return true;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getClass(): string {
        return self::class;
    }

    public function getMaxSalary(): int {
        return 1;
    }

    public function getRequiredStudies(): int {
        return 1;
    }

    public function getType(): int {
        return CardType::CARD_TYPE_POLICEMEN;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract - Overwride
     * ---------------------------------------------------------------------- */

    public function getCriterionFactory(): CardCriterionFactory {
        return new PolicemanCriterionFactory();
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Job
     * ---------------------------------------------------------------------- */
}
