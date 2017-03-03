<?php
/**
 * Created by PhpStorm.
 * User: maksim
 * Date: 03.03.17
 * Time: 16:00
 */

namespace CriteoAPI\models;


class ApiExceptionErrorCode
{
    const NoError = 'NoError';
    const BadAuthentification = 'BadAuthentification';
    const AuthTokenExpired = 'AuthTokenExpired';
    const InvalidAppTokenAuthToken = 'InvalidAppTokenAuthToken';
    const AuthentificationNotExist = 'AuthentificationNotExist';
    const UserAccessDisabled = 'UserAccessDisabled';
    const UserAccessNotAllowed = 'UserAccessNotAllowed';
    const MissingData = 'MissingData';
    const OperationNotSupported = 'OperationNotSupported';
    const InvalidID = 'InvalidID';
    const AccessToThisJobNotAllowed = 'AccessToThisJobNotAllowed';
    const InvalidFieldValue = 'InvalidFieldValue';
    const UnexpectedError = 'UnexpectedError';
    const AppTokenNotSupportedForPartnerLogin = 'AppTokenNotSupportedForPartnerLogin';
}