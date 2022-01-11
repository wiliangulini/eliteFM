import audios from "assets/js/data.js";
import { path, secondsToMinutes } from "assets/js/utils.js";
import elements from "assets/js/playerElements.js";

export default {
  audioData: audios,
  currentAudio: {},
  currentPlaying: 0,
  isPlaying: false,
  start() {
    elements.get.call(this);
    this.update();
  },

  play() {
    this.isPlaying = true;
    this.audio.play();
    this.playPause.innerText = "play_arrow";
  },

  pause() {
    this.isPlaying = false;
    this.audio.pause();
    this.Pause.innerText = "pause";
  },

  togglePlayPause() {
    if (this.isPlaying == false) {
      this.play();
    }
  },

  tooglePause() {
    if(this.isPlaying == true) {
      this.pause();
    }
  },

  toggleMute() {
    this.audio.muted = !this.audio.muted;
    this.mute.innerText = this.audio.muted ? "volume_down" : "volume_up";
  },


  setVolume(value) {
    this.audio.volume = value / 100;
  },

  setSeek(value) {
    this.audio.currentTime = value;
  },

  timeUpdate() {
    this.currentDuration.innerText = secondsToMinutes(this.audio.currentTime);
    this.seekbar.value = this.audio.currentTime;
  },

  update() {
    this.currentAudio = this.audioData[this.currentPlaying];
    //this.title.innerText = this.currentAudio.title;
    //this.artist.innerText = this.currentAudio.artist;
    elements.createAudioElement.call(this, path(this.currentAudio.file));

    this.audio.onloadeddata = () => {
      elements.actions.call(this);
    };
  },

};
