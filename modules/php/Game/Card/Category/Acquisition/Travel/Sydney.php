<?php

namespace SmileLife\Card\Category\Acquisition\Travel;

use SmileLife\Card\CardType;
use SmileLife\Card\Category\Acquisition\Travel\Travel;
use SmileLife\Card\Module\BaseGame;

/**
 * Description of SydneyTravel
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Sydney extends Travel implements BaseGame {

    public function __construct() {
        parent::__construct();

        $this->setSubtitle(clienttranslate('Sydney'));
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getType(): int {
        return CardType::TRAVEL_SYDNEY;
    }

    public function getClass(): string {
        return self::class;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Travel 
     * ---------------------------------------------------------------------- */
}
