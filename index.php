<?php include "static/commons/header.php"; ?>

  <img id=adolf src="/static/icons/twitter_better.svg">
  <link rel="stylesheet" href="/static/style/index.css">
  <div class="main">
    <div class="fox_div">
      <img id=myImg alt="Cute foxes :3">
      <p>Images stolen from <a target="_blank" href="https://tinyfox.dev/image-list/">tinyfox.dev</a></p>
     </div>
    <div class="main_text">
      <h2>Hello!</h2>
      <p>I am Juli a Finnish pansexual furry from '09(thats <?php
      function calculate_elapsed_years($start_date)
      {
          $difference = time() - strtotime($start_date);
          return floor($difference / (365 * 24 * 60 * 60));
      }
      echo calculate_elapsed_years("2009-08-29");
      ?> years old). I go by Juli or Julimiro, any pronouns are fine but he/him is preferred.</p></p><br>
      <p>I have a few coding projects which are on my github and replit. I am also working on a game, for more info visit <a href="/projects/">projects</a>.</p><br>
      <p>My socials can be found below</p>
      <div class="socials">
        <a alt="twitter" target="_blank" href="https://twitter.com/julithefurry"><img alt="twitter" title="Twitter" id="twitter" width=50px height=50px src="/static/icons/twitter.svg"/></img></a>
        <a alt="mastadon" target="_blank" href="https://eepykitty.lol/@juli"><img alt="mastodon" title="Mastodon" width=50px height=50px src="/static/icons/mastodon.svg"/></img></a>
        <a alt="Last.fm" target="_blank" href="https://www.last.fm/user/Julimiro/listening-report/week"><img alt="Last.fm" title="Last.fm" width=50px height=50px src="/static/icons/lastfm.svg"/></img></a>
        <a alt="Reddit" target="_blank" href="https://www.reddit.com/user/Julis_texsture_team/"><img alt="Reddit" title="Reddit" width=50px height=50px src="/static/icons/reddit.svg"/></img></a>
        <a alt="Steam" target="_blank" href="https://steamcommunity.com/id/julimiro/"><img alt="Steam" title="Steam" width=50px height=50px src="/static/icons/steam.svg"/></img></a>
        <a alt="Youtube" target="_blank" href="https://www.youtube.com/@JuliTheFurry"><img alt="Youtube" title="Youtube" width=50px height=50px src="/static/icons/youtube.svg"/></img></a>
        <a alt="Discord" target="_blank" href="https://discord.com/users/1043510819859730533"><img alt="Discord" title="Discord" width=50px height=50px src="/static/icons/discord.svg"/></img></a>
      </div>
    
       
      </div>

  </div>
</div>



  <script>
  const urls = ["https://api.tinyfox.dev/img?animal=fox","https://api.tinyfox.dev/img?animal=manul","https://api.tinyfox.dev/img?animal=serval","https://api.tinyfox.dev/img?animal=shiba","https://api.tinyfox.dev/img?animal=racc","https://api.tinyfox.dev/img?animal=dook","https://api.tinyfox.dev/img?animal=ott","https://api.tinyfox.dev/img?animal=woof","https://api.tinyfox.dev/img?animal=caracal","https://api.tinyfox.dev/img?animal=marten","https://api.tinyfox.dev/img?animal=wah"];
  function change() {
    console.log(urls.length)
    console.log(Math.random()*urls.length)
    var index = Math.round(Math.random()*urls.length);
    console.log(index);
    var url = urls[index];
    console.log(url)
    document.getElementById("myImg").src = url;
  }
</script>
<body onload="change()"></body>

<?php include "static/commons/footer.php"; ?>
