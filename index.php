<?php 
    session_start();
    include '_main.php';

	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('location:login.php');
		exit();
	}
    else {
        $id = decrypt($_SESSION['id']);
        $query=mysqli_query($conn,"SELECT * FROM users WHERE id='".$id."'");
        $row=mysqli_fetch_assoc($query);
    }
?>
?>
<?=template_header('Landing Page')?>
<div class="container" style="padding: 0 170px;">
        <div class="row mt-3 shadow px-5 py-3 mb-4 bg-white rounded d-flex justify-content-between">
            <h2 class="m-1">Welcome, <?= $row['fullname']; ?>!</h2>
            <a href="logout.php" class="m-1"><button type="button" class="btn btn-danger shadow bg-danger">Logout</button></a>
        </div>

        <div class="row p-5 shadow mb-5 bg-white rounded">
            <div class="tenor-gif-embed" data-postid="16179355" data-share-method="host" data-width="100%" data-aspect-ratio="1.5709779179810726"><a href="https://tenor.com/view/star-wars-baby-yoda-the-mandalorian-welcome-wave-gif-16179355">Star Wars Baby Yoda GIF</a> from <a href="https://tenor.com/search/starwars-gifs">Starwars GIFs</a></div><script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        </div>
    </div>
<?=template_footer()?>