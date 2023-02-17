<?php

namespace SmileLife\Game\Card\Category\Special;

use SmileLife\Game\Card\Core\CardType;
use SmileLife\Game\Card\Core\Exception\CardException;
use SmileLife\Game\Card\Effect\Effect;
use SmileLife\Game\Card\Module\BaseGame;

/**
 * Description of SpecialRevenge
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class SpecialRevenge extends Special implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Revenge'))
                ->setText1(clienttranslate('Inflict a penalty on another player'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getClass(): string {
        return self::class;
    }

    public function getEffect(): Effect {
        throw new CardException("C-SpecialRevenge-01 : Not implemented yet");
    }

    public function getType(): int {
        return CardType::SPECIAL_REVENGE;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Special
     * ---------------------------------------------------------------------- */
}
