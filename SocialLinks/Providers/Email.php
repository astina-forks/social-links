<?php
namespace SocialLinks\Providers;

class Email extends ProviderBase implements ProviderInterface {
    public function shareUrl()
    {
        $info = $this->page->get();
        $subject = $info['title'] ?: $info['url'];
        $body = $info['text']."\n".$info['url'];

        return $this->buildUrl('mailto:', null, ['subject' => $subject, 'body' => $body], PHP_QUERY_RFC3986);
    }

    public function shareCount()
    {
        return 0;
    }
}
