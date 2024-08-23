<?php

namespace App\Entity\Gateway\DTO;

use App\Entity\Gateway\GatewayDevice;

class GatewayDiagnosisDTO
{
    public GatewayDevice $gateway;
    public int $gatewayId;
    public float $downtime;
    public int $pendingMessages;
    /**
     * @var GatewayDiagnosisErrorDTO[]
     */
    public array $errors = [];

    public function __construct(GatewayDevice $gateway) {
        $this->gateway = $gateway;
        $this->gatewayId = $gateway->getId();
    }

    /**
     * Add a diagnosis error
     * @param string $information
     * @param int $errorCode
     * @param array|null $custom
     * @return void
     */
    public function addError(string $information, int $errorCode, array $custom = null): void {
        $error = new GatewayDiagnosisErrorDTO($information, $errorCode);

        if($custom !== null) {
            foreach ($custom as $key => $customMessage) {
                if(!empty($customMessage)) {
                    $error->addCustomMessage($key, $customMessage);
                }
            }
        }

        $this->errors[] = $error;
    }

    /**
     * Returns true if there is no error
     * @return bool
     */
    public function hasErrors(): bool {
        return count($this->errors) > 0;
    }
}
