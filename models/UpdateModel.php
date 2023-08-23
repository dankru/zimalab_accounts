<?php

class UpdateModel extends model
{
    public function update($table, $id, $params){
        $i = 0;
        $str = '';
        foreach ($params as $key => $value) {
            if ($i === 0){
                $str = $str . $key . " = '" . $value . "'";
            }else {
                $str = $str .", " . $key . " = '" . $value . "'";
            }
            $i++;
        }

        $sql = "UPDATE $table SET $str WHERE id = $id";
        $query = $this->db->prepare($sql);
        $query->execute();
        if ($query->rowCount()){
            return true;
        }
        return false;
    }
}