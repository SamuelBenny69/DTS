<?php 
class User {
    public function getAllUser(){
        //Logika Untuk Mengambil Semua Pengguna dari database
        return[
            ['id' =>1, 'name' => 'dina'],
            ['id' =>2, 'name' => 'dino'],
            ['id' =>3, 'name' => 'dini']
        ];
    }
}
?>