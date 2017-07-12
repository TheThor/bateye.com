<?php

/**
 * Created by PhpStorm.
 * User: pedrotentugal
 * Date: 04/07/17
 * Time: 17:12
 * Check https://github.com/stadline/prestaSitemapPlugin
 */
class sitemapUtils
{
    /**
     * Listens to the presta_sitemap.generate_urls event.
     *
     * @param  sfEvent $event  An sfEvent instance
     */
    public static function generateSitemapEntries( sfEvent $event )
    {
        // create a new prestaSitemapSection object
        $o_sitemapSection	= new prestaSitemapSection( 'miscSectionName' );
        // check is it is up-to-date
        if( !$o_sitemapSection->isUpToDate() )
        {
            // add prestaSitemapUrl to the prestaSitemapSection
            $o_sitemapSection->addUrl( new prestaSitemapUrl( '@homepage', new DateTime(), prestaSitemapUrl::CHANGE_FREQUENCY_HOURLY, 0.9 ) );

            // add other urls
            $o_sitemapSection->addUrl( new prestaSitemapUrl( '@collection', new DateTime(), prestaSitemapUrl::CHANGE_FREQUENCY_MONTHLY, 1) );
        }
    }
}