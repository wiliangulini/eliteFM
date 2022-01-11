//listagem 8

     $(function() {
        // Definir playlist
        let playlist = [{
            artist: 'Daft Punk',
            title: 'Technologic',
            mp3: 'songs/music.mp3'
        }, {
            artist: 'Daft Punk',
            title: 'Human After All',
            mp3: 'songs/music1.mp3'
        }];
      });

      //listagem 10
      let currentTrack = 0;
      let numTracks = playlist.length;

      //listagem 11
      let player = $(".player").jPlayer({
      ready: function () {
          // configura a faixa inicial do jPlayer
          player.jPlayer("setMedia", playlist[currentTrack])

          // reproduzir a faixa atual. Se não quiser que o player comece a tocar
          automaticamente
                // retirar esta linha
            player.playCurrent();
        },
        ended: function() {
            // quando terminar de tocar uma música, ir para a próxima
            $(this).playNext();
        },
        play: function(){
            // quando começar a tocar, escrever o nome da faixa sendo executada
            $('.player-current-track').text(playlist[currentTrack].artist+' - '+playlist[currentTrack].title);
        },
        swfPath: 'js/plugins/jplayer/',
        supplied: "mp3",
        cssSelectorAncestor: "",
        cssSelector: {
            play: '.player-play',
            pause: ".player-pause",
            stop: ".player-stop",
            seekBar: ".player-timeline",
            playBar: ".player-timeline-control"
        },
        size: {
            width: "1px",
            height: "1px"
        }
      });

      //listagem 12

      player.playCurrent = function() {
        player.jPlayer("setMedia", playlist[currentTrack]).jPlayer("play");
      }

      player.playNext = function() {
      currentTrack = (currentTrack == (numTracks -1)) ? 0 : ++currentTrack;
      player.playCurrent();
      };

      player.playPrevious = function() {
        currentTrack = (currentTrack == 0) ? numTracks - 1 : --currentTrack;
        player.playCurrent();
      };

      //listagem 13
      $('.player-next').click(function() {
        player.playNext();
      });

      $('.player-prev').click(function() {
        player.playPrevious();
      });