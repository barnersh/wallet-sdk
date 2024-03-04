<?php

namespace Elvis\WalletSdk\Enums;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Facades\Lang;

enum NotifyStatus: int implements HasLabel, HasColor
{
    case NONE = 0; // 未通知
    case PENDING = 1; // 等待通知
    case SENDING = 2; // 通知中
    case SUCCESS = 3; // 通知成功
    case FAILED = 4; // 通知失敗

    public function getLabel(): string
    {
        return match ($this) {
            static::NONE => Lang::get('wallet-sdk::enums/NotifyStatus.none'),
            static::PENDING => Lang::get('wallet-sdk::enums/NotifyStatus.pending'),
            static::SENDING => Lang::get('wallet-sdk::enums/NotifyStatus.sending'),
            static::SUCCESS => Lang::get('wallet-sdk::enums/NotifyStatus.success'),
            static::FAILED => Lang::get('wallet-sdk::enums/NotifyStatus.failed'),
        };
    }

    public function getColor(): array
    {
        return match ($this) {
            static::SUCCESS => Color::Green,
            static::FAILED => Color::Red,
            default => Color::Gray,
        };
    }
}

