<?php

namespace SmileLife\Card\Job\Job;

use SmileLife\Card\CardType;
use SmileLife\Card\Effect\CardEffectInterface;
use SmileLife\Card\Effect\Category\DivorceImuneEffect;
use SmileLife\Card\Effect\Effect;
use SmileLife\Card\Job\Job;
use SmileLife\Module\BaseGame;

/**
 * Description of Lawyer
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Lawyer extends Job implements BaseGame, CardEffectInterface {

    /**
     * 
     * @var Effect
     */
    private $effects;

    public function __construct() {
        parent::__construct();

        $this->setTitle(clienttranslate('Lawyer'))
                ->setText1(clienttranslate('No-one can divorce you'));

        $this->effects = [new DivorceImuneEffect()];
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
        return 3;
    }

    public function getRequiredStudies(): int {
        return 4;
    }

    public function getType(): int {
        return CardType::CARD_TYPE_LAWYER;
    }

    /**
     * 
     * @return Effect[]
     */
    public function getEffects(): array {
        return $this->effects;
    }

    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Job
     * ---------------------------------------------------------------------- */
}
