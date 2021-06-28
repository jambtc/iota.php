<?php namespace IOTA\Api\v1;

use IOTA\Models\AbstractApiResponse;

/**
 * Class ResponseSubmitMessage
 *
 * @package      IOTA\Api\v1
 * @author       StefanBraun
 * @copyright    Copyright (c) 2021, StefanBraun
 */
class ResponseSubmitMessage extends AbstractApiResponse {
  /**
   * @var string
   */
  public string $messageId;

  /**
   *
   */
  protected function parse(): void {
    $this->defaultParse();
  }
}