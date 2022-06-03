<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="/public/css/admin/theory.css">-->
    <title>Document</title>
</head>
<body>
    <div id="editorjs" style="text-align: justify">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script>
        var editor = new EditorJS({
            holder: 'editorjs',
            tools:{
                header: Header,
                image: SimpleImage,
            }
        });
    </script>
</body>
</html>

