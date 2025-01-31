<?php

declare(strict_types=1);

namespace Mingalevme\OneSignal;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface CreateNotificationResultInterface
{
    /** @return non-empty-string|null */
    public function getNotificationId(): ?string;

    /** @return int<0, max>|null */
    public function getTotalNumberOfRecipients(): ?int;

    /**
     * @return non-empty-string|null
     */
    public function getExternalId(): ?string;

    /**
     * @return non-empty-list<non-empty-string>|null
     */
    public function getErrors(): ?array;

    /**
     * @return non-empty-list<non-empty-string>|null
     */
    public function getInvalidExternalUserIds(): ?array;

    /**
     * @return non-empty-list<non-empty-string>|null
     */
    public function getInvalidPhoneNumbers(): ?array;

    public function getRequest(): RequestInterface;

    public function getResponse(): ResponseInterface;
}
