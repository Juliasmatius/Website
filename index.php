<?php include "static/commons/header.php"; ?>
<?php
$cars = array("https://api.tinyfox.dev/img?animal=fox","https://api.tinyfox.dev/img?animal=manul","https://api.tinyfox.dev/img?animal=serval","https://api.tinyfox.dev/img?animal=shiba","https://api.tinyfox.dev/img?animal=racc","https://api.tinyfox.dev/img?animal=dook","https://api.tinyfox.dev/img?animal=ott","https://api.tinyfox.dev/img?animal=woof","https://api.tinyfox.dev/img?animal=caracal","https://api.tinyfox.dev/img?animal=marten","https://api.tinyfox.dev/img?animal=wah");

$animal_url = $cars[rand(0,count($cars)-1)];

function calculate_elapsed_years($start_date)
{
    $difference = time() - strtotime($start_date);
    return floor($difference / (365 * 24 * 60 * 60));
}
$date = calculate_elapsed_years("2009-08-29");
?>

  <img id=adolf src="/static/icons/twitter_better.svg">
  <link rel="stylesheet" href="/static/style/index.css">
  <div class="main">
    <div class="fox_div">
      <img src="<?php echo $animal_url;?>" id=myImg alt="Cute foxes :3">
      <p>Images stolen from <a target="_blank" href="https://tinyfox.dev/image-list/">tinyfox.dev</a></p>
     </div>
    <div class="main_text">
      <h2>Hello!</h2>
      <p>I am Juli, a Finnish pansexual gender unsure furry from '09(thats <?php echo $date?> years old). I go by Juli or Julimiro, any pronouns are fine.</p></p><br>
      <p>I have a few coding projects which are on my github and replit. I am also working on a game, for more info visit <a href="/projects/">projects</a>.</p><br>
      <p>My socials can be found below</p>
      <div class="socials">
        <a alt="twitter" target="_blank" href="https://twitter.com/julithefurry"><img alt="twitter" title="Twitter" id="twitter" width=50px height=50px src="/static/icons/twitter.svg"/></img></a>
        <a alt="Fediverse" target="_blank" href="https://eepykitty.lol/@juli"><img alt="Fediverse" title="Fediverse" width=50px height=50px src="/static/icons/fediverse.svg"/></img></a>
        <a alt="Last.fm" target="_blank" href="https://www.last.fm/user/Julimiro"><img alt="Last.fm" title="Last.fm" width=50px height=50px src="/static/icons/lastfm.svg"/></img></a>
        <a alt="Lemmy" target="_blank" href="https://lemmy.blahaj.zone/u/Juli"><img alt="Lemmy" title="Lemmy" width=50px height=50px src="/static/icons/lemmy.svg"/></img></a>
        <a alt="Steam" target="_blank" href="https://steamcommunity.com/id/julimiro/"><img alt="Steam" title="Steam" width=50px height=50px src="/static/icons/steam.svg"/></img></a>
        <a alt="Youtube" target="_blank" href="https://www.youtube.com/@JuliTheFurry"><img alt="Youtube" title="Youtube" width=50px height=50px src="/static/icons/youtube.svg"/></img></a>
      </div>
    
       
      </div>

  </div>
</div>

<?php include "static/commons/footer.php"; ?>
