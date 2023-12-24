

<?php
use Illuminate\Support\Facades\DB;

try {
    DB::connection()->getPdo();
    echo "Kết nối đến cơ sở dữ liệu thành công!";
} catch (\Exception $e) {
    die("Không thể kết nối đến cơ sở dữ liệu: " . $e->getMessage());
}