<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Login.proto

namespace GPBMetadata;

class Login
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
{
Login.protoMessage".
ReqNormalLogin
account (	
psw (	"
ReqExtranetLogin"
	RespLoginB
�Messagebproto3'
        , true);

        static::$is_initialized = true;
    }
}
