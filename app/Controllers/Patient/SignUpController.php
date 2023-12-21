<?php

namespace App\Controllers\Patient;

use App\Dtos\Patient\SignUpRequest;
use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use App\Repositories\PatientRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Response;

class SignUpController extends Controller
{
    private UserRepository $userRepository;
    private PatientRepository $patientRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->patientRepository = new PatientRepository();
    }

    public function index()
    {
        // TODO frontend here
    }

    public function login(Request $request)
    {
        $signUpReq = new SignUpRequest($request);

        $newUser = new User(Role::Patient, $signUpReq->getEmail(), $signUpReq->getPassword());
        $newPatient = new Patient($newUser->getId());

        $this->userRepository->Insert($newUser);
        $this->patientRepository->Insert($newPatient);

        return response()->json([
            "user" => $newUser,
            "patient" => $newPatient
        ]);
    }
}
