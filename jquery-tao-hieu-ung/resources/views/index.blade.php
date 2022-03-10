
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<button>Start Animation</button>
<p>By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!</p>
<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>

<script>
    $(document).ready(function(){
        $("button").on('click',function(){
            let div = $("div");
            div.animate({left: '100px'}, "slow");
            div.animate({fontSize: '50px'}, "slow");
        });
    });
</script>
</body>
</html>
