<?php

class Utils
{
    public static function header(string $user_type): void
    {
?>
        <header class="header">
            <a href="<?php  ?>" class="header__homelink">
                <img src="/assets/medias/images/logotype-white.svg" alt="Logotype" class="header__logotype">
            </a>
            <a href="/logout" class="header__logoutlink">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg" class="header__logouticon">
                    <path d="M6 3C4.35498 3 3 4.35498 3 6V18C3 19.645 4.35498 21 6 21H14.5C15.888 21 17.1235 20.0903 17.4688 18.749C17.5015 18.6218 17.5088 18.4894 17.4903 18.3593C17.4718 18.2293 17.4279 18.1042 17.3611 17.9911C17.2943 17.878 17.2058 17.7792 17.1008 17.7003C16.9958 17.6214 16.8762 17.564 16.749 17.5312C16.6218 17.4985 16.4894 17.4912 16.3593 17.5097C16.2293 17.5282 16.1042 17.5721 15.9911 17.6389C15.878 17.7057 15.7792 17.7942 15.7003 17.8992C15.6214 18.0042 15.564 18.1238 15.5312 18.251C15.4325 18.6347 14.976 19 14.5 19H6C5.43602 19 5 18.564 5 18V6C5 5.43602 5.43602 5 6 5H14.5C14.976 5 15.4325 5.36525 15.5312 5.74902C15.564 5.87624 15.6214 5.99577 15.7003 6.10079C15.7792 6.20581 15.878 6.29426 15.9911 6.3611C16.1042 6.42793 16.2293 6.47183 16.3593 6.49031C16.4894 6.50878 16.6218 6.50145 16.749 6.46875C16.8762 6.43605 16.9958 6.37861 17.1008 6.29971C17.2058 6.22081 17.2943 6.122 17.3611 6.00892C17.4279 5.89584 17.4718 5.77071 17.4903 5.64066C17.5088 5.51061 17.5015 5.37819 17.4688 5.25098C17.1235 3.90975 15.888 3 14.5 3H6ZM16.9893 7.99023C16.7904 7.99048 16.5961 8.05 16.4313 8.16119C16.2664 8.27238 16.1385 8.43018 16.0637 8.61446C15.989 8.79873 15.9709 9.00109 16.0117 9.19571C16.0525 9.39032 16.1505 9.56834 16.293 9.70703L17.5859 11H8.5C8.36749 10.9981 8.23593 11.0226 8.11296 11.072C7.98999 11.1214 7.87807 11.1948 7.7837 11.2878C7.68933 11.3809 7.61439 11.4918 7.56324 11.614C7.5121 11.7363 7.48576 11.8675 7.48576 12C7.48576 12.1325 7.5121 12.2637 7.56324 12.386C7.61439 12.5082 7.68933 12.6191 7.7837 12.7122C7.87807 12.8052 7.98999 12.8786 8.11296 12.928C8.23593 12.9774 8.36749 13.0019 8.5 13H17.5859L16.293 14.293C16.197 14.3851 16.1204 14.4955 16.0676 14.6176C16.0148 14.7397 15.9869 14.8712 15.9856 15.0042C15.9842 15.1373 16.0094 15.2692 16.0597 15.3924C16.11 15.5156 16.1844 15.6275 16.2784 15.7216C16.3725 15.8156 16.4844 15.89 16.6076 15.9403C16.7308 15.9906 16.8627 16.0158 16.9958 16.0144C17.1288 16.0131 17.2603 15.9852 17.3824 15.9324C17.5045 15.8796 17.6149 15.803 17.707 15.707L20.707 12.707C20.8945 12.5195 20.9998 12.2652 20.9998 12C20.9998 11.7348 20.8945 11.4805 20.707 11.293L17.707 8.29297C17.6137 8.19706 17.5021 8.12084 17.3788 8.06884C17.2555 8.01684 17.1231 7.99011 16.9893 7.99023Z" />
                </svg>
            </a>
        </header>
<?php
    }

    public static function userType($token): string
    {
        $user_type = false;

        $search = JoueurModel::getInstance()->findBy(["token" => $_COOKIE['token']]);
        var_dump($search);
        return $user_type;
    }
}