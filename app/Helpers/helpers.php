<?php 

    function ShowDateMessageChats( $array, $key ) {
    	if ( $key === 0 )
    		return true;

    	if ( date("Y-m-d", strtotime( $array[ $key ]['created_at'] ) ) !== date("Y-m-d", strtotime( $array[ $key - 1 ]['created_at'] ) ))
    		return true;

        return false;
    }