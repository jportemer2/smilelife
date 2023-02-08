<?php

namespace SmileLife\Game\Card\Category\Job\Job;

use SmileLife\Game\Card\Category\Job\Job;
use SmileLife\Game\Card\Core\CardType;
use SmileLife\Game\Card\Module\BaseGame;

/**
 * Description of Bandit
 *
 * @author Mr_Kywar mr_kywar@gmail.com
 */
class Doctor extends Job implements BaseGame {
    /* -------------------------------------------------------------------------
     *                  BEGIN - Abstract
     * ---------------------------------------------------------------------- */

    public function getClass(): string {
        return self::class;
    }

    public function getMaxSalary(): int {
        return 4;
    }

    public function getRequiredStudies(): int {
        return 6;
    }

    public function getType(): int {
        return CardType::JOB_DOCTOR;
    }
    
    /* -------------------------------------------------------------------------
     *                  BEGIN - Implement BaseGame is in Job
     * ---------------------------------------------------------------------- */
}
