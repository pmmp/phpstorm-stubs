<?php

namespace pmmp\encoding {
final class DataDecodeException extends \RuntimeException{
}
}

namespace pmmp\encoding {
final class ByteBufferReader{

	/**
	 * Constructs a new ByteBufferReader.
	 * Offset will be initialized to 0.
	 */
	public function __construct(string $data){}

	/**
	 * Returns the string (byte array) that the reader is reading.
	 */
	public function getData() : string{}

	/**
	 * Reads $length raw bytes from the buffer at the current offset.
	 * The internal offset will be updated by this operation.
	 *
	 * @throws DataDecodeException if there are not enough bytes available
	 */
	public function readByteArray(int $length) : string{}

	/**
	 * Returns the current internal read offset (the position
	 * from which the next read operation will start).
	 */
	public function getOffset() : int{}

	/**
	 * Sets the internal read offset to the given value.
	 * The offset must be within the bounds of the buffer
	 * (0 <= offset <= used length).
	 *
	 * @throws \ValueError if the offset is out of bounds
	 */
	public function setOffset(int $offset) : void{}

	/**
	 * Returns the number of bytes available to read after the
	 * current offset.
	 */
	public function getUnreadLength() : int{}

	public function __serialize() : array{}

	public function __unserialize(array $data) : void{}

	public function __debugInfo() : array{}
}
}

namespace pmmp\encoding {
final class ByteBufferWriter{

	/**
	 * Constructs a new ByteBufferWriter.
     * The provided string will be written at the start of the buffer as if readByteArray() was called.
	 */
	public function __construct(string $prefix = ''){}

	/**
	 * Returns a string containing the written bytes.
	 * Reserved memory is not included.
	 */
	public function getData() : string{}

	/**
	 * Writes the given bytes to the buffer at the current offset.
	 * The internal offset will be updated by this operation.
	 *
	 * If the current buffer size is not big enough to add the given
	 * bytes, the buffer will be resized to either 2x its current size,
	 * or the actual size of the result, whichever is larger. This
	 * ensures the lowest number of reallocations.
	 */
	public function writeByteArray(string $value) : void{}

	/**
	 * Returns the current internal write offset (the position
	 * from which the next write operation will start).
	 */
	public function getOffset() : int{}

	/**
	 * Sets the internal write offset to the given value.
	 * The offset must be within the bounds of the buffer
	 * (0 <= offset <= reserved length).
	 *
	 * @throws \ValueError if the offset is out of bounds
	 */
	public function setOffset(int $offset) : void{}

	/**
	 * Returns the total number of bytes written.
	 * This will always be less than or equal to the reserved length.
	 */
	public function getUsedLength() : int{}

	/**
	 * Returns the number of bytes reserved by the ByteBuffer.
	 * This value may be larger than the number of written bytes, as
	 * some memory may be preallocated to avoid reallocations.
	 */
	public function getReservedLength() : int{}

	/**
	 * Increases buffer capacity to the given value, if the capacity
	 * is less than this amount. Useful to avoid extra reallocations
	 * during large write operations when the needed capacity of the
	 * buffer is known in advance.
	 */
	public function reserve(int $length) : void{}

	/**
	 * Truncates the internal buffer to only the written part,
	 * discarding any unused reserved memory.
	 */
	public function trim() : void{}

	/**
	 * Clears all data from the buffer. The memory used is retained
	 * as reserved memory.
	 */
	public function clear() : void{}

	public function __serialize() : array{}

	public function __unserialize(array $data) : void{}

	public function __debugInfo() : array{}
}
}

namespace pmmp\encoding {
final class Byte{

	private function __construct(){}

