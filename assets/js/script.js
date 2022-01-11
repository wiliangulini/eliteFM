if(screen.width > 1371) {
  // carousel vertical

  $(document).ready(() => {
    $('#vertical').lightSlider({
      gallery:true,
      item:1,
      vertical:true,
      verticalHeight:500,
      vThumbWidth:100,
      thumbItem:6,
      thumbMargin:2,
      slideMargin:0
    });  
  });
}


// end carousel vertical
/*
const podcastAudio = document.getElementById('podcast-audio');

const playBtn = document.getElementById('podcast-play');

const pauseBtn = document.getElementById('podcast-pause');

// Play audio & mostra pause btn
let playShow = () => {
  podcastAudio.play();
};

// Pause audio & mostra play btn
let pauseShow = () => {
  podcastAudio.pause();
};
*/
if(screen.width <= 768) {

  //carousel vertical vira horizontal

  $(document).ready(function() {
    $('#vertical').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#vertical .lslide'
            });
        }   
    });  
  });

  // col12 #team
  let col12 = document.querySelectorAll('.edit');

  col12.forEach((e) => {
    e.innerHTML = `<div class='col-sm-6 col-md-6 col-lg-6'>
    <div class='col-sm-3 col-md-3'>
      <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
      <div class='nameTeam'>
        <p class='h6 red'>Jair cristo</p>
        <p class='function'>Locutor</p>
      </div>
    </div>
    <div class='col-sm-3 col-md-3'>
      <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
      <div class='nameTeam'>
        <p class='h6 red'>Jair cristo</p>
        <p class='function'>Locutor</p>
      </div>
    </div>
  </div>
  <div class='col-sm-6 col-md-6 col-lg-6'>
    <div class='col-sm-3 col-md-3'>
      <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
      <div class='nameTeam'>
        <p class='h6 red'>Jair cristo</p>
        <p class='function'>Locutor</p>
      </div>
    </div>
    <div class='col-sm-3 col-md-3'>
      <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
      <div class='nameTeam'>
        <p class='h6 red'>Jair cristo</p>
        <p class='function'>Locutor</p>
      </div>
    </div>  
  </div>  `;
  });

  let imgLeft = document.querySelector('.image-left');

  imgLeft.setAttribute('src','assets/image/lateral-left-mob.webp');

}
// days week fundo branco
document.querySelectorAll('.dw .h5').forEach((e) => {
  e.addEventListener('click', () => {
    document.querySelectorAll('.dw .h5').forEach((el) => {
      el.classList.remove('backWhite');
    });
    setTimeout(() => {
      e.classList.add('backWhite');
    }, 200);
  });
});

document.querySelectorAll('.ew .red').forEach((e) => {
 
  e.addEventListener('click', () => {
      document.querySelectorAll('.ew .red').forEach((el) => {
          el.classList.remove('backRed');
      });
      setTimeout(() => {
          e.classList.add('backRed');
      }, 200);
  });
});

/*
let range = () => {
  let resultado = document.getElementById("resultado");
  let valor = document.getElementById("valor").value;
  resultado.innerHTML = valor
 }
 
 range();
 
 document.addEventListener("change", range);*/

 if(screen.width < 768) {
   document.getElementById('grafico').setAttribute('src','assets/image/grafico-mob.webp');
 }


if(screen.width > 1023 && screen.width < 1371) {
  // carousel vertical

  $(document).ready(() => {
    $('#vertical').lightSlider({
      gallery:true,
      item:1,
      vertical:true,
      verticalHeight:400,
      vThumbWidth:100,
      thumbItem:6,
      thumbMargin:2,
      slideMargin:0
    });  
  });
}