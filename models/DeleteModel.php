<?php

class DeleteModel
{
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id =". $id;
        $query = $this->db->prepare($sql);
        $query->execute();
    }
}