	/** @throws DataDecodeException */
	public static function readUnsigned(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsigned(string $bytes) : int{}

	public static function writeUnsigned(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsigned(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSigned(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSigned(string $bytes) : int{}

	public static function writeSigned(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSigned(int $value) : string{}
}
}

namespace pmmp\encoding {
final class BE{

	private function __construct(){}

	/** @throws DataDecodeException */
	public static function readUnsignedShort(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedShort(string $bytes) : int{}

	public static function writeUnsignedShort(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedShort(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedShort(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedShort(string $bytes) : int{}

	public static function writeSignedShort(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedShort(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedInt(string $bytes) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedInt(string $bytes) : int{}

	public static function writeSignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedLong(string $bytes) : int{}

	public static function writeUnsignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedLong(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedLong(string $bytes) : int{}

	public static function writeSignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedLong(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readFloat(\pmmp\encoding\ByteBufferReader $buffer) : float{}

	/** @throws DataDecodeException */
	public static function unpackFloat(string $bytes) : float{}

	public static function writeFloat(\pmmp\encoding\ByteBufferWriter $buffer, float $value) : void{}

	public static function packFloat(float $value) : string{}

	/** @throws DataDecodeException */
	public static function readDouble(\pmmp\encoding\ByteBufferReader $buffer) : float{}

	/** @throws DataDecodeException */
	public static function unpackDouble(string $bytes) : float{}

	public static function writeDouble(\pmmp\encoding\ByteBufferWriter $buffer, float $value) : void{}

	public static function packDouble(float $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedTriad(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedTriad(string $bytes) : int{}

	public static function writeUnsignedTriad(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedTriad(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedTriad(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedTriad(string $bytes) : int{}

	public static function writeSignedTriad(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedTriad(int $value) : string{}
}
}

namespace pmmp\encoding {
final class LE{

	private function __construct(){}

	/** @throws DataDecodeException */
	public static function readUnsignedShort(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedShort(string $bytes) : int{}

	public static function writeUnsignedShort(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedShort(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedShort(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedShort(string $bytes) : int{}

	public static function writeSignedShort(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedShort(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedInt(string $bytes) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedInt(string $bytes) : int{}

	public static function writeSignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedLong(string $bytes) : int{}

	public static function writeUnsignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedLong(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedLong(string $bytes) : int{}

	public static function writeSignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedLong(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readFloat(\pmmp\encoding\ByteBufferReader $buffer) : float{}

	/** @throws DataDecodeException */
	public static function unpackFloat(string $bytes) : float{}

	public static function writeFloat(\pmmp\encoding\ByteBufferWriter $buffer, float $value) : void{}

	public static function packFloat(float $value) : string{}

	/** @throws DataDecodeException */
	public static function readDouble(\pmmp\encoding\ByteBufferReader $buffer) : float{}

	/** @throws DataDecodeException */
	public static function unpackDouble(string $bytes) : float{}

	public static function writeDouble(\pmmp\encoding\ByteBufferWriter $buffer, float $value) : void{}

	public static function packDouble(float $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedTriad(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedTriad(string $bytes) : int{}

	public static function writeUnsignedTriad(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedTriad(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedTriad(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedTriad(string $bytes) : int{}

	public static function writeSignedTriad(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedTriad(int $value) : string{}
}
}

namespace pmmp\encoding {
final class VarInt{

	private function __construct(){}

	/** @throws DataDecodeException */
	public static function readUnsignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedInt(string $bytes) : int{}

	public static function writeUnsignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedInt(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedInt(string $bytes) : int{}

	public static function writeSignedInt(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedInt(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readUnsignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackUnsignedLong(string $bytes) : int{}

	public static function writeUnsignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packUnsignedLong(int $value) : string{}

	/** @throws DataDecodeException */
	public static function readSignedLong(\pmmp\encoding\ByteBufferReader $buffer) : int{}

	/** @throws DataDecodeException */
	public static function unpackSignedLong(string $bytes) : int{}

	public static function writeSignedLong(\pmmp\encoding\ByteBufferWriter $buffer, int $value) : void{}

	public static function packSignedLong(int $value) : string{}
}
}

