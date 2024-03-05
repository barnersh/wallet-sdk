<?php

namespace Elvis\WalletSdk\Models;

interface CoinInterface
{
    /**
     * 小數位數
     *
     * @return int|null
     */
    public function decimals(): int|null;

    /**
     * 合約地址
     *
     * @return string|null
     */
    public function contract(): string|null;

    /**
     * 所屬鏈
     *
     * @return ChainInterface
     */
    public function chain(): ChainInterface;

    /**
     * 是否為燃料幣種
     *
     * @return bool
     */
    public function isFuel(): bool;

    /**
     * 是否合乎該幣別規則(位數)
     *
     * @param $amount
     * @return bool
     */
    public function isValidAmount($amount): bool;

    /**
     * 用來取得 CoinInterface 對應顯示字串
     *
     * @return string
     */
    public function getLabel(): string;
}