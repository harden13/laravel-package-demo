<?php

use PHPUnit\Framework\TestCase;

/**
 * Class MD5HasherTest
 */
class MD5HasherTest extends TestCase
{
    /**
     * @var
     */
    protected $hasher;

    /**
     * 类似于构造方法
     */
    public function setup()
    {
        $this->hasher = new \Fangapp\Hasher\MD5Hasher();
    }

    /**
     * 方法必须以test开头
     */
    public function testMD5HasherMake()
    {
        $password = md5('password');

        $passwordtwo = $this->hasher->make('password');

        $this->assertEquals($password, $passwordtwo);
    }

    /**
     * 测试盐值
     */
    public function testMD5HasherMakeWithSalt()
    {
        $password = md5('passwordtest');

        $passwordtwo = $this->hasher->make('password', ['salt' => 'test']);

        $this->assertEquals($password, $passwordtwo);
    }

    /**
     * 测试check
     */
    public function testMD5HasherCheck()
    {
        $password = md5('password');

        $passwordCheck = $this->hasher->check('password', $password);
        
        $this->assertTrue($passwordCheck);
    }
}