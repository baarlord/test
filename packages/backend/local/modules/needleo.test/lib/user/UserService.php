<?php

namespace needleo\test\user;

use Bitrix\Main\ArgumentException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;
use Bitrix\Main\UserTable;
use Exception;

class UserService
{
    /**
     * @throws UserException
     */
    public function getUser(int $id): UserModel
    {
        try {
            $users = UserTable::getById($id);
            if (!$user = $users->fetchObject()) {
                throw new Exception('Can\'t found user with id=' . $id);
            }
            return new UserModel($user->getId(), $user->getLogin());
        } catch (ObjectPropertyException|ArgumentException|SystemException|Exception $e) {
            throw new UserException($e);
        }
    }
}
