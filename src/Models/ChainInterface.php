<?php

namespace Elvis\WalletSdk\Models;

interface ChainInterface
{
    public function blockGenerateTime(): int;
    public function getChainCoin(): string;
    public function isValidAddress($address): bool;
}