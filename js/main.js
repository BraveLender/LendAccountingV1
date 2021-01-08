var circle_loader = '<div class="circle_loader"><svg viewBox="0 0 140 140" width="50" height="50"><g class="outline"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="rgba(0,0,0,0.1)" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></g><g class="circle"><path d="m 70 28 a 1 1 0 0 0 0 84 a 1 1 0 0 0 0 -84" stroke="#ff7601" stroke-width="4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="200" stroke-dasharray="300"></path></g></svg></div>';
var mainDisplayArea = $("[main-display-area]");
restoreFunctions();
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
    function activateNavigationControl(){
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
                        restoreFunctions();
                    setTimeout(() => {
                        closeLoaders();
                    }, 1500);
                }).fail(function(error){
                    closeLoaders();
                    alertPageLoadFailed(error.status);
                });
                
            }else{
                alertPageLoadFailed(404404);
            }
        });
    }
function loadInnerPage(source, destination){
    if(source && source.length > 0){
        if($('*').has(destination)){
            showInnerLoader();
            $.get(source, function(data){
                    $(destination).empty();
                    $(destination).html(data);
                    restoreFunctions();
                setTimeout(() => {
                    closeLoaders();
                }, 1500);
                return false;
            }).fail(function(error){
                closeLoaders();
                alertPageLoadFailed(error.status);
                return false;
            });
        }else{
            alertPageLoadFailed("Invalid destination");
            return false;
        }
    }else{
        alertPageLoadFailed(404404);
        return false;
    }
}
    // branches switcher
$("[branches-toggle]").click(function(){
    toggleBranches();
    $("[branch-selector]").css("display", "flex");
});
$("[close-branch-list]").click(function(){
    toggleBranches();
});
$("[ branch-list] [branch]").click(function(){
    let newBranch = $(this).attr("branch");
    toggleBranches();
    bottomLeftNotification("Switching branches..."+circle_loader);
    $.post("system/switch-branch.php", {
        "branch": newBranch
    }, function (data, status, debug) {
        try {
            if(typeof data === "object"){
                try{
                    if(data.error === false){
                        switchBranch();
                    }else{
                        bottomLeftNotification(data.message);
                    }
                } catch (error) {
                    bottomLeftNotification("Stage 2 Data decoding failed");
                    console.warn(error);
                    console.error(debug.responseText);
                }
            }else{
                try {
                    let response = JSON.parse(data);
                    if(response.error === false){
                        switchBranch();
                    }else{
                        bottomLeftNotification(response.message);
                    }
                } catch (error) {
                    bottomLeftNotification("Stage 3 Data decoding failed");
                    console.warn(error);
                    console.error(debug.responseText);
                }
            }
        } catch (error) {
            bottomLeftNotification("Data decoding failed");
            console.warn(error)
        }
    }).fail(function (error) {
        console.error(error);
        error.status === 404 ? null : console.warn(error.responseText);
       let errorCode  = error.status;
        let message;
       switch (errorCode) {
            case 404:
                message = "Branch Switcher currently not installed";
                break;
            case 408:
                message = "Please try again. This process took longer than usual";
                break;
            case 500:
                message = "Internal server error";
                break;
            case 0:
                message = "No internet connection";
                break;
            default:
                message = "Branch Switch Failed.";
                break;
       }
       bottomLeftNotification(message);
    });
});
    // close branch switcher
// FUNCTIONS DEFINITIONS
function restoreFunctions(){
    transformTables();
    activateNavigationControl();
    activateTilt();
}
function switchBranch(){
    bottomLeftNotification("<i class='fa fa-check-square' green></i> Branch switched successfully. System will refresh in 4 seconds");
    return setTimeout(() => {
        refreshSystem();
    }, 3000);
}
function refreshSystem(){
    return document.location.href = '';
}
function toggleBranches(){
    return $("[branch-selector]").animate({
        width: "toggle"
    });
}
function showBottomLoader(){
    $("[processing_loader]").slideDown();
    return swal.fire({
                showConfirmButton:false,
                html: circle_loader,
                allowOutsideClick:false,
                customClass: "bottom-main-loader"
            });
}
// Inner loader
function showInnerLoader(){
    $("[processing_loader]").slideDown();
    swal.fire({
        showConfirmButton:false,
        html: circle_loader,
        allowOutsideClick:false,
        customClass:{
            container: "bottom-inner-loader-container",
            popup: "bottom-inner-loader",
        }
    });
}
function openLoader(){return showBottomLoader();}
function showLoader(){return showBottomLoader();}
function closeLoaders(){$("[processing_loader]").slideUp(); return swal.close();}
function bottomLeftNotification(msg){
    return alertPageLoadFailed(msg);
}
function alertPageLoadFailed(statusCode){
    let message;
    switch (statusCode) {
        case 400400:
            message = "Invalid parameters";
            break;
        case 404:
            message = "This feature is currently unavailable";
            break;
        case 404404:
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
            message = typeof statusCode === "string" && statusCode.length > 0 ? statusCode : "Something went wrong";
            break;
    }
    swal.fire({
        html: message,
        showConfirmButton: false,
        customClass:{
            container: "notification-popup",
            popup: "notification-popup-content",
        }
    });
    setTimeout(() => {
        $(".notification-popup").slideUp();
    }, 3500);
    setTimeout(() => {
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
function transformTables(){
    let table_id = $("[transform-table]").attr("id");
    $('#'+table_id).DataTable();
    return null;
}
function activateTilt(){
    return $('[basic-card], [tilt-this]').tilt();
}
function urlPopUp(url){
    swal.fire({
        html: circle_loader,
        confirmButtonText: "Close",
        confirmButtonColor: "#e26e2b",
        customClass: {
            container: "url-popup",
            popup: "url-popup-content",
        }
    });
    $.get(url, function(data){
            $('.swal2-content').empty();
            $('.swal2-content').html(data);
            restoreFunctions();
    }).fail(function(error){
        closeLoaders();
        alertPageLoadFailed(error.status);
    });
    return false;
}