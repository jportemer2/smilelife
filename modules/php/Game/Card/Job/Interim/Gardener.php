<?php

namespace SmileLife\Card\Job\Interim;

use SmileLife\Card\CardType;
use SmileLife\Module\BaseGame;

/**
 * Description of Gardener
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Gardener extends Interim implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Gardener'))
                ->setText1(clienttranslate('You’re an ecologist'));
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
        return CardType::CARD_TYPE_GARDENER;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Job
     * ---------------------------------------------------------------------- */
}
