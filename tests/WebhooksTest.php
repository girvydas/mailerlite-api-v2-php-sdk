<?php

namespace MailerLiteApi\Tests;

use MailerLiteApi\MailerLite;
use MailerLiteApi\Api\Segments;

class WebhooksTest extends MlTestCase
{
    protected $webhooksApi;

    protected $testSegment;

    protected function setUp()
    {
        $this->webhooksApi = (new MailerLite(API_KEY))->webhooks();
    }

    /** @test **/
    public function get_webhooks()
    {
        $webhooks = $this->webhooksApi->get();

        $this->assertTrue(is_object($webhooks));
    }
}