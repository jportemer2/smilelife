<?php

namespace SmileLife\Card\Reward;

use SmileLife\Card\Card;

/**
 * Description of Reward
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
abstract class Reward extends Card {
    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getCategory(): string {
        return "reward";
    }

    public function getPileName(): string {
        return "special";
    }

    public function getDefaultPassTurn(): int {
        return 0;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Display
     * ---------------------------------------------------------------------- */

    public function __toString() {
        return $this->getTitle();
    }
}
