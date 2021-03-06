<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class :x implements XHPChild {}

function f1(XHPChild $x): void {
}

function f2(): void {
  f1("hello");
  f1(array("hello", "world"));
  f1(<x>hi</x>);
}

