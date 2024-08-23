<?php

namespace App\Entity\Odk;

class OnaQuery
{
    /**
     * @var OnaQuery[]
     */
    private array $subRequests;

    private int $limit;

    private int $start;

    public function isEmpty(): bool
    {
        return $this->containsSubRequests() && $this->limit === null && $this->start !== null;
    }

    public function containsSubRequests(): bool
    {
        return !empty($this->subRequests);
    }

    public function equals(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name] = $value;

        return $this;
    }

    public function between(string $name, string $from, string $to, bool $inclusive): OnaQuery
    {
        // WARNING: found bug in the API: if you start with greater (or greaterOrEqual), the filter does not work
        // TODO : Issue still present ?
        if ($inclusive === true) {
            $this->lowerOrEqual($name, $to)
                ->greaterOrEqual($name, $from);
        } else {
            $this->lowerThan($name, $to)
                ->greaterThan($name, $from);
        }

        return $this;
    }

    /**
     * @param string $value // case INSENSITIVE
     *
     * @return $this
     */
    public function contains(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name]['$'.'i'] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function greaterThan(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name]['$'.'gt'] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function greaterOrEqual(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name]['$'.'gte'] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function lowerThan(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name]['$'.'lt'] = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function lowerOrEqual(string $name, string $value): OnaQuery
    {
        $this->subRequests[$name]['$'.'lte'] = $value;

        return $this;
    }

    /**
     * @throws \JsonException
     */
    public function toJson(): string
    {
        return json_encode($this->subRequests, JSON_THROW_ON_ERROR);
    }

    /**
     * @return OnaQuery[]
     */
    public function getSubRequests(): array
    {
        return $this->subRequests;
    }

    /**
     * @param OnaQuery[] $subRequests
     */
    public function setSubRequests(array $subRequests): void
    {
        $this->subRequests = $subRequests;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function setStart(int $start): void
    {
        $this->start = $start;
    }
}
