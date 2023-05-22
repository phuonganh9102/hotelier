// Alert Redirect to Another Link
$(document).on('click', '#link', function(e) {
    swal({
        title: "Bạn muốn đăng xuất?", 
        text: "Bạn sẽ được chuyển hướng tới trang đăng nhập", 
        type: "warning",
        confirmButtonText: "Đăng xuất",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                window.location = './logout.asp';
            } else if (result.dismiss === 'cancel') {
                swal(
                  'Đã hủy',
                  'Bạn đã ở lại :)',
                  'error'
                )
            }
        })
  });
$(document).on('click', '#delete', function(e) {
    swal({
        title: "Bạn muốn đăng xuất?", 
        text: "Bạn sẽ được chuyển hướng tới trang đăng nhập", 
        type: "warning",
        confirmButtonText: "Đăng xuất",
        showCancelButton: true
    })
        .then((result) => {
            if (result.value) {
                window.location = './logout.asp';
            } else if (result.dismiss === 'cancel') {
                swal(
                  'Đã hủy',
                  'Bạn đã ở lại :)',
                  'error'
                )
            }
        })
  });
  // Alert Modal Type
  $(document).on('click', '#success', function(e) {
      swal(
          'Success',
          'You clicked the <b style="color:green;">Success</b> button!',
          'success'
      )
  });
  
  $(document).on('click', '#error', function(e) {
      swal(
          'Error!',
          'You clicked the <b style="color:red;">error</b> button!',
          'error'
      )
  });
  
  $(document).on('click', '#warning', function(e) {
      swal(
          'Warning!',
          'You clicked the <b style="color:coral;">warning</b> button!',
          'warning'
      )
  });
  
  $(document).on('click', '#info', function(e) {
      swal(
          'Info!',
          'You clicked the <b style="color:cornflowerblue;">info</b> button!',
          'info'
      )
  });
  
  $(document).on('click', '#question', function(e) {
      swal(
          'Question!',
          'You clicked the <b style="color:grey;">question</b> button!',
          'question'
      )
  });
  