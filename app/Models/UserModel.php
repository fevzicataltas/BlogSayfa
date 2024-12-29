<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Veritabanındaki tablo adı
    protected $primaryKey = 'id'; // Tabloyu kimlik alanı
    protected $allowedFields = ['username', 'password']; // İzin verilen sütunlar
    protected $useTimestamps = true; // Otomatik olarak timestamp kullanmak için
    protected $createdField = 'created_at'; // Zaman damgası için alan adı (isteğe bağlı)
    protected $updatedField = 'updated_at'; // Güncellenme zamanı (isteğe bağlı)

    // Şifre hash'leme ve kullanıcı ekleme fonksiyonu
    public function addUser($username, $password)
    {
        // Şifreyi hashle
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Kullanıcıyı ekle
        return $this->insert([
            'username' => $username,
            'password' => $hashedPassword
        ]);
    }
}
