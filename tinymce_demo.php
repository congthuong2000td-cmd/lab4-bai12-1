<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TinyMCE Quick Start Guide</title>
    <!-- Thay thế "no-api-key" bằng API key của bạn -->
    <script src="https://cdn.tiny.cloud/1/85arnf38l8yyx1z9fx4blsq7oei8xkct5vbfvbb4e5uwk713/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });
    </script>
</head>
<body>
    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
        <textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
    </form>
</body>
</html>
