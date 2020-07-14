<?php
declare(strict_types=1);

namespace FitraTech\SyliusFacebookMessengerPlugin\Model;


trait ChannelTrait
{
    /**
     * @var bool
     *
     * @ORM\Column(type="boolean", name="enable_facebook_messenger", nullable=true)
     */
    private $enableFacebookMessenger = false;

    /**
     * @var string
     *
     * @ORM\Column(type="string", name="facebook_page_id", nullable=true)
     */
    private $facebookPageId = '';

    public function setEnableFacebookMessenger(?bool $enableFacebookMessenger): void
    {
        $this->enableFacebookMessenger = $enableFacebookMessenger;
    }

    public function isEnableFacebookMessenger(): ?bool
    {
        return $this->enableFacebookMessenger;
    }

    /**
     * @return string
     */
    public function getFacebookPageId(): ?string
    {
        return $this->facebookPageId;
    }

    /**
     * @param string $facebookPageId
     */
    public function setFacebookPageId(?string $facebookPageId): void
    {
        $this->facebookPageId = $facebookPageId;
    }
}
