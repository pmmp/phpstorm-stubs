<?php

namespace pmmp\encoding {
final class DataDecodeException extends \RuntimeException{
}
}

namespace pmmp\encoding {
final class ByteBuffer{

	public function readUnsignedByte() : int{}

	public function writeUnsignedByte(int $value) : void{}

	public function readSignedByte() : int{}

	public function writeSignedByte(int $value) : void{}

	public function readUnsignedShortLE() : int{}

	public function readUnsignedShortBE() : int{}

	public function readSignedShortLE() : int{}

	public function readSignedShortBE() : int{}

	public function writeUnsignedShortLE(int $value) : void{}

	public function writeUnsignedShortBE(int $value) : void{}

	public function writeSignedShortLE(int $value) : void{}

	public function writeSignedShortBE(int $value) : void{}

	public function readUnsignedIntLE() : int{}

	public function readUnsignedIntBE() : int{}

	public function readSignedIntLE() : int{}

	public function readSignedIntBE() : int{}

	public function writeUnsignedIntLE(int $value) : void{}

	public function writeUnsignedIntBE(int $value) : void{}

	public function writeSignedIntLE(int $value) : void{}

	public function writeSignedIntBE(int $value) : void{}

	public function readSignedLongLE() : int{}

	public function readSignedLongBE() : int{}

	public function writeSignedLongLE(int $value) : void{}

	public function writeSignedLongBE(int $value) : void{}

	public function readFloatLE() : float{}

	public function readFloatBE() : float{}

	public function writeFloatLE(float $value) : void{}

	public function writeFloatBE(float $value) : void{}

	public function readDoubleLE() : float{}

	public function readDoubleBE() : float{}

	public function writeDoubleLE(float $value) : void{}

	public function writeDoubleBE(float $value) : void{}

	public function readUnsignedVarInt() : int{}

	public function readSignedVarInt() : int{}

	public function writeUnsignedVarInt(int $value) : void{}

	public function writeSignedVarInt(int $value) : void{}

	public function readUnsignedVarLong() : int{}

	public function readSignedVarLong() : int{}

	public function writeUnsignedVarLong(int $value) : void{}

	public function writeSignedVarLong(int $value) : void{}

	public function readUnsignedTriadBE() : int{}

	public function readUnsignedTriadLE() : int{}

	public function writeUnsignedTriadBE(int $value) : void{}

	public function writeUnsignedTriadLE(int $value) : void{}

	public function readSignedTriadBE() : int{}

	public function readSignedTriadLE() : int{}

	public function writeSignedTriadBE(int $value) : void{}

	public function writeSignedTriadLE(int $value) : void{}

	public function __construct(string $buffer = null){}

	public function toString() : string{}

	public function readByteArray(int $length) : string{}

	public function writeByteArray(string $value) : void{}

	public function getOffset() : int{}

	public function setOffset(int $offset) : void{}

	public function getReserved() : int{}

	public function reserve(int $length) : void{}

	public function trim() : void{}

	public function rewind() : void{}

	public function __serialize() : array{}

	public function __unserialize(array $data) : void{}

	public function __debugInfo() : array{}
}
}

