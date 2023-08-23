<?php

class RegisterModel extends model
{
    public function createUser($params) {
        $rows = $this->select('account', $params);
        if (!empty($rows)) {
            return false;
        } else {
            $this->insert('account', $params);
        }
    }
}