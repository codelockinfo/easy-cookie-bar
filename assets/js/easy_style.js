$(document).ready(function () {
    $(document).on('click', '.down', function (e) {
        e.preventDefault();
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#myNumber").val(value);
        var borderheightval = $("#myNumber").val(); 
     
    });
    $(document).on('click', '.up', function (e) {
        e.preventDefault();
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
        }
        $("#myNumber").val(value);
        var borderheightval = $("#myNumber").val();
        var border_height= $('.pagemargin ').find('.preview_set ');
        border_height.css("height", borderheightval + "px");
    });
    $(document).on('click', '.bdown', function (e) {
        e.preventDefault();
        var value = $("#borderrad").val();
       if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borderrad").val(value);
        var borderval = $("#borderrad").val();
        var border_rad= $('.pagemargin ').find('.preview_set .cc-dismiss');
        border_rad.css("border-radius", borderval + "px");
    });
    $(document).on('click', '.bup', function (e) {
        e.preventDefault();
        var value = $("#borderrad").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#borderrad").val(value)
        var borderval = $("#borderrad").val();
        var border_rad= $('.pagemargin ').find('.preview_set .cc-dismiss');
        border_rad.css("border-radius", borderval + "px");
    });
    $(document).on('click', '.bwdown', function (e) {
        e.preventDefault();
        var value = $("#borwidth").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borwidth").val(value);
        var borderwidthval = $("#borwidth").val();
        var border_width= $('.pagemargin ').find('.preview_set .cc-dismiss');
        border_width.css("border-width", borderwidthval + "px");
    });
    $(document).on('click', '.bwup', function (e) {
        e.preventDefault();
        var value = $("#borwidth").val();
        if (value != '') {
            value = parseInt(value) + 1;
        }
        else {
            value = 0;
        }
        $("#borwidth").val(value);
        var borderwidthval = $("#borwidth").val();
        var border_width= $('.pagemargin ').find('.preview_set .cc-dismiss');
        border_width.css("border-width", borderwidthval + "px");
    });

    $(document).on('change','.layoutSelect2',function () {
        var layout_change=$('.layoutSelect2 option').filter(':selected').val();
        var layoutchange= $('.pagemargin ').find('.preview-cookie-bar');
        var modalopen= $('.pagemargin ').find('.preview_set');
        if (layout_change== "1") {
            layoutchange.addClass("modal-wrapper");
            modalopen.addClass("modal_preview");
            $('.modal-wrapper').addClass('open');
             $(" .preview_set").css("flex-direction","column");
             $(" .preview-cookie-bar .seven").css("width","100%");
        }
        else {
            layoutchange.removeClass("modal-wrapper");
            modalopen.removeClass("modal_preview");
            $('.modal-wrapper').removeClass('open')
        }
    }); 
     // get value of massage
    $('input[type="text"]').on('keydown, keyup', function () {
        var texInputValue = $('#massageText').val();
        $('.bar-text-wrapper .bar-message').html(texInputValue);
    });

    $('input[type="text"]').on('keydown, keyup', function () {
        var btnInputValue = $('#buttonText').val();
        $('.preview_set .cc-dismiss').html(btnInputValue);
    });

    $('input[type="text"]').on('keydown, keyup', function () {
        var linkInputValue = $('#linkText').val();
       $('.preview_set .cc-link').html(linkInputValue);
    });

    $(document).on("click",".bannerlayout img",function(){
        var  bannerval  =   $(this).data('value');
        var buttonval  =   $(this).data('set');
        
       $(".preview_set").css("background", bannerval);
        $(".cc-dismiss").css("background", buttonval);
    });

    $('.widthSelect2').change(function () {
        var select=$(this).find(':selected').val();    
        $(".bar-message").css("font-size", select);
    });
    // banner background color
    
        const body1 = document.querySelector(".preview_set");
        const input1 = document.getElementById("colorPickerbutton3");
        const colorCode1 = document.getElementById("colorCodebutton3");
        setColor1();
        input1.addEventListener("input", setColor1);
        function setColor1() {
            body1.style.backgroundColor = input1.value;
            colorCode1.innerHTML = input1.value;
        }

    //  banner text color
        const body2 = document.querySelector(".preview_set");
        const input2 = document.getElementById("bannerTextback");
        const colorCode2 = document.getElementById("bannerText");
        setColor2();
        input2.addEventListener("input", setColor2);
        function setColor2() {
            body2.style.color = input2.value;
            colorCode2.innerHTML = input2.value;
        }

        //  banner text link
    const body3 = document.querySelector(".cc-link");
    const input3 = document.getElementById("bannertextlink");
    const colorCode3 = document.getElementById("bannerlink");
    setColor3();
    input3.addEventListener("input", setColor3);
    function setColor3() {
        body3.style.color = input3.value;
        colorCode3.innerHTML = input3.value;
    }

        //  button background color
        const body4 = document.querySelector(".cc-dismiss");
        const input4 = document.getElementById("buttonbackcolor");
        const colorCode4 = document.getElementById("buttoncolor");
        setColor4();
        input4.addEventListener("input", setColor4);
        function setColor4() {
            body4.style.backgroundColor = input4.value;
            colorCode4.innerHTML = input4.value;
        }

        //  button text color
        const body5 = document.querySelector(".cc-dismiss");
        const input5 = document.getElementById("buttontextcolor");
        const colorCode5 = document.getElementById("buttontext");    
        setColor5();
        input5.addEventListener("input", setColor5);
        function setColor5() {
            body5.style.color = input5.value;
            colorCode5.innerHTML = input5.value;
        }
            //  button border color
        const body6 = document.querySelector(".cc-dismiss");
        const input6 = document.getElementById("buttonbordercolor");
        const colorCode6 = document.getElementById("buttonborder");    
        setColor6();
        input6.addEventListener("input", setColor6);
        function setColor6() {
            body6.style.borderColor = input6.value;
            colorCode6.innerHTML = input6.value;
        }  

        $(document).on("click",".bannerlayout img",function(){
            var  bannerval  =   $(this).data('value');
            var buttonval  =   $(this).data('set');
            $('.color_circle[name="color_banner"]').val(bannerval);
            $('.color_circle[name="color_button"]').val(buttonval);
        });

        $(document).on("click",".bannerlayout img",function(){
            var self = $(this).data("value");
            var contrastColor = getContrastColor(self);
            $('.preview_set').css({'background-color': self,'color': contrastColor});
            $('.cc-link').css({'background-color': self,'color': contrastColor});
        });

        function getContrastColor(color) {
            var hex = color.replace(/#/, '');
            var red = parseInt(hex.substr(0, 2), 16);
            var green = parseInt(hex.substr(2, 2), 16);
            var blue = parseInt(hex.substr(4, 2), 16);
      
            var luminance = (0.2126 * red + 0.7152 * green + 0.0722 * blue) / 255;
            return luminance > 0.5 ? '#000000' : '#ffffff';
        }
      
          
          
    });