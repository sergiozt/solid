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
class Order
{
    /**
     * Resource object
     *
     * @var ISource
     */
    protected $_resource;

    /**
     * Load order
     * @param integer $id
     * @return mixed
     */
    public function load($id)
    {
        return $this->_resource->load($id);
        /*...*/
    }

    public function setResource(ISource $resource)
    {
        $this->_resource = $resource;
    }

    /**
     * Save order
     */
    public function save()
    {
        /*...*/
    }

    /**
     * Update order
     */
    public function update()
    {
        /*...*/
    }

    /* Delete order
     */
    public function delete()
    {
        /*...*/
    }
}


interface ISource
{
    /**
     * Load data
     *
     * @param $id
     * @return mixed
     */
    public function load($id);

    /**
     * Save data
     *
     * @return mixed
     */
    public function save();

    /**
     * Update data
     *
     * @return mixed
     */
    public function update();

    /**
     * Delete data
     *
     * @return mixed
     */
    public function delete();
}


class MySQLResource implements ISource
{
    /**
     * {@inheritdoc}
     */
    public function load($orderID)
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function update()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        /*...*/
    }
}
