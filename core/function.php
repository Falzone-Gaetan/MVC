<?php
function getFormatedDate(string $date, string $format){
    return date_format(date_create($date), $format);
}