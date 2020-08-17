<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Checkout;

class SuperMarketTest extends TestCase
{
    /**
     * @return [type]
     */
    public function testReturnZeroWhenNoItemScanned()
    {
        $c = new Checkout();

        self::assertEquals(0, $c->get_total());
    }

    /**
     * @return [type]
     */
    public function testReturn50WhenScannedA()
    {
        $c = new Checkout();
        $c->scan('A');
        self::assertEquals(50, $c->get_total());
    }

    public function testReturn115WhenScannedABCDE()
    {
        $c = new Checkout();
        $c->scan('A');
        $c->scan('B');
        $c->scan('C');
        $c->scan('D');
        self::assertEquals(115, $c->get_total());
    }
}
