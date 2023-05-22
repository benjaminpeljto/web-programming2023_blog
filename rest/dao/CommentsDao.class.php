<?php
require_once __DIR__ . "/BaseDao.class.php";

class CommentsDao extends BaseDao
{
    /*
     * Constructor for establishing the connection to the database
     */
    public function __construct()
    {
        parent::__construct("comments");
    }
}
