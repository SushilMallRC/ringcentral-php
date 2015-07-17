<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

//namespace SwaggerClient\models;
namespace RC\client\models;

use \ArrayAccess;

class MakeRingoutRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'from' => 'MakeRingOutCallerInfoRequest',
      'to' => 'MakeRingOutCallerInfoRequest',
      'caller_id' => 'MakeRingOutCallerInfoRequest',
      'play_prompt' => 'string'
  );

  static $attributeMap = array(
      'from' => 'from',
      'to' => 'to',
      'caller_id' => 'callerId',
      'play_prompt' => 'playPrompt'
  );

  
  /**
  * Phone number of the caller. This number corresponds to the 1st leg of the RingOut call. This number can be one of user's configured forwarding numbers or arbitrary number.
  * @var MakeRingOutCallerInfoRequest
  */
  public $from;
  /**
  * Phone number of the called party. This number corresponds to the 2nd leg of the RingOut call.
  * @var MakeRingOutCallerInfoRequest
  */
  public $to;
  /**
  * The number which will be displayed to the called party.
  * @var MakeRingOutCallerInfoRequest
  */
  public $caller_id;
  /**
  * The audio prompt that the calling party hears when the call is connected.
  * @var string
  */
  public $play_prompt;

  public function __construct(array $data = null) {
    $this->from = $data["from"];
    $this->to = $data["to"];
    $this->caller_id = $data["caller_id"];
    $this->play_prompt = $data["play_prompt"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}