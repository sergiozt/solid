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
class Quadrilateral
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
     * Get area
     *
     * @return mixed
     */
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Rectangle extends Quadrilateral
{
    /**
     * {@inheritdoc}
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * {@inheritdoc}
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Square extends Quadrilateral
{
    /**
     * {@inheritdoc}
     */
    public function setWidth($width)
    {
        $this->width = $width;
        $this->height = $width;
    }

    /**
     * {@inheritdoc}
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
$quadrilateral = new Square();
$quadrilateral->setWidth(2);
$quadrilateral->getArea(); // Result: int(4)

$quadrilateral = new Rectangle();
$quadrilateral->setWidth(2);
$quadrilateral->setHeight(3);
$quadrilateral->getArea(); // Result: int(6)