<?php 
class DateTimeUtil
{
    public static function convertToDateTime(DateTime|string $data): DateTime
    {
        return is_string($data) ? new DateTime($data) : $data;
    }
}
?>