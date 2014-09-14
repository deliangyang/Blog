<?php
/**
 * User: Deliang Yang
 * Version: 0.1.0.0
 * Date: 14-9-14
 * Time: 上午9:58
 */

/*
 * @param   {$str} example "hello world"
 * @return  "hello-world"
 */
function space_to_connector($str){
    return str_replace(" ", "-", trim($str));
}


