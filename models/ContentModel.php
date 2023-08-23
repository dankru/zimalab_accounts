<?php

class ContentModel extends Model
{
    public function selectAllAccounts() {
        return $this->select('account', []);
    }
    public function countAccounts() {
        $sql = "SELECT COUNT(*) FROM account";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchColumn();
    }
}