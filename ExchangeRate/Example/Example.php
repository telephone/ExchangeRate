<?php
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 Nick Adams nick89@zoho.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package     ExchangeRate
 * @author      Nick Adams nick89@zoho.com
 * @copyright   2012 Nick Adams.
 * @license     http://www.opensource.org/licenses/mit-license.php  MIT License
 * @link        http://github.com/telephone
 * @version     0.1
 */

// include exchange class
include '../ExchangeRate.php';

// instantiate class
$exchange = new Telephone\Exchange();

/**
 * Download rates from the default parameters: From Yahoo! Finance, with USD
 * base currency and return json object
 */
$example = $exchange->rates();

var_dump($example);

/**
 * Download rates from Yahoo! Finance. Set base currency as AUD, and return
 * as an array.
 */
$example = $exchange->rates('yahoo', 'AUD', 'array');

var_dump($example);

/**
 * Download rates from ECB. Set base currency as EUR, and return
 * as an array.
 */
$example = $exchange->rates('ecb', 'eur', 'array');

var_dump($example);

/**
 * Download rates from ECB. Set base currency as USD, and return
 * in JSON format.
 */
$example = $exchange->rates('ecb', 'usd', 'json');

var_dump($example);

/**
 * Rates are returned in a multi-dimensional array/json object.
 * Fromat:
 *     Array/Object
 *         - base  (Contains base currency)
 *         - rates (Contains exchange rates)
 */