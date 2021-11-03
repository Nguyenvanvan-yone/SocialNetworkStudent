$(document).ready(function(){
    $('#signIn').removeClass('scale-0')
    $('#text_signin').removeClass('scale-0')
    $('#sign_up').removeClass('scale-0')
    $('#text_signup').removeClass('scale-0')
    $('#show_more_menu').on('click',function(){
        $('.menu_hidden').removeClass('hidden')
        $(this).addClass("hidden")
        $("#menu_hidden").removeClass("hidden")
    })
    $('#hidden_more_menu').on('click',function(){
        $('.menu_hidden').addClass('hidden')
        $("#show_more_menu").removeClass("hidden")
        $("#menu_hidden").addClass("hidden")
    
    })
    $('#input_post').on('click', function(){
        $("#app").addClass('fixed')
        $('#app').removeClass('relative')
        $('#overlay').removeClass('hidden')
        $('#form_post').removeClass('hidden')
        
    })
    $("#btn_off_form_post").on('click', function(){
        $('#app').removeClass('fixed')
        $("#app").addClass('relative')
        $("#content_post").val('')
        $('#overlay').addClass('hidden')
        $('#form_post').addClass('hidden')
        
    })
    $('#overlay').on('click', function(){
        $('#app').removeClass('fixed')
        $("#app").addClass('relative')
        $("#content_post").val('')
        $('#form_post').addClass('hidden')
        $(this).addClass('hidden')
    })
    $(".btn_option_setting").on('click',function(){
        $(".box_setting").removeClass('hidden')
    })
    $(".btn_option_setting").blur(function(){
        setTimeout(() => {
            $(".box_setting").addClass('hidden')
        }, 200);
    })
//   Tạo phòng họp mặt 
    var width_listfriend = $('#friend_group').width();   
    var startWidth = 0;
    $("#next_friend").on('click',function(){
        startWidth = startWidth + 500;
        $('#provi_friend').removeClass('hidden')
        $('#provi_friend').addClass('grid')
        if(startWidth > width_listfriend ){
            startWidth = 20;
            $('#provi_friend').removeClass('grid')
            $('#provi_friend').addClass('hidden')
            $('#friend_group').css('left',startWidth+'px')
        }else{
            $('#friend_group').css('left','-'+startWidth+'px')
        }
        console.log(startWidth);
        $('#provi_friend').addClass('z-20')
    })
    $('#provi_friend').on('click',function(){
            $('#friend_group').css('left','20px')
            $(this).addClass('hidden')
    })
    // dark mode
    $('#dark_mode').on('click', function(){
        $(document.documentElement).toggleClass('dark')
    })
    $('#dark_mode_mb').on('click', function(){
    
        $(document.documentElement).toggleClass('dark')
    })
    //  FORM EDIT INFO PROFILE
    $('#edit_info_profile').on('click', function(){
        $('#overlay_profile').removeClass('hidden')
        $('#form_profile').removeClass('hidden')
        $("#post_content_profile").addClass('fixed')
        $("#post_content_profile").removeClass('relative')
    })
    $('#overlay_profile').on('click',function(){
        $(this).addClass('hidden')
        $('#form_profile').addClass('hidden')
        $("#post_content_profile").addClass('relative')
        $("#post_content_profile").removeClass('fixed')
    })
    $('#btn_off_profile').on('click',function(){
        $('#form_profile').addClass('hidden')
        $('#overlay_profile').addClass('hidden')
        $("#post_content_profile").addClass('relative')
        $("#post_content_profile").removeClass('fixed')
    })
    
     //  END FORM EDIT INFO PROFILE
});

