<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<link href="{{ asset('/css/styles.css') }}" rel="stylesheet"> 
<style>
    /*FORM DT {
        clear:both;
        width:33%;
        float:left;
        text-align:right;
    }

    FORM DD {
        float:left;
        width:66%;
        margin:0 0 0.5em 0.25em;
    }*/

    html, body {
    font-family: 'Roboto', 'Helvetica', sans-serif;
    background-color: #95a5a6;
}    
</style>
</head>
<body>
    @yield('content')
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
</body>
</html>