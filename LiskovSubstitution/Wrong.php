<?php

/**
 * Copyright (c) 2009-2016 Vaimo AB
 *
 * Vaimo reserves all rights in the Program as delivered. The Program
 * or any portion thereof may not be reproduced in any form whatsoever without
 * the written consent of Vaimo, except as provided by licence. A licence
 * under Vaimo's rights in the Program may be available directly from
 * Vaimo.
 *
 * Disclaimer:
 * THIS NOTICE MAY NOT BE REMOVED FROM THE PROGRAM BY ANY USER THEREOF.
 * THE PROGRAM IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE PROGRAM OR THE USE OR OTHER DEALINGS
 * IN THE PROGRAM.
 *
 * @category    Vaimo
 * @copyright   Copyright (c) 2009-2016 Vaimo AB
 * @author      Sergii Zheleznytskyi <sergii.zheleznytskyj@vaimo.com>
 */
class Rectangle
{
    /**
     * Set width
     *
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Set height
     *
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Set area
     */
    /**
     * @return  mixed
     */
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Square extends Rectangle
{
    /**
     * Set width and height
     *
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    /**
     * Set width and height
     *
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;
    }
}

/**
 *  Objects in a program should be replaceable
 *  with instances of their subtypes without altering
 *  the correctness of that program.
 */

// Objects: $rectangle
// should be replaceable with instances [new Square()]  of their subtypes [Square]
$rectangle = new Square();
$rectangle->setWidth(2);
$rectangle->setHeight(3);
$rectangle->getArea(); // Result: int(9) instead of int(6)