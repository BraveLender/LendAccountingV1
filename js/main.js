$(function(){
    var circle_loader = '<div class="circle_loader"><svg viewBox="0 0 140 140" width="50" height="50"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#ff7601" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';
    var mainDisplayArea = $("[main-display-area]");
    var pageLoadTimer;
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
        $("#system-menu span, [load_page], [load-page]").unbind().click(function(){
            let menu = $(this);
            let page = $(this).attr("source");
            if(page && page.length > 0){
                showBottomLoader();
                $.get(page, function(data){
                        mainDisplayArea.children().slideUp();
                        mainDisplayArea.empty();
                        mainDisplayArea.html(data);
                        activateMenu(menu);
                    setTimeout(() => {
                        closeLoaders();
                    }, 1500);
                }).fail(function(error){
                    closeLoaders();
                    AlertPageLoadFailed(error.status);
                });
                
            }else{
                AlertPageLoadFailed(4040);
            }
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
    function AlertPageLoadFailed(statusCode){
        let message;
        switch (statusCode) {
            case 404:
                message = "This feature is currently unavailable";
                break;
            case 4040:
                message = "Source currently not available";
                break;
            case 408:
                message = "Please try again. This process took longer than usual"
                break;
            case 500:
                message = "Internal server error"
                break;
            case 0:
                message = "No internet connection"
                break;
            default:
                message = "Something went wrong";
                break;
        }
        swal.fire({
            text: message,
            showConfirmButton: false,
            customClass:{
                container: "notification-popup",
                popup: "notification-popup-content",
            }
        });
        clearTimeout(pageLoadTimer);
        setTimeout(() => {
            $(".notification-popup").slideUp();
        }, 3500);
        pageLoadTimer = setTimeout(() => {
            closeLoaders();
        }, 4000);
        return false;
    }
    function activateMenu(menu){
        if(menu.parent().is("#system-menu")){
            menu.parent().children('span').removeClass('active');
            $("[top-main-header]").children("span").removeClass('active');
            menu.addClass('active');
        }else if(menu.parent().is("[top-main-header]")){
            menu.parent().children('span').removeClass('active');
            $("#system-menu").children("span").removeClass('active');
            menu.addClass('active');
        }else{
            $("[top-main-header]").children("span").removeClass('active');
            $("#system-menu").children("span").removeClass('active');
        }
        return false;
    }
});