<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php echo $this->Html->script('countdown'); ?>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        var clock = document.getElementById("countdown-holder"), targetDate = new Date(2015, 04, 01, 17);
        clock.innerHTML = countdown(targetDate).toString();
        setInterval(function(){
            clock.innerHTML = countdown(targetDate).toString();
        }, 1000);
    });
</script>
<style type="text/css" media="all">
    body { 
        background-image:none;
        background-color:#57bec7;
    }
    #content {
        width:65%;
        margin:30px auto;
        text-align:center;
        font-family:'Oswald';
    }
    h2 {
        font-weight:400;
        font-family:'Oswald';
        font-size:48px;
        color:#535353;
    }
    h1 {
        font-family:'Oswald';
        font-weight:300;
        color:#fffc95;
        font-size:44px;
    }
    


</style>
<div id="content">
<h2>Gowanus Yacht Club</h2>
<h1 id="countdown-holder"></h1>
</div>
