<?php

class DeleteModel extends model
{
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id =". $id;
        $query = $this->db->prepare($sql);
        $query->execute();
        if ($query->rowCount()){
            return true;
        } else {
            return false;
        }
    }
}