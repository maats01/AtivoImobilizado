<?php 
function convertToDateTime(DateTime|string $data): DateTime
{
    return is_string($data) ? new DateTime($data) : $data;
}

function tem_post()
{
    if (count($_POST) > 0) {
        return true;
    }

    return false;
}
?>