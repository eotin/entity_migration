<?php

namespace App\Entity\Gateway\DTO;

class GatewayDiagnosisErrorDTO
{
    // Gateway Errors

    public const GW_ONLINE_EC = 0;  // Working normally
    public const GW_NOT_RESPONDING_EC = 1;
    public const GW_LOW_POWER_EC = 2;
    public const GW_PENDING_MSG_EC = 3;
    public const GW_BAD_POLL_INTERVAL_EC = 4;
    public const GW_SELFTEST_FAILED_EC = 5;
    public const GW_OPTEST_FAILED_EC = 6;

    public string $information;
    public int $errorCode;
    public array $custom = [];

    public function __construct(string $information, int $errorCode) {
        $this->information = $information;
        $this->errorCode = $errorCode;
    }

    /**
     * Add a custom message
     * @param string $key
     * @param string $message
     * @return void
     */
    public function addCustomMessage(string $key, string $message):void {
        $this->custom[$key] = $message;
    }

    /**
     * Returns true if there are custom messages
     * @return bool
     */
    public function hasCustomMessages():bool {
        return count($this->custom) > 0;
    }

    /**
     * Return all custom messages as a single string
     * @return string|null
     */
    public function getConcatenatedCustomMessages(): ?string {
        return join(". ",$this->custom);
    }
}
