<?php

namespace SmileLife\Card\Category\Love\Wedding;

use SmileLife\Card\Category\Love\Love;
use SmileLife\Card\Core\Exception\CardException;
use SmileLife\Table\PlayerTable;

/**
 * Description of Wedded
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
abstract class Wedding extends Love {

    private const SMILE_POINTS = 3;

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Marriage'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function canBeAttacked(): bool {
        return true;
    }

    public function canBePlayed(PlayerTable $table): bool {
        throw new CardException("C-Wedding01 : Check that the player is not married and has already at least a flirt");
    }

    public function canGenerateChild(): bool {
        return true;
    }

    public function getSmilePoints(): int {
        return self::SMILE_POINTS;
    }

    public function getCategory(): string {
        return "marriage";
    }

    public function getPileName(): string {
        return "love";
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame (1 card in each type)
     * ---------------------------------------------------------------------- */

    public function getBaseCardCount(): int {
        return 1;
    }

}
