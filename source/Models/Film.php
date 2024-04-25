<?php

namespace Source\Models;

use Source\Core\Model;


/**
 * Class Film
 *
 * @package Source\Model
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class Film extends Model
{
    public function __construct()
    {
        parent::__construct(
            "films",
            ["id"],
            ["slug", "name", "image"]
        );
    }
}
