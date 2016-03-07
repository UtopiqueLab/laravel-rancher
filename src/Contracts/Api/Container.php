<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Container" is a representation of a Docker container on a Host.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Container {

    /**
     * {@inheritdoc}
     */
    public function all();

    /**
     * {@inheritdoc}
     */
    public function get($id);

}