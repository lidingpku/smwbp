<?php
 
/**
 * Get translated magic words, if available
 *
 * @param string $lang Language code
 * @return array
 */
function efSemanticToolkitWords( $lang ) {
        $words = array();
 
        /**
         * English
         */
        $words['en'] = array(
                'smartset'    => array( 0, 'smartset' ),
                'smartshow'          => array( 0, 'smartshow' ),

        );
 
        # English is used as a fallback, and the English synonyms are
        # used if a translation has not been provided for a given word
        return ( $lang == 'en' || !isset( $words[$lang] ) )
                ? $words['en']
                : array_merge( $words['en'], $words[$lang] );
}
 
?>