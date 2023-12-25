<?php

namespace App\Controllers\Admin;

use App\Dtos\Admin\LoginRequest;
use App\Models\Role;
use App\Repositories\AdminRepository;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class LogInController extends Controller
{
    private AdminRepository $AdminRepository;

    public function __construct()
    {
        $this->AdminRepository = new AdminRepository();
    }

    public function index()
    {
        // TODO: Giao diện đăng nhập ở đây (frontend)
    }

    public function login(Request $request)
    {
        $loginReq = new LoginRequest($request);

        // Kiểm tra xác thực thông tin đăng nhập
        $user = $this->AdminRepository->findByEmail($loginReq->getEmail());

        if (!$user || $user->getRole() !== Role::Admin || !password_verify($loginReq->getPassword(), $user->getPassword())) {
            return response()->json([
                'message' => 'Email hoặc mật khẩu không chính xác',
            ], Response::HTTP_UNAUTHORIZED);
        }

        // Xử lý thành công đăng nhập
        // Tạo phiên làm việc, lưu thông tin người dùng vào phiên
        $sessionData = [
            'user_id' => $user->getId(),
            'role' => $user->getRole(),
            // Thêm thông tin khác của người dùng vào đây nếu cần thiết
        ];
        $request->session()->put($sessionData);

        return response()->json([
            'message' => 'Đăng nhập thành công',
            'user' => $user,
        ], Response::HTTP_OK);
    }
}
