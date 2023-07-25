
    $(document).on('click', '.down', function () {
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#myNumber").val(value)
    });
    $(document).on('click', '.up', function () {
        var value = $("#myNumber").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#myNumber").val(value)
    
    });

    $(document).on('click', '.bdown', function () {
        var value = $("#borderrad").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borderrad").val(value)
    });
    $(document).on('click', '.bup', function () {
        var value = $("#borderrad").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#borderrad").val(value)
    
    });

    $(document).on('click', '.bwdown', function () {
        var value = $("#borwidth").val();
        if (value != '') {
            value = parseInt(value) - 1;
        } else {
            value = -1;
        }
        $("#borwidth").val(value)
    });
    $(document).on('click', '.bwup', function () {
        var value = $("#borwidth").val();
        if (value != '') {
            value = parseInt(value) + 1;
        } else {
            value = 0;
    
        }
        $("#borwidth").val(value)
    
    });
