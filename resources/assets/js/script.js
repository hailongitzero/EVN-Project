/**
 * Created by HaiLong on 9/1/2017.
 */
jQuery(document).ready(function () {

    "use strict";

    $('#logout').on('click', function () {
        var data = new FormData();
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type: 'POST',
            url: '/logout',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function () {
                location.replace(window.location.origin);
            },
            error: function () {
                location.replace(window.location.origin);
            }
        });
    });
    //init datatable
    $('#docCateTable').DataTable({
        "pageLength": 25
    });

    //init datatable
    $('#userTable').DataTable({
        "pageLength": 25
    });

    $('#tbDocumentManager').DataTable({
        "pageLength": 50
    });

    $('#tbUserDocumentCateAut').DataTable();

    //drop box nation on change function event
    $('#company').change(function () {
        $('#dept_id option').css("display", "none");
        $('#dept_id .'+$("#company option:selected").val()).css("display", "block");
        $('#dept_id .none').css("display", "block");
        $("#dept_id").get(0).selectedIndex = 0;
    });

    //fill data from table danh muc tai lieu to modal.
    $('#docCateTable').unbind('click');
    $('#docCateTable #cateModal').on("click", function () {
        var trObject = $(this).parent().parent('tr');
        console.log(trObject.find('.cateName').html());
        $('#mdCateName').val(trObject.find('.cateName').html());
        $('#mdCateId').val(trObject.find('#cateId').val());
        // $('#chkCateActive').prop('checked', true);
    });

    //modal danh muc tai lieu submit
    $('#btnUpdateDocCate').on("click", function () {
        var data = new FormData();
        data.append('cateId', $('#mdCateId').val());
        data.append('cateName', $('#mdCateName').val());
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type: 'POST',
            url: '/admin/docCateUpdate',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
                location.reload();
            },
            error: function (response) {
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false;
    });

    //table danh muc tai lieu submit
    $('#docCateTable').unbind('click');
    $('#docCateTable').on("click", "#saveDocCate", function () {
        var trObject = $(this).parent().parent('tr');

        var data = new FormData();
        data.append('cateId', trObject.find('#cateId').val());
        data.append('cateActive', trObject.find('#chkActive').prop("checked") == true ? 1 : 0);
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            type: 'POST',
            url: '/admin/docCateUpdate',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
            },
            error: function (response) {
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false;
    });

    //Them moi danh muc tai lieu
    $('#btnAddDocCate').on('click', function () {
        var data = new FormData();
        data.append('cateName', $('#mdAddCateName').val());
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));
        $.ajax({
            type: 'POST',
            url: '/admin/docCateInsert',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
                location.reload();
            },
            error: function (response) {
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false;
    })

    //create new user
    $('#addUserModal').on('click', '#btnAddNewUser', function () {
        var formObject =  $('#addUserModal');
        var data = new FormData();

        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('headers', $('meta[name="csrf-token"]').attr('content'));
        data.append('name', formObject.find('input#name').val());
        data.append('username', formObject.find('input#username').val());
        data.append('password', formObject.find('input#password').val());
        data.append('password_confirmation', formObject.find('input#password_confirmation').val());
        data.append('email', formObject.find('input#email').val());
        data.append('address', formObject.find('input#address').val());
        data.append('phone', formObject.find('input#phone').val());
        data.append('office_phone', formObject.find('input#office_phone').val());
        data.append('emp_cd', formObject.find('input#emp_cd').val());
        data.append('position', formObject.find('input#position').val());
        data.append('dept_id', formObject.find('select#dept_id :selected').val());

        $.ajax({
            type: 'POST',
            url: 'register',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
            },
            error: function (response) {
                console.log(response)
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false
    });

    //Update User information
    $('.editUserModal').on('click', '#btnUpdateUserInfor', function () {
        var formObject =  $(this.closest('form'));
        console.log(formObject);
        var data = new FormData();

        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('headers', $('meta[name="csrf-token"]').attr('content'));
        data.append('userId', formObject.find('input#userId').val());
        data.append('name', formObject.find('input#name').val());
        data.append('username', formObject.find('input#username').val());
        data.append('password', formObject.find('input#password').val());
        data.append('password_confirmation', formObject.find('input#password_confirmation').val());
        data.append('email', formObject.find('input#email').val());
        data.append('address', formObject.find('input#address').val());
        data.append('phone', formObject.find('input#phone').val());
        data.append('office_phone', formObject.find('input#office_phone').val());
        data.append('emp_cd', formObject.find('input#emp_cd').val());
        data.append('position', formObject.find('input#position').val());
        data.append('dept_id', formObject.find('select#dept_id :selected').val());

        $.ajax({
            type: 'POST',
            url: 'updateUser',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
            },
            error: function (response) {
                console.log(response)
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false
    });

    //save user status
    $('#userTable').unbind('click');
    $('#userTable').on("click", "#btnUpdateUserList", function () {
        var trObject = $(this).parent().parent('tr');

        var data = new FormData();
        data.append('userId', trObject.find('#userId').val());
        data.append('isActive', trObject.find('#chkActive').prop("checked") == true ? 1 : 0);
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            type: 'POST',
            url: '/admin/userUpdate',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
                location.reload();
            },
            error: function (response) {
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false;
    });

    //update user document authority
    //table danh muc tai lieu submit
    $('.tbUserDocumentCateAut').unbind('click');
    $('.tbUserDocumentCateAut').on("click", "#btnUpdateDocCateAuth", function () {
        var trObject = $(this).parent().parent('tr');

        var data = new FormData();
        data.append('userId', trObject.find('#userId').val());
        data.append('cateId', trObject.find('#cateId').val());
        data.append('isUpload', trObject.find('#chkUpload').prop("checked") == true ? 1 : 0);
        data.append('isActive', trObject.find('#chkActive').prop("checked") == true ? 1 : 0);
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            type: 'POST',
            url: '/admin/userUpdateDocCate',
            data: data,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            dataType: 'json',
            success: function (response) {
                alert(response.Content);
            },
            error: function (response) {
                alert("Lỗi hệ thống, vui lòng thử lại.");
            }
        });

        return false;
    });

    $(function() {
        $("#inpFile:file").change(function (){
            var fileName = $(this).val();
            $("#lblInpFile").html(fileName);
        });
    });

    $('#btnAddDoc').on('click', function () {
        var formObject = $(this.closest('form'));

        var data = new FormData();
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));
        data.append('cateId', formObject.find('#inpDocCateId').val());
        data.append('fileName', formObject.find('#inpDocName').val());
        data.append('file', ($("#inpFile"))[0].files[0]);
        data.append('totalTime', formObject.find('#inpDocTime').val());
        data.append('fromDate', formObject.find('#fromDate').val());
        data.append('toDate', formObject.find('#toDate').val());

        if($('#inpFile').val() == ''){
            alert("Bạn chưa nhập file!");
        }else if($('#inpDocName').val() == ''){
            alert("Bạn chưa nhập tên file!");
        }else {
            $.ajax({
                type: 'POST',
                url: '/uploadDocument',
                data: data,
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                dataType: 'json',
                success: function (response) {
                    alert(response.Content);
                },
                error: function (response) {
                    alert("Lỗi hệ thống, vui lòng thử lại.");
                }
            });

            return false;
        }

        return false
    });

    $('.myFileDelete').on('click', function () {
        var data = new FormData();
        data.append('_token', $('meta[name="csrf-token"]').attr('content'));
        data.append('header', $('meta[name="csrf-token"]').attr('content'));
        data.append('docId', $(this).find('#deleteFileId').val())
        var cfm = confirm('Bạn chắc chắn muốn xóa file này?');
        if (cfm ==true ){
            $.ajax({
                type: 'POST',
                url: '/deleteMyFile',
                data: data,
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                dataType: 'json',
                success: function (response) {
                    alert(response.Content);
                },
                error: function (response) {
                    alert("Lỗi hệ thống, vui lòng thử lại.");
                }
            });

            return false;
        }
    });

//    image gallery
    flexslider_init();
});

// flexslider init
function flexslider_init() {

    $('#flex-carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 130,
        itemMargin: 5,
        asNavFor: '#flex-slider'
    });

    $('#flex-slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#flex-carousel"
    });
}