<br /><p><?php global $user;
    if ($user->uid) {
        print t('Welcome @name!<br /><br /> Thank you for visiting.', array('@name' => format_username($user)));
    }
    else {
        print t('Welcome visitor! Thank you for visiting.');
    }
    ?>
