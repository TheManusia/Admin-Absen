<?php

class Home_model extends CI_Model {
    public function getAllUser() {
        return $this->db->select('username')->get('user')->num_rows();
    }

    public function getStatus() {
        return $this->db->where('tanggal', date('Y-m-d'))->get('data_absensi')->num_rows();
    }

    public function getDay() {
        $harini = date("Y-m-d");
        $a = explode("-", $harini);
        $b = $a[0] . $a[1] . $a[2];
        $tanggal = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"), true);

        return isset($tanggal[$b])? $tanggal[$b]['deskripsi'].", tidak ada pengabsenan. Semoga harimu menyenangkan :)" :
                (date("D", strtotime($harini)) == "Sun" ? "Hari Minggu, tidak ada pengabsenan. Semoga harimu menyenangkan :)" :
                (date("D", strtotime($harini)) == "Sat" ? "Hari Sabtu, tidak ada pengabsenan. Semoga harimu menyenangkan :)" : ""));
    }
}