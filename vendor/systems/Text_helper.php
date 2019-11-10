<?php
/**
* 
*/
class Text_helper
{
		
	public static function limit_text( $text, $limit = 100000000000) {
        if ( strlen ( $text ) < $limit ) {
            return $text;
        }
        $split_words = explode(' ', $text );
        $out = null;
        foreach ( $split_words as $word ) {
            if ( ( strlen( $word ) > $limit ) && $out == null ) {
                return substr( $word, 0, $limit )."...";
            }
           
            if (( strlen( $out ) + strlen( $word ) ) > $limit) {
                return $out . "...";
            }           
            $out.=" " . $word;
        }
        return $out;
    }
	
}

