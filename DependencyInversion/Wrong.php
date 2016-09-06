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
class Customer
{
    /**
     * @var null
     */
    private $currentOrder = null;

    /**
     * Buy item
     *
     * @return bool|void
     */
    public function buyItems()
    {
        if (is_null($this->currentOrder)) {
            return false;
        }

        $processor = new OrderProcessor();

        return $processor->checkout($this->currentOrder);
    }

    /**
     * Add item
     *
     * @param $item
     * @return mixed
     */
    public function addItem($item)
    {
        if (is_null($this->currentOrder)) {
            $this->currentOrder = new Order();
        }

        return $this->currentOrder->addItem($item);
    }

    /**
     * Delete item
     *
     * @param $item
     * @return bool
     */
    public function deleteItem($item)
    {
        if (is_null($this->currentOrder)) {
            return false;
        }

        return $this->currentOrder->deleteItem($item);
    }
}

class OrderProcessor
{
    /**
     * Checkout order
     *
     * @param $order
     */
    public function checkout($order)
    {
        /*...*/
    }
}