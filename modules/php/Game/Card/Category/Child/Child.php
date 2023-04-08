<?php

namespace SmileLife\Card\Category\Child;

use SmileLife\Card\Card;
use SmileLife\Card\Core\Exception\CardException;
use SmileLife\Table\PlayerTable;

/**
 * Description of Child
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
abstract class Child extends Card {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Child'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function canBeAttacked(): bool {
        return true;
    }

    public function canBePlayed(PlayerTable $table): bool {
        throw new CardException("C-Child-01 : check if the required job are fulfilled");
    }

    public function getSmilePoints(): int {
        return 2;
    }

    public function getCategory(): string {
        return "child";
    }
    
    public function getPileName(): string {
        return "child";
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame (1 card in each type)
     * ---------------------------------------------------------------------- */

    public function getBaseCardCount(): int {
        return 1;
    }

}
