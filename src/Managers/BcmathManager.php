<?php

namespace Elvis\WalletSdk\Managers;

class BcmathManager
{
    const SCALE = 3;

    public function add($left, $right, $scale = self::SCALE)
    {
        return bcadd($left, $right, $scale);
    }

    public function between(string $amount, string $left, string $right, $scale = self::SCALE)
    {
        return bccomp($amount, $left, $scale) >= 0 && bccomp($amount, $right, $scale) <= 0;
    }

    public function div($left, $right, $scale = self::SCALE)
    {
        return bcdiv($left, $right, $scale);
    }

    public function gt(string $left, string $right, $scale = self::SCALE)
    {
        return bccomp($left, $right, $scale) > 0;
    }

    public function gtZero(string $left, $scale = self::SCALE)
    {
        return bccomp($left, 0, $scale) > 0;
    }

    public function lt(string $left, string $right, $scale = self::SCALE)
    {
        return bccomp($left, $right, $scale) < 0;
    }

    public function lteZero(string $left, $scale = self::SCALE)
    {
        return bccomp($left, 0, $scale) <= 0;
    }

    public function mul($left, $right, $scale = self::SCALE)
    {
        return bcmul($left, $right, $scale);
    }

    public function mulPercent($left, $right, $scale = self::SCALE)
    {
        return bcmul(
            $left,
            bcdiv($right, 100, self::SCALE ** 2),
            $scale
        );
    }

    public function negativeOf($left, $scale = self::SCALE)
    {
        return bcmul($left, '-1', $scale);
    }

    public function notEq(string $left, string $right, $scale = self::SCALE)
    {
        return bccomp($left, $right, $scale) !== 0;
    }

    public function positiveOf($left, $scale = self::SCALE)
    {
        if ($this->ltZero($left, $scale)) {
            return bcmul($left, '-1', $scale);
        }

        return bcmul($left, '1', $scale);
    }

    public function ltZero(string $left, $scale = self::SCALE)
    {
        return bccomp($left, 0, $scale) < 0;
    }

    public function sub($left, $right, $scale = self::SCALE)
    {
        return bcsub($left, $right, $scale);
    }

    public function subMinZero($left, $right, $scale = self::SCALE)
    {
        if ($this->gte($right, $left, $scale)) {
            return '0';
        }

        return bcsub($left, $right, $scale);
    }

    public function gte(string $left, string $right, $scale = self::SCALE)
    {
        return bccomp($left, $right, $scale) >= 0;
    }

    public function truncate($amount)
    {
        return preg_replace('/(?:(\.\d*[1-9])0+|\.0*)$/', '$1', $amount);
    }

    public function pow($num, $exponent, $scale = self::SCALE)
    {
        return bcpow($num, $exponent, $scale);
    }
}
