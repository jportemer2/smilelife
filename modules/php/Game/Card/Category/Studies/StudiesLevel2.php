<?php

namespace SmileLife\Game\Card\Category\Studies;

use SmileLife\Game\Card\CardType;
use SmileLife\Game\Card\Module\BaseGame;

/**
 * Description of StudiesLevel2
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class StudiesLevel2 extends Studies implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setText1(clienttranslate('You’re a genius!'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getLevel(): int {
        return 2;
    }

    public function getClass(): string {
        return self::class;
    }

    public function getType(): int {
        return CardType::STUDY_DOUBLE;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame
     * ---------------------------------------------------------------------- */

    public function getBaseCardCount(): int {
        return 3;
    }

}
