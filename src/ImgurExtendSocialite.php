<?php
namespace SocialiteProviders\Imgur;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ImgurExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('imgur', __NAMESPACE__.'\Provider');
    }
}
