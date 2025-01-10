<?php

namespace pmmp\encoding {
final class DataDecodeException extends \RuntimeException{
}
}

namespace pmmp\encoding {
final class ByteBuffer{

	public function __construct(string $buffer = ''){}

	public function toString() : string{}

	public function readByteArray(int $length) : string{}

	public function writeByteArray(string $value) : void{}

	public function getReadOffset() : int{}

	public function getWriteOffset() : int{}

	public function setReadOffset(int $offset) : void{}

	public function setWriteOffset(int $offset) : void{}

	public function getUsedLength() : int{}

	public function getReservedLength() : int{}

	public function reserve(int $length) : void{}

	public function trim() : void{}

	public function clear() : void{}

	public function __serialize() : array{}

	public function __unserialize(array $data) : void{}

	public function __debugInfo() : array{}
}
}

namespace pmmp\encoding {
final class Byte{

	private function __construct(){}

	public static function readUnsigned(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsigned(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSigned(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSigned(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}
}
}

namespace pmmp\encoding {
final class BE{

	private function __construct(){}

	public static function readUnsignedShort(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedShort(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedShort(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedShort(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readUnsignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedLong(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedLong(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readFloat(\pmmp\encoding\ByteBuffer $buffer) : float{}

	public static function writeFloat(\pmmp\encoding\ByteBuffer $buffer, float $value) : void{}

	public static function readDouble(\pmmp\encoding\ByteBuffer $buffer) : float{}

	public static function writeDouble(\pmmp\encoding\ByteBuffer $buffer, float $value) : void{}

	public static function readUnsignedTriad(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedTriad(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedTriad(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedTriad(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}
}
}

namespace pmmp\encoding {
final class LE{

	private function __construct(){}

	public static function readUnsignedShort(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedShort(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedShort(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedShort(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readUnsignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedLong(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedLong(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readFloat(\pmmp\encoding\ByteBuffer $buffer) : float{}

	public static function writeFloat(\pmmp\encoding\ByteBuffer $buffer, float $value) : void{}

	public static function readDouble(\pmmp\encoding\ByteBuffer $buffer) : float{}

	public static function writeDouble(\pmmp\encoding\ByteBuffer $buffer, float $value) : void{}

	public static function readUnsignedTriad(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedTriad(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readSignedTriad(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeSignedTriad(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}
}
}

namespace pmmp\encoding {
final class VarInt{

	private function __construct(){}

	public static function readUnsignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function readSignedInt(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function writeSignedInt(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function readUnsignedLong(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function readSignedLong(\pmmp\encoding\ByteBuffer $buffer) : int{}

	public static function writeUnsignedLong(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}

	public static function writeSignedLong(\pmmp\encoding\ByteBuffer $buffer, int $value) : void{}
}
}

