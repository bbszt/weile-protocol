<?php
/**
 * Auto generated from ReqCmdId.proto at 2015-03-04 07:39:45
 */

/**
 * ReqCmdId enum
 */
final class ReqCmdId
{
    const Login = 1;
    const Register = 2;
    const SetNewLoginPassword = 3;
    const SetNewTradePassword = 4;
    const GetBannerAdList = 203;
    const GetDeliveryAddressList = 204;
    const GetAppList = 101;
    const SetAppProfit = 102;
    const GetFriendList = 301;
    const SetFriendNote = 302;
    const SetFriendBlackList = 303;
    const DelFriend = 304;
    const AddFriend = 305;
    const SearchFriend = 306;
    const SendValidateMsg = 307;
    const CheckPhoneIsRegister = 308;
    const SendAddFriendRequest = 309;
    const GetNearByFriendList = 310;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Login' => self::Login,
            'Register' => self::Register,
            'SetNewLoginPassword' => self::SetNewLoginPassword,
            'SetNewTradePassword' => self::SetNewTradePassword,
            'GetBannerAdList' => self::GetBannerAdList,
            'GetDeliveryAddressList' => self::GetDeliveryAddressList,
            'GetAppList' => self::GetAppList,
            'SetAppProfit' => self::SetAppProfit,
            'GetFriendList' => self::GetFriendList,
            'SetFriendNote' => self::SetFriendNote,
            'SetFriendBlackList' => self::SetFriendBlackList,
            'DelFriend' => self::DelFriend,
            'AddFriend' => self::AddFriend,
            'SearchFriend' => self::SearchFriend,
            'SendValidateMsg' => self::SendValidateMsg,
            'CheckPhoneIsRegister' => self::CheckPhoneIsRegister,
            'SendAddFriendRequest' => self::SendAddFriendRequest,
            'GetNearByFriendList' => self::GetNearByFriendList,
        );
    }
}
