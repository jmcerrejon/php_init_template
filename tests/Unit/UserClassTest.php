<?php

    namespace tests\Unit;
    use PHPUnit\Framework\TestCase;

    class UserClassTest extends TestCase
    {
        public function testTrueAssetsToTrue()
        {
            $condition = true;
            $this->assertTrue($condition);
        }
    }
