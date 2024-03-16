<?php include "commons/header.php"?>
  <link rel="stylesheet" href="/style/index.css">
  <div class="main">
    <div class="main_text">
      <p>Hello!</p>
      <p>I am Juli a Finnish furry from '09(thats <?php
       function calculate_elapsed_years($start_date) {
          $difference = time() - strtotime($start_date);
          return floor($difference / (365 * 24 * 60 * 60));
      }
      echo calculate_elapsed_years('2009-08-29');
      ?> years old). I go by Juli or Julimiro, my preferred pronouns are he/him but they/them is also fine.</p></p><br>
      <p>I have a few coding projects which are on my github and replit. I am also working on a game, for more info visit <a href="/projects/">projects</a>.</p><br>
      <p>My socials can be found below</p>
      <div class="socials">
        <a target="_blank" href="https://twitter.com/julithefurry"><img id="twitter" width=50px height=50px src="/icons/twitter.svg"/></img></a>
        <a target="_blank" href="https://www.last.fm/user/Julimiro/listening-report/week"><img width=50px height=50px src="/icons/lastfm.svg"/></img></a>
        <a target="_blank" href="https://www.reddit.com/user/Julis_texsture_team/"><img width=50px height=50px src="/icons/reddit.svg"/></img></a>
        <a target="_blank" href="https://steamcommunity.com/id/julimiro/"><img width=50px height=50px src="/icons/steam.svg"/></img></a>
        <a target="_blank" href="https://www.youtube.com/@JuliTheFurry"><img width=50px height=50px src="/icons/youtube.webp"/></img></a>
        <a target="_blank" href="https://discord.com/users/1043510819859730533"><img width=50px height=50px src="/icons/discord.webp"/></img></a>
      </div>
    <div class="fox_div">
      <img id=myImg alt="Cute foxes :3">
      <p>Images stolen from <a target="_blank" href="https://foxes.cat">foxes.cat</a></p>
     </div>
       </div>
    
  </div>
</div>

  

  <script>
  function change() {
    document.getElementById("myImg").src = "https://foxes.cat/api/v1/media/"+String(Math.round((Math.random()*2506)+1))+"/file";
  }
</script>
<body onload="change()"></body>

<?php include "commons/footer.php"?>