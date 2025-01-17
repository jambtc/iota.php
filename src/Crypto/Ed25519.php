<?php namespace IOTA\Crypto;

use IOTA\Exception\Converter as ExceptionConverter;
use SodiumException;
use IOTA\Helper\Converter;
use function sodium_crypto_sign;
use function sodium_crypto_sign_seed_keypair;

/**
 * Class Ed25519
 *
 * @package iota\crypto
 */
class Ed25519 {
  /**
   * @var int
   */
  static protected int $PUBLIC_KEY_SIZE = 32;
  /**
   * @var int
   */
  static protected int $PRIVATE_KEY_SIZE = 64;
  /**
   * @var int
   */
  static protected int $SEED_SIZE = 32;

  /**
   * @param string $seed
   *
   * @return array
   * @throws ExceptionConverter
   * @throws SodiumException
   */
  static public function keyPairFromSeed(string $seed): array {
    $_keys = Converter::string2hex(sodium_crypto_sign_seed_keypair(Converter::hex2String($seed)));

    return [
      'privateKey' => substr($_keys, 0, self::$PRIVATE_KEY_SIZE * 2),
      'publicKey'  => substr($_keys, self::$PRIVATE_KEY_SIZE * 2, self::$PUBLIC_KEY_SIZE * 2),
    ];
  }

  /**
   * @param string $secretKey
   * @param string $message
   *
   * @return string
   * @throws ExceptionConverter
   * @throws SodiumException
   */
  static public function sign(string $secretKey, string $message): string {
    $_sign = Converter::string2hex(sodium_crypto_sign(Converter::hex2String($message), Converter::hex2String($secretKey)));

    return substr($_sign, 0, self::$PRIVATE_KEY_SIZE * 2);
  }
}
