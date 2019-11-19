<?php
declare(strict_types=1);

namespace DateTi\Time;

use DateTi\Holidays\HolidaysInterface;
use DateTime;

interface DateTimeInterface extends \DateTimeInterface
{
    /**
     * Alter the timestamp of a DateTime object by incrementing or decrementing
     * in a format accepted by strtotime().
     * @param string $modify A date/time string. Valid formats are explained in <a href="https://secure.php.net/manual/en/datetime.formats.php">Date and Time Formats</a>.
     * @return static Returns the DateTime object for method chaining or FALSE on failure.
     * @link https://php.net/manual/en/datetime.modify.php
     */
    public function modify($modify);

    public function setHolidays(string $country): void;

    public function getHolidays(): HolidaysInterface;

    public function setYear($year): void;

    public function setMonth($month): void;

    public function setDay($day): void;

    public function getDay(): int;

    public function getMonth(): int;

    public function getYear(): int;

    public function getHour(): int;

    public function getMinute(): int;

    public function getSecond(): int;

    public function isWeekend(): bool;

    public function isWeekday(): bool;

    public function isMonday(): bool;

    public function isTuesday(): bool;

    public function isWednesday(): bool;

    public function isThursday(): bool;

    public function isFriday(): bool;

    public function isSaturday(): bool;

    public function isSunday(): bool;

    public function isHoliday(): bool;

    public function isWorkDay(?DateTime $date = null): bool;
}
