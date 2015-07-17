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

class CallLogCallerInfo implements ArrayAccess {
  static $swaggerTypes = array(
      'phone_number' => 'string',
      'extension_number' => 'string',
      'location' => 'string',
      'name' => 'string'
  );

  static $attributeMap = array(
      'phone_number' => 'phoneNumber',
      'extension_number' => 'extensionNumber',
      'location' => 'location',
      'name' => 'name'
  );

  
  /**
  * Phone number of a party. Usually it is a plain number including country and area code like 18661234567. But sometimes it could be returned from database with some formatting applied, for example (866)123-4567. This property is filled in all cases where parties communicate by means of global phone numbers, for example when calling to direct numbers or sending/receiving SMS
  * @var string
  */
  public $phone_number;
  /**
  * Extension short number (usually 3 or 4 digits). This property is filled when parties communicate by means of short internal numbers, for example when calling to other extension or sending/receiving Company Pager message
  * @var string
  */
  public $extension_number;
  /**
  * Contains party location (city, state) if one can be determined from phoneNumber. This property is filled only when phoneNumber is not empty and server can calculate location information from it (for example, this information is unavailable for US toll-free numbers)
  * @var string
  */
  public $location;
  /**
  * Symbolic name associated with a party. If the phone does not belong to the known extension, only the location is returned, the name is not determined then
  * @var string
  */
  public $name;

  public function __construct(array $data = null) {
    $this->phone_number = $data["phone_number"];
    $this->extension_number = $data["extension_number"];
    $this->location = $data["location"];
    $this->name = $data["name"];
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