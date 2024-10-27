<?php

namespace App\Support;

use Spatie\Csp\Keyword;
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy as BasePolicy;

class CspPolicy extends BasePolicy
{
    public function configure()
    {
        $this
            ->addGeneralDirectives()
            ->addDirectivesForGoogleCalendar()
            ->addDirectivesForGoogleFonts()
            ->addDirectivesForBunnyFonts()
            ->addDirectivesForTwitter()
            ->addDirectivesForYouTube();
    }

    protected function addGeneralDirectives(): self
    {
        return $this
            ->addDirective(Directive::BASE, Keyword::SELF)
            ->addNonceForDirective(Directive::SCRIPT)
            ->addDirective(Directive::SCRIPT, [
                Keyword::STRICT_DYNAMIC,
                Keyword::SELF,
                'unsafe-inline',
                'www.google.com',
            ])
            ->addDirective(Directive::STYLE, [
                Keyword::SELF,
                'unsafe-inline',
            ])
            ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
            ->addDirective(Directive::IMG, [
                '*',
                'unsafe-inline',
                'data:',
            ])
            ->addDirective(Directive::OBJECT, Keyword::NONE);
    }

    protected function addDirectivesForGoogleCalendar(): self
    {
        return $this
            ->addDirective(Directive::FRAME, 'calendar.google.com')
            ->addDirective(Directive::FONT, 'calendar.google.com')
            ->addDirective(Directive::SCRIPT, 'calendar.google.com')
            ->addDirective(Directive::STYLE, 'calendar.google.com');
    }

    protected function addDirectivesForGoogleFonts(): self
    {
        return $this
            ->addDirective(Directive::FONT, 'fonts.gstatic.com')
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }

    protected function addDirectivesForBunnyFonts(): self
    {
        return $this
            ->addDirective(Directive::FONT, 'fonts.bunny.net')
            ->addDirective(Directive::SCRIPT, 'fonts.bunny.net')
            ->addDirective(Directive::STYLE, 'fonts.bunny.net');
    }

    protected function addDirectivesForTwitter(): self
    {
        return $this
            ->addDirective(Directive::SCRIPT, [
                'platform.twitter.com',
                '*.twimg.com',
            ])
            ->addDirective(Directive::STYLE, [
                'platform.twitter.com',
            ])
            ->addDirective(Directive::FRAME, [
                'platform.twitter.com',
                'syndication.twitter.com',
            ])
            ->addDirective(Directive::FORM_ACTION, [
                'platform.twitter.com',
                'syndication.twitter.com',
            ]);
    }

    protected function addDirectivesForYouTube(): self
    {
        return $this->addDirective(Directive::FRAME, '*.youtube.com');
    }
}
