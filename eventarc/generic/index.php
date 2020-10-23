<?php
/**
 * Copyright 2020 Google LLC.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// [START eventarc_generic_server]
// [END eventarc_generic_server]

// [START eventarc_generic_handler]
echo "Event received!\n";

echo "\nHEADERS:\n";
$headers = getallheaders();
unset($headers['Authorization']); // do not log authorization header
foreach ($headers as $name => $value) {
    echo "$name: $value\n";
}

echo "\nBODY:\n";
$body = file_get_contents('php://input');
echo $body;
echo "\n";
// [END eventarc_generic_handler]
