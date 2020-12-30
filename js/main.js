$(function(){
    var circle_loader = '<div class="circle_loader"><svg viewBox="0 0 140 140" width="50" height="50"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#ff7601" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';
    $('[basic-card], [tilt-this]').tilt();
    // ADMIN PROFILE MENU TOGGLE AREA
    $("[admin-profile-menu] [menu-item]").click(function(){
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
    // NAVIGATION CONTROLS
        $("#system-menu span, [load_page]").click(function(){
            showBottomLoader();
            setTimeout(() => {
                closeLoaders();
            }, 1500);
        });
    // FUNCTIONS DEFINITIONS
    function showBottomLoader(){
        $("[processing_loader]").slideDown();
        return swal.fire({
                    showConfirmButton:false,
                    html: circle_loader,
                    allowOutsideClick:false,
                    customClass: "bottom-main-loader"
                });
    }
    function openLoader(){return showBottomLoader();}
    function showLoader(){return showBottomLoader();}
    function closeLoaders(){$("[processing_loader]").slideUp(); return swal.close();}
});