<?php
namespace SocialiteProviders\Imgur;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ImgurExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'imgur', __NAMESPACE__.'\Provider'
        );
    }
}
