$(function(){
    $("[admin-profile-menu] [menu-item]").unbind().click(function(){
        toggleAdminProfileMenu();
        return false;
    });
    $("[top-admin-profile-holder], [top-admin-profile-holder] *").unbind().click(function(){
        toggleAdminProfileMenu();
        return false;
    });
    $("[close-admin-profile-menu]").click(function(){
        $("[top-admin-profile-holder]").hasClass('opened') ? $("[top-admin-profile-holder]").removeClass("opened") : null;
        $("[top-admin-profile-holder]").addClass("closed");
        $("[admin-profile-menu]").slideUp();
        return false;
    });
    function toggleAdminProfileMenu(){
        if($("[top-admin-profile-holder]").hasClass('opened')){
            $("[admin-profile-menu]").slideUp();
            $("[top-admin-profile-holder]").removeClass("opened");
            $("[top-admin-profile-holder]").addClass("closed");
            return false;
        }else{
            $("[top-admin-profile-holder]").removeClass("closed");
            $("[top-admin-profile-holder]").addClass("opened");
            $("[admin-profile-menu]").slideDown();
            return false;
        }
    }
});