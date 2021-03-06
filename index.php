<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textillate.js</title>
    <link href="css/animate.css" rel="stylesheet">
  </head>
  
  <body>
    <h1 class="tlt" data-in-effect="rollIn">Title</h1>
    <h1 class="tlt">
      <ul class="texts">
        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, dignissimos.</li>
      </ul>
    </h1>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <!-- <script>hljs.initHighlightingOnLoad();</script> -->
    <script>
      $(function () {
        $('.tlt').textillate({ 
         
          // the default selector to use when detecting multiple texts to animate
          selector: '.texts',

          // enable looping
          loop: false,

          // sets the minimum display time for each text before it is replaced
          //設置替換前每個文本的最短顯示時間
          minDisplayTime: 1000,

          // sets the initial delay before starting the animation
          // (note that depending on the in effect you may need to manually apply
          // visibility: hidden to the element before running this plugin)
         //初始延遲
          initialDelay: 0,

          // set whether or not to automatically start animating
          autoStart: true,

          // custom set of 'in' effects. This effects whether or not the
          // character is shown/hidden before or after an animation
          inEffects: ['flipInX'],

          // custom set of 'out' effects
          outEffects: [ 'flipInY' ],

          // in animation settings
          in: {
            // set the effect name
            //效果
            effect: 'flipInX',

            // set the delay factor applied to each consecutive character
            delayScale: 1.5,

            // set the delay between each character
            //延遲
            delay: 50,

            // set to true to animate all the characters at the same time
            //同步
            sync: false,

            // randomize the character sequence
            // (note that shuffle doesn't make sense with sync = true)
            //隨機播放
            shuffle: false,

            // reverse the character sequence
            // (note that reverse doesn't make sense with sync = true)
            //反向
            reverse: false,

            // callback that executes once the animation has finished
            callback: function () {}
          },

          // out animation settings.
          out: {
            effect: 'flipInX',
            delayScale: 1.5,
            delay: 50,
            sync: false,
            shuffle: false,
            reverse: false,
            callback: function () {}
          },

          // callback that executes once textillate has finished
          callback: function () {},

          // set the type of token to animate (available types: 'char' and 'word')字元&字串
          type: 'char'
          
        });
      })
    </script>
    
  </body>
</html>
