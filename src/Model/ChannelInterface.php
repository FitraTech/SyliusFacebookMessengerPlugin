<?php

declare(strict_types=1);

namespace FitraTech\SyliusFacebookMessengerPlugin\Model;


interface ChannelInterface
{
    public function setEnableFacebookMessenger(?bool $availableOnDemand): void;

    public function isEnableFacebookMessenger(): ?bool;

    public function setFacebookPageId(?string $facebookPageId): void;

    public function getFacebookPageId(): ?string;
}
