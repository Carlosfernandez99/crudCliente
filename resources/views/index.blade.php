<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cliente</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="app-body">
            <template v-if="menu==0">
                <frm-cliente></frm-cliente>
            </template>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>