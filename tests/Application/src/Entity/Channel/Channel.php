<?php

declare(strict_types=1);

namespace Tests\FitraTech\SyliusFacebookMessengerPlugin\Entity\Channel;

use Doctrine\ORM\Mapping as ORM;
use FitraTech\SyliusFacebookMessengerPlugin\Model\ChannelInterface as FacebookMessengerChannelInterface;
use FitraTech\SyliusFacebookMessengerPlugin\Model\ChannelTrait as FacebookMessengerChannelTrait;
use Sylius\Component\Core\Model\Channel as BaseChannel;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_channel")
 */
class Channel extends BaseChannel implements FacebookMessengerChannelInterface
{
    use FacebookMessengerChannelTrait;
}
