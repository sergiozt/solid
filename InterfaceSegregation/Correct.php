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

/**
 *  Many client-specific interfaces are better
 *  than one general-purpose interface
 */
interface MachineInterface
{
    /**
     * Print copy document
     *
     * @return mixed
     */
    public function printCopy();
}

interface PhotoCopyMachineInterface
{
    /**
     * Photo copy
     *
     * @return mixed
     */
    public function photoCopy();
}

interface ScanMachineInterface
{
    /**
     * Sac document
     *
     * @return mixed
     */
    public function scan();
}

interface FaxMachineInterface
{
    /**
     * Fax document
     *
     * @return mixed
     */
    public function fax();
}

class XeroxMachine implements MachineInterface, PhotoCopyMachineInterface, ScanMachineInterface, FaxMachineInterface
{
    /**
     * {@inheritdoc}
     */
    public function printCopy()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function scan()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function fax()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function photoCopy()
    {
        /*...*/
    }
}

class CanonMachine implements MachineInterface, PhotoCopyMachineInterface
{
    /**
     * {@inheritdoc}
     */
    public function printCopy()
    {
        /*...*/
    }

    /**
     * {@inheritdoc}
     */
    public function photoCopy()
    {
        /*...*/
    }
}