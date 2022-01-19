<?php

namespace needleo\test\user;

class UserHelper
{
    private UserService $service;

    public function __construct(UserService $service = null)
    {
        $this->service = $service ?? new UserService();
    }

    public function getUserLogin(int $id): string
    {
        try {
            $user = $this->service->getUser($id);
            return $user->getLogin();
        } catch (UserException $e) {
            return $e->getMessage();
        }
    }
}
