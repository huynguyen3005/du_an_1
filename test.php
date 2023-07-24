<!DOCTYPE html>
<html>
<head>
  <title>Gửi Form mà không load lại trang</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <form id="myForm">
    <input type="text" name="username" placeholder="Tên người dùng" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="button" onclick="submitForm()">Gửi</button>
  </form>
  <div id="result"></div>

  <script>
    function submitForm() {
      var formElement = $("#myForm");
      var formData = formElement.serialize();

      // Sử dụng Ajax để gửi dữ liệu form đến máy chủ PHP
      $.ajax({
        type: "POST",
        url: "process_form.php", // Thay thế "process_form.php" bằng địa chỉ xử lý dữ liệu form trên máy chủ.
        data: formData,
        success: function(response) {
          // Xử lý kết quả trả về từ máy chủ ở đây
          $("#result").html(response);
        },
        error: function() {
          // Xử lý lỗi (nếu có)
          console.error('Đã xảy ra lỗi khi gửi form.');
        }
      });
    }
  </script>
</body>
</html